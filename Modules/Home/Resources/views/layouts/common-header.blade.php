<?php

$allCategory = \Modules\Home\Entities\Category::getInstance()->getRecordsWhere(['status' => 'A']);
$allCourse = \Modules\Home\Entities\Course::getInstance()->getRecordsWhere(['status' => 'A'])->all();

$courseCategoryWise = [];
array_walk($allCourse, function ($c) use (&$courseCategoryWise) {
    $courseCategoryWise[$c->category][] = $c;
});
?>
<header>
    <!-- Header Top -->
    <div class="header-top header-top-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12 header-top-left">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone"></i> <a href="tel:+2034852989" title="Phone number">+1 210 401
                                5100</a></li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:info@edulogy.com" title="Email address">
                                info@edulogy.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-xs-12 header-top-right">
                    <ul class="list-unstyled">
                        @if (Auth::check()&& \Illuminate\Support\Facades\Session::has('user'))
                            <li><a href="/my-profile" class="apply-btn">My Profile</a></li>
                            <li><a href="/logout">Logout</a></li>
                        @else

                            <li><a href="/register">Register</a></li>
                            <li><a href="/login" class="apply-btn">Login</a></li>
                        @endif
                        <li><a href="javascript:;" id="get-cart-details">Cart (<span id="cart-count">0</span>)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- Ends: .header-top -->
    <div class="main-menu">
        <div class="container">
            <div class="row">
                <!-- Main Menu -->
                <div class="col-sm-12">
                    <nav class="navbar" id="main-nav">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#edulight-navbar-collapse" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Change Logo Here -->
                                <a class="navbar-brand" href="/"><img src="/assets/images/logo.jpg" alt="EduLight"></a>
                            </div><!-- End .navbar-header -->

                            <!-- Fullscreen search -->
                            <div class="search-wrap">
                                <div class="search-inner">
                                    <div class="search-cell">
                                        <form method="get">
                                            <div class="search-field-holder">
                                                <input type="search" class="form-control main-search-input"
                                                       placeholder="Search ...">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end fullscreen search -->

                            <div class="nav-container">
                                <div class="menu-search">
                                    <ul class="list-unstyled">
                                        <li class="hidden-xs">
                                            <ul class="list-unstyled">
                                                <li class="nav-search-wrap hidden-xs">
                                                    <a href="#" class="nav-search search-trigger">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li><!-- Ends .nav-right -->
                                    </ul>
                                </div>
                                <div class="collapse navbar-collapse" id="edulight-navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                        class="fa fa-bars"></i> Courses</a>
                                            <ul class="dropdown-menu">
                                                @foreach($allCategory as $category)
                                                    @if(isset($courseCategoryWise[$category->id]))
                                                        <li class="mega-menu dropdown-submenu"><a
                                                                    href="javascript:;">{{trim($category->category)}}</a>
                                                            <i class="fa fa-angle-right"></i>
                                                            <ul class="mega-menu-block list-unstyled dropdown-menu">
                                                                <li>
                                                                    <div class="mega-menu-content clearfix">
                                                                <span class="mega-content-block">
                                                                     @foreach($courseCategoryWise[$category->id] as $course)
                                                                        {{--<a href="/course/{{$course->id}}/{{str_replace(' ','-',strtolower(trim($course->courseName)))}}">{{trim($course->courseName)}}</a>--}}
                                                                        <a href="/course/{{$course->id}}">{{trim($course->courseName)}}</a>
                                                                    @endforeach
                                                                </span>
                                                                        {{--<span class="mega-content-block-second">--}}
                                                                        {{--<a href="#" title="">PRINCE2<sup>®</sup> Foundation</a>--}}
                                                                        {{--</span>--}}
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li><!-- End Pages -->
                                        <li><a href="/about-us">About Us</a></li>
                                        <li><a href="/accreditation">Accreditation</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="/contact-us">Contact</a></li><!-- End Contact -->
                                        <li><a href="#">Enroll Now</a></li>
                                    </ul>
                                </div><!-- .navbar-collapse -->
                            </div><!-- Ends: .nav-container -->
                        </div><!-- .container -->
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- Ends: .main-menu -->
</header><!-- ends: Header -->
<div id="cart-details-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">My Cart</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-success">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Participant</th>
                                <th>Item Detail</th>
                                <th>Price(USD)</th>
                                <th>Subtotal(USD)</th>
                                <th>Remove</th>
                            </tr>
                            </thead>
                            <tbody id="cart-tbody"></tbody>
                            <thead>
                            <tr>
                                <th></th>
                                <th>Total</th>
                                <th></th>
                                <th id="total-cart-value">0</th>
                                <th></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a href="/payment">
                    <button type="button" class="btn btn-primary">Place order</button>
                </a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>