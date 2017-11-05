@extends('home::layouts.master')
@section('title','Course')
@section('content')
    <div class="page-title parallax parallax4">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12 title_courses">
                    <h1 class="titlefont">ITIL® FOUNDATION CERTIFICATION TRAINING COURSE</h1>
                    <p><i class="fa fa-thumbs-o-up"></i> &nbsp;
                        <label style=" color:#F47A00; "><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></label>
                        <a id="scrollToRating" style="color:#FFF">156 ratings</a> | <i class="fa fa-users"></i> 2064
                        students enrolled </p>

                    <br>


                    <div class="media media-classroom">
                        <div class="media-left pull-left hidden-xs hidden-sm">
                            <div class="courses_image">
                                <span class="img-blur">
                                    <img src="images/index/itil.jpg" alt="DevOps Training" width="200"
                                         class="media-object img-rounded">
                                </span>


                            </div>
                        </div>
                        <div class="media-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <ul class="fa-ul ul-keyfeatures bottom-space clearfix">
                                        <li><i class="fa-li fa fa-angle-right fa-lg"></i>16 hours of Instructor-led
                                            training
                                        </li>
                                        <li><i class="fa-li fa fa-angle-right fa-lg"></i>16 PDUs (or 25 PDUs on
                                            completion of classroom training + 9 hours of ITIL® e-learning)
                                        </li>
                                        <li><i class="fa-li fa fa-angle-right fa-lg"></i>Course fee includes Foundation
                                            exam fee
                                        </li>
                                        <li><i class="fa-li fa fa-angle-right fa-lg"></i>180 days Free e-learning on
                                            ITIL® Foundation
                                        </li>
                                        <li><i class="fa-li fa fa-angle-right fa-lg"></i>4 Mock Exams to practice for
                                            the certification exam
                                        </li>
                                        <li><i class="fa-li fa fa-angle-right fa-lg"></i>Courseware approved by APMG and
                                            PEOPLECERT
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-5" id="select-date-price">
                                    <div class="enroll-options">
                                        <div class="text-right">
                                            Have any questions? <a data-toggle="modal" data-target="#drop_a_query"
                                                                   id="contact-us" href="javascript:void(0);">Contact
                                                Us!</a>
                                        </div>
                                        <ul class="text-capitalize">
                                            <li>
                                                <span title="Group/Private training">Group/Private training</span>
                                                <a style="font-size:0.98em" data-whatever="@mdo"
                                                   data-target="#request-quote" data-toggle="modal" class="text-danger"
                                                   href="javascript:void(0);">Book a Session</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page-title parallax -->

    <section class="main-content blog-posts flat-row course-grid have-sidebar">
        <div class="container">

            <div class="row_course">
                <div class="post-content">


                    <div class="section-schedule" id="detail-schedule">
                        <h3>Classroom/Online Training
                        </h3>
                        <div role="tabpanel" class="bg-white-rounded border-round">
                            <!-- Nav tabs -->
                            <ul class="nav nav-justified nav-list-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#classroom" aria-controls="home" role="tab" data-toggle="tab"
                                       aria-expanded="true">Classroom</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#virtual" aria-controls="profile" role="tab" data-toggle="tab"
                                       aria-expanded="false">Online Classes</a>
                                </li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content col-text">
                                <div role="tabpanel" class="tab-pane fade active in" id="classroom">
                                    <div class="bg-white-rounded border-round">
                                        <div class="clearfix table-head text-uppercase hidden-xs">
                                            <div class="col-sm-3 table-caption">
                                                <i class="fa fa-calendar"></i> Date
                                            </div>
                                            <div class="col-sm-3 table-caption">
                                                <i class="fa fa-clock-o fa-low-size"></i> time
                                            </div>
                                            <div class="col-sm-2 table-caption type-course">
                                                <i class="fa fa-th-list"></i> course type
                                            </div>
                                            <div class="col-sm-2 table-caption">
                                                <i class="fa fa-tags"></i> price
                                            </div>
                                            <div class="col-sm-2 table-caption text-center">
                                                &nbsp;
                                            </div>
                                        </div>

                                        <div itemscope="" itemtype="http://schema.org/Product">


                                            <div class="clearfix table-body Classroom">
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-calendar fa-low-size"></i>&nbsp; Date :
                                                        </div>
                                                        <div class="xs-caption">
                                                            <div class="text-capitalize schedule-date">Sep 28 - Sep 29
                                                            </div>
                                                            <div class="color-gray text-capitalize">
                                                                ( 2 Days )

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-clock-o fa-low-size"></i>&nbsp; time :
                                                        </div>
                                                        <div class="xs-caption">
                                                            09:00 AM - 06:00 PM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption type-course">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> type :</div>
                                                        <div class="xs-caption">
                                                            Classroom
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> price :</div>
                                                        <div class="xs-caption">
                                                            <strike class="color-gray"> USD 1599.00 </strike>
                                                            <div class="schedule-price">USD 1299.00</div>
                                                            <div><span class="color-gray">valid till :</span> 19 Sep
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption text-center ">
                                                    <form action="#" id="add_to_cart_598946eb68b76" method="post">
                                                        <button type="submit" class="btn btn-danger" data-currency="USD"
                                                                data-category="Classroom" data-price="12999.00">ENROLL
                                                            NOW
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="clearfix table-body Classroom">
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-calendar fa-low-size"></i>&nbsp; Date :
                                                        </div>
                                                        <div class="xs-caption">
                                                            <div class="text-capitalize schedule-date">Oct 26 - Oct 27
                                                            </div>
                                                            <div class="color-gray text-capitalize">
                                                                ( 2 Days )

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-clock-o fa-low-size"></i>&nbsp; time :
                                                        </div>
                                                        <div class="xs-caption">
                                                            09:00 AM - 06:00 PM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption type-course">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> type :</div>
                                                        <div class="xs-caption">
                                                            Classroom
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> price :</div>
                                                        <div class="xs-caption">
                                                            <strike class="color-gray"> USD 1599.00 </strike>
                                                            <div class="schedule-price">USD 1299.00</div>
                                                            <div><span class="color-gray">valid till :</span> 10 Oct
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption text-center ">
                                                    <form action="#" id="#" method="post">

                                                        <button type="submit" class="btn btn-danger" data-currency="USD"
                                                                data-category="Classroom" data-price="12999.00">ENROLL
                                                            NOW
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="clearfix table-body Virtual schedule_toggle"
                                                 style="display: block;">
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-calendar fa-low-size"></i>&nbsp; Date :
                                                        </div>
                                                        <div class="xs-caption">
                                                            <div class="text-capitalize schedule-date">Nov 16 - Nov 17
                                                            </div>
                                                            <div class="color-gray text-capitalize">
                                                                ( 2 Days )
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-clock-o fa-low-size"></i>&nbsp; time :
                                                        </div>
                                                        <div class="xs-caption">
                                                            07:30 PM - 11:30 PM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption type-course">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> type :</div>
                                                        <div class="xs-caption">
                                                            <div class="xs-caption">
                                                                Classroom
                                                            </div>
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> price :</div>
                                                        <div class="xs-caption">
                                                            <strike class="color-gray"> USD 1599.00 </strike>
                                                            <div class="schedule-price">USD 1299.00</div>
                                                            <div><span class="color-gray">valid till :</span> 06 Nov
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption text-center ">
                                                    <form action="#" method="post">

                                                        <button type="submit" class="btn btn-danger">ENROLL NOW
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="clearfix table-body Classroom schedule_toggle"
                                                 style="display: block;">
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-calendar fa-low-size"></i>&nbsp; Date :
                                                        </div>
                                                        <div class="xs-caption">
                                                            <div class="text-capitalize schedule-date">Dec 14 - Dec 16
                                                            </div>
                                                            <div class="color-gray text-capitalize">
                                                                ( 3 Days )

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-clock-o fa-low-size"></i>&nbsp; time :
                                                        </div>
                                                        <div class="xs-caption">
                                                            09:00 AM - 06:00 PM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption type-course">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> type :</div>
                                                        <div class="xs-caption">
                                                            Classroom
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> price :</div>
                                                        <div class="xs-caption">
                                                            <strike class="color-gray"> USD 1599.00 </strike>
                                                            <div class="schedule-price">USD 1299.00</div>
                                                            <div><span class="color-gray">valid till :</span> 24 Nov
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption text-center ">
                                                    <form action="#" id="#" method="post">
                                                        <button type="submit" class="btn btn-danger"
                                                                data-category="Classroom">ENROLL NOW
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>


                                        </div>


                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="virtual">
                                    <div class="bg-white-rounded border-round">
                                        <div class="clearfix table-head text-uppercase hidden-xs">
                                            <div class="col-sm-3 table-caption">
                                                <i class="fa fa-calendar"></i> Date
                                            </div>
                                            <div class="col-sm-3 table-caption">
                                                <i class="fa fa-clock-o fa-low-size"></i> time
                                            </div>
                                            <div class="col-sm-2 table-caption type-course">
                                                <i class="fa fa-th-list"></i> course type
                                            </div>
                                            <div class="col-sm-2 table-caption">
                                                <i class="fa fa-tags"></i> price
                                            </div>
                                            <div class="col-sm-2 table-caption text-center">
                                                &nbsp;
                                            </div>
                                        </div>

                                        <div itemscope="" itemtype="http://schema.org/Product">


                                            <div class="clearfix table-body Classroom">
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-calendar fa-low-size"></i>&nbsp; Date :
                                                        </div>
                                                        <div class="xs-caption">
                                                            <div class="text-capitalize schedule-date">Sep 28 - Sep 29
                                                            </div>
                                                            <div class="color-gray text-capitalize">
                                                                ( 2 Days )

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-clock-o fa-low-size"></i>&nbsp; time :
                                                        </div>
                                                        <div class="xs-caption">
                                                            09:00 AM - 06:00 PM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption type-course">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> type :</div>
                                                        <div class="xs-caption">
                                                            Classroom
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> price :</div>
                                                        <div class="xs-caption">
                                                            <strike class="color-gray"> USD 1599.00 </strike>
                                                            <div class="schedule-price">USD 1299.00</div>
                                                            <div><span class="color-gray">valid till :</span> 19 Sep
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption text-center ">
                                                    <form action="#" id="add_to_cart_598946eb68b76" method="post">
                                                        <button type="submit" class="btn btn-danger" data-currency="USD"
                                                                data-category="Classroom" data-price="12999.00">ENROLL
                                                            NOW
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="clearfix table-body Classroom">
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-calendar fa-low-size"></i>&nbsp; Date :
                                                        </div>
                                                        <div class="xs-caption">
                                                            <div class="text-capitalize schedule-date">Oct 26 - Oct 27
                                                            </div>
                                                            <div class="color-gray text-capitalize">
                                                                ( 2 Days )

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-clock-o fa-low-size"></i>&nbsp; time :
                                                        </div>
                                                        <div class="xs-caption">
                                                            09:00 AM - 06:00 PM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption type-course">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> type :</div>
                                                        <div class="xs-caption">
                                                            Classroom
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> price :</div>
                                                        <div class="xs-caption">
                                                            <strike class="color-gray"> USD 1599.00 </strike>
                                                            <div class="schedule-price">USD 1299.00</div>
                                                            <div><span class="color-gray">valid till :</span> 10 Oct
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption text-center ">
                                                    <form action="#" id="#" method="post">

                                                        <button type="submit" class="btn btn-danger" data-currency="USD"
                                                                data-category="Classroom" data-price="12999.00">ENROLL
                                                            NOW
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="clearfix table-body Virtual schedule_toggle"
                                                 style="display: block;">
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-calendar fa-low-size"></i>&nbsp; Date :
                                                        </div>
                                                        <div class="xs-caption">
                                                            <div class="text-capitalize schedule-date">Nov 16 - Nov 17
                                                            </div>
                                                            <div class="color-gray text-capitalize">
                                                                ( 2 Days )
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-clock-o fa-low-size"></i>&nbsp; time :
                                                        </div>
                                                        <div class="xs-caption">
                                                            07:30 PM - 11:30 PM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption type-course">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> type :</div>
                                                        <div class="xs-caption">
                                                            <div class="xs-caption">
                                                                Classroom
                                                            </div>
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> price :</div>
                                                        <div class="xs-caption">
                                                            <strike class="color-gray"> USD 1599.00 </strike>
                                                            <div class="schedule-price">USD 1299.00</div>
                                                            <div><span class="color-gray">valid till :</span> 06 Nov
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption text-center ">
                                                    <form action="#" method="post">

                                                        <button type="submit" class="btn btn-danger">ENROLL NOW
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="clearfix table-body Classroom schedule_toggle"
                                                 style="display: block;">
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-calendar fa-low-size"></i>&nbsp; Date :
                                                        </div>
                                                        <div class="xs-caption">
                                                            <div class="text-capitalize schedule-date">Dec 14 - Dec 16
                                                            </div>
                                                            <div class="color-gray text-capitalize">
                                                                ( 3 Days )

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"><i
                                                                    class="fa fa-clock-o fa-low-size"></i>&nbsp; time :
                                                        </div>
                                                        <div class="xs-caption">
                                                            09:00 AM - 06:00 PM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption type-course">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> type :</div>
                                                        <div class="xs-caption">
                                                            Classroom
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption">
                                                    <div class="clearfix">
                                                        <div class="visible-xs xs-title"> price :</div>
                                                        <div class="xs-caption">
                                                            <strike class="color-gray"> USD 1299.00 </strike>
                                                            <div class="schedule-price">USD 999.00</div>
                                                            <div><span class="color-gray">valid till :</span> 24 Nov
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 table-caption text-center ">
                                                    <form action="#" id="#" method="post">
                                                        <button type="submit" class="btn btn-danger"
                                                                data-category="Classroom">ENROLL NOW
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>


                                        </div>


                                    </div>
                                </div>


                            </div>
                            <!--tabs panel end-->
                        </div>


                    </div>
                    <div class="section_description" id="description">
                        <h3>Description</h3>

                        <div role="tabpanel" class="bg-white-rounded border-round">
                            <!-- Nav tabs -->
                            <ul class="nav nav-justified nav-list-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#overview" aria-controls="home" role="tab" data-toggle="tab">OVERVIEW</a>
                                </li>
                                <li role="presentation">
                                    <a href="#agenda" aria-controls="profile" role="tab" data-toggle="tab">AGENDA</a>
                                </li>
                                <li role="presentation">
                                    <a href="#benefits" aria-controls="messages" role="tab"
                                       data-toggle="tab">BENEFITS</a>
                                </li>
                                <li role="presentation">
                                    <a href="#certification" aria-controls="settings" role="tab" data-toggle="tab">CERTIFICATION</a>
                                </li>
                                <li role="presentation">
                                    <a href="#whocanattend" aria-controls="settings" role="tab" data-toggle="tab">WHO
                                        CAN ATTEND?</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content col-text">
                                <div role="tabpanel" class="tab-pane active fade in" id="overview">
                                    <div style="text-align: justify;">With the constantly changing requirements of IT
                                        companies today, firms across the world acknowledge the growing need to manage
                                        their processes in a better way, bringing best practice guides to the forefront.&nbsp;
                                        The&nbsp;Information Technology Infrastructure Library&nbsp;(ITIL<sup>®</sup>)
                                        is a set of best practices for IT service management&nbsp;which serve to align
                                        IT services with business needs.&nbsp;ITIL<sup>®</sup> is used by organizations
                                        worldwide to deliver value and maintain minimum quality benchmarks. It serves as
                                        a framework to define compliance and set in place strategies for improvement.
                                        Today, it is among the most widely accepted approaches to best practice service
                                        management in the world and helps companies to benefit from advancements in
                                        global best practice. <br><br>The&nbsp;ITIL<sup>®</sup> Foundation&nbsp;certification
                                        is the basic level qualification, and is followed by the Intermediate and Expert
                                        levels. Our Foundation course introduces the key elements, concepts and
                                        terminology used in the ITIL<sup>®</sup> Service Lifecycle. The course material
                                        explains the various Lifecycle stages with the processes used, and teaches how
                                        they contribute to Service Management practices. Key concepts of technology and
                                        architecture are touched upon, and candidates are made aware of practices to
                                        follow for continual service management.<br><br>Individuals who have completed
                                        this course will be able to successfully pass the Foundation level exam, and can
                                        then apply these principles to enhance the quality of IT service management in
                                        their organization.
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="agenda">
                                    <div>This course covers the following topics:</div>
                                    <ul style="list-style-type: disc;">
                                        <li>Service Management as a Practice</li>
                                        <li>Service Lifecycle</li>
                                        <li>Key Principles and Models</li>
                                        <li>Generic Concepts, Processes, Functions &amp; Roles</li>
                                        <li>Service Strategy</li>
                                        <li>Service Design</li>
                                        <li>Service Transition</li>
                                        <li>Service Operation</li>
                                        <li>Continual Service Management</li>
                                        <li>Technology and Architecture</li>
                                        <li>Qualification Scheme</li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="benefits">
                                    <div><strong>From the course:</strong></div>
                                    <div>Candidates who have undergone this training will be able to:</div>
                                    <ul style="list-style-type: disc;">
                                        <li>Get an introduction to ITIL<sup>®</sup> terminologies, definitions,
                                            structures and concepts
                                        </li>
                                        <li>Learn the basics of the ITIL<sup>®</sup> Service lifecycle, and the
                                            principles involved
                                        </li>
                                        <li>Understand the associated technology and architecture</li>
                                        <li>Understand the fundamentals of Service Management and Service Lifecycle</li>
                                        <li>Learn about selected processes, roles and functions</li>
                                        <li>Gain awareness of the ITIL<sup>®</sup> Qualification scheme</li>
                                    </ul>
                                    <div><strong><br>From the workshop:<br></strong></div>
                                    <ul style="list-style-type: disc;">
                                        <li>16 hours of Instructor-led training</li>
                                        <li>16 PDUs (or 25 PDUs on completion of classroom training + 9 hours of
                                            ITIL<sup>®</sup> e-learning)
                                        </li>
                                        <li>Downloadable e-book</li>
                                        <li>Course fee includes foundation exam fee</li>
                                        <li>180 days Free e-learning on ITIL<sup>®</sup> Foundation</li>
                                        <li>4 Mock Exams to practice for the certification exam</li>
                                        <li>Courseware approved by APMG and PEOPLECERT</li>
                                        <li>Course delivered by Certified Expert Instructor</li>
                                        <li>Edulogy is an ATO of APMG and PEOPLECERT for ITIL<sup>®</sup>&nbsp;Foundation
                                            Training
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="certification">
                                    <p><strong>Eligibility :</strong><br><br>There are no prerequisites for taking the
                                        course.<br><br><strong>Process :</strong><br><br>The ITIL<sup>®</sup> Foundation
                                        examination will be held on the last day of the training. This is a one hour
                                        online examination comprising of 40 questions out of which the participant has
                                        to score 26 (65%)to attain the certification. Candidates will be awarded 2
                                        credits for the same from APMG. This is a closed book exam, and electronic
                                        devices are not allowed.<br><br>To attain the highest level of ITIL<sup>®</sup>
                                        which is the ITIL<sup>®</sup> Expert certification, a candidate should have 22
                                        credits.<br><br>The following are the various levels of Certifications available
                                        :</p>
                                    <ol>
                                        <li>ITIL<sup>®</sup> Foundation – 2 credits</li>
                                        <li>ITIL<sup>®</sup> Intermediate
                                            <ol style="list-style-type: lower-alpha;">
                                                <li>ITIL<sup>®</sup> Lifecycle ( 5 modules) – Each module is awarded 3
                                                    credits<br>Service Design, Service Strategy, Service Operation,
                                                    Service Transition and continual Service Improvement
                                                </li>
                                                <li>ITIL<sup>®</sup> Capability (4 modules) – Each module is awarded 4
                                                    credits<br>Planning Protection and Optimization, Service offerings
                                                    and Agreement, Release Control and Validation, Operational Support
                                                    and Analysis
                                                </li>
                                            </ol>
                                        </li>
                                        <li>ITIL<sup>®</sup> Expert – 5 credits<br>Managing Across Lifecycle (MALC)</li>
                                    </ol>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="whocanattend">
                                    <div style="text-align: justify;">IT professionals, business managers, business
                                        process owners, project managers, students and individuals who have a keen
                                        interest in IT Services Management can attend this course. The ITIL<sup>®</sup>
                                        Foundation certification is a prerequisite for the Practitioner’s Certificate
                                        and the Manager’s Certificate in IT Service Management.
                                    </div>
                                </div>
                            </div>
                            <!--tabs panel end-->
                        </div>

                    </div>

                </div>
                <div class="sidebar">
                    <div class="widget widget-categories">
                        <h5 class="widget-title">TRENDING COURSES</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> PMP<sup>®</sup></a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> ITIL Foundation</a></li>

                            <li><a href="#"><i class="fa fa-angle-double-right"></i> PRINCE2<sup>®</sup> Foundation</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> PRINCE2<sup>®</sup>
                                    Practitioner</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> PRINCE2<sup>®</sup> Foundation
                                    &amp; Practitioner </a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> ITIL Lifecycle Module SO</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> ITIL Lifecycle Module ST</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> ITIL Lifecycle Module SS</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> ITIL Lifecycle Module SD</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> ITIL Lifecycle Module CSI</a></li>

                            <li><a href="#"><i class="fa fa-angle-double-right"></i> CAPM<sup>®</sup></a></li>

                            <li><a href="#"><i class="fa fa-angle-double-right"></i> PMI-ACP<sup>®</sup></a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> PRINCE2 Agile</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> DevOps<sup>®</sup></a></li>

                            <li><a href="#"><i class="fa fa-angle-double-right"></i> TOGAF<sup>®</sup></a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Six Sigma Green Belt</a></li>
                        </ul>
                    </div>

                    <div class="widget widget-teacher">
                        <div class="bg-white-rounded border-round aside-space hidden-xs" style="padding: 10px;">
                            <h5>Drop a query</h5>

                            <div id="query_status"></div>
                            <form class="drop-a-query" action="#" method="post">

                                <div class="form-group">
                                    <div class="inner-addon left-addon">

                                        <input type="text" class="query_input" placeholder="Name" name="name" id="name"
                                               value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="inner-addon left-addon">

                                        <input type="text" class="query_input" placeholder="Email" name="email"
                                               id="email" value="">
                                    </div>
                                </div>
                                <div class="form-group hide">
                                    <div class="inner-addon left-addon">

                                        <select name="course" id="q_course" class="query_input"
                                                style="padding-left: 25px; padding-right: 0px; ">
                                            <option value=""> Select a course</option>
                                            <option value=" Agile Leadership Skills"> Agile Leadership Skills</option>
                                            <option value="Advanced Excel 2013">Advanced Excel 2013</option>
                                            <option value="Agile and Scrum">Agile and Scrum</option>
                                            <option value="Agile Business Analysis">Agile Business Analysis</option>
                                            <option value="Agile Delivery and Consulting">Agile Delivery and
                                                Consulting
                                            </option>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="">
                                            <select class="query_input isd_cls" name="phone_code" id="q_phone_code">
                                                <option value="+358">+358 &nbsp; &nbsp; &nbsp; - &nbsp; Aland Islands
                                                </option>
                                                <option value="+355">+355 &nbsp; &nbsp; &nbsp; - &nbsp; Albania</option>
                                                <option value="+213">+213 &nbsp; &nbsp; &nbsp; - &nbsp; Algeria</option>
                                                <option value="+376">+376 &nbsp; &nbsp; &nbsp; - &nbsp; Andorra</option>
                                                <option value="+54">+54 &nbsp; &nbsp; &nbsp; - &nbsp; Argentina</option>
                                                <option value="+374">+374 &nbsp; &nbsp; &nbsp; - &nbsp; Armenia</option>
                                                <option value="+61">+61 &nbsp; &nbsp; &nbsp; - &nbsp; Australia</option>
                                                <option value="+43">+43 &nbsp; &nbsp; &nbsp; - &nbsp; Austria</option>
                                                <option value="+994">+994 &nbsp; &nbsp; &nbsp; - &nbsp; Azerbaijan
                                                </option>
                                                <option value="+973">+973 &nbsp; &nbsp; &nbsp; - &nbsp; Bahrain</option>
                                                <option value="+880">+880 &nbsp; &nbsp; &nbsp; - &nbsp; Bangladesh
                                                </option>
                                                <option value="+375">+375 &nbsp; &nbsp; &nbsp; - &nbsp; Belarus</option>
                                                <option value="+32">+32 &nbsp; &nbsp; &nbsp; - &nbsp; Belgium</option>
                                                <option value="+591">+591 &nbsp; &nbsp; &nbsp; - &nbsp; Bolivia</option>
                                                <option value="+387">+387 &nbsp; &nbsp; &nbsp; - &nbsp; Bosnia and
                                                    Herzegovina
                                                </option>
                                                <option value="+267">+267 &nbsp; &nbsp; &nbsp; - &nbsp; Botswana
                                                </option>
                                                <option value="+55">+55 &nbsp; &nbsp; &nbsp; - &nbsp; Brazil</option>
                                                <option value="+359">+359 &nbsp; &nbsp; &nbsp; - &nbsp; Bulgaria
                                                </option>
                                                <option value="+855">+855 &nbsp; &nbsp; &nbsp; - &nbsp; Cambodia
                                                </option>
                                                <option value="+1">+1 &nbsp; &nbsp; &nbsp; - &nbsp; Canada</option>
                                                <option value="+34">+34 &nbsp; &nbsp; &nbsp; - &nbsp; Canary Islands
                                                </option>
                                                <option value="+56">+56 &nbsp; &nbsp; &nbsp; - &nbsp; Chile</option>
                                                <option value="+86">+86 &nbsp; &nbsp; &nbsp; - &nbsp; China</option>
                                                <option value="+57">+57 &nbsp; &nbsp; &nbsp; - &nbsp; Colombia</option>
                                                <option value="+385">+385 &nbsp; &nbsp; &nbsp; - &nbsp; Croatia</option>
                                                <option value="+357">+357 &nbsp; &nbsp; &nbsp; - &nbsp; Cyprus</option>
                                                <option value="+420">+420 &nbsp; &nbsp; &nbsp; - &nbsp; Czech Republic
                                                </option>
                                                <option value="+45">+45 &nbsp; &nbsp; &nbsp; - &nbsp; Denmark</option>
                                                <option value="+20">+20 &nbsp; &nbsp; &nbsp; - &nbsp; Egypt</option>
                                                <option value="+372">+372 &nbsp; &nbsp; &nbsp; - &nbsp; Estonia</option>
                                                <option value="+251">+251 &nbsp; &nbsp; &nbsp; - &nbsp; Ethiopia
                                                </option>
                                                <option value="+298">+298 &nbsp; &nbsp; &nbsp; - &nbsp; Faroe Islands
                                                </option>
                                                <option value="+679">+679 &nbsp; &nbsp; &nbsp; - &nbsp; Fiji</option>
                                                <option value="+358">+358 &nbsp; &nbsp; &nbsp; - &nbsp; Finland</option>
                                                <option value="+33">+33 &nbsp; &nbsp; &nbsp; - &nbsp; France</option>
                                                <option value="+995">+995 &nbsp; &nbsp; &nbsp; - &nbsp; Georgia</option>
                                                <option value="+49">+49 &nbsp; &nbsp; &nbsp; - &nbsp; Germany</option>
                                                <option value="+233">+233 &nbsp; &nbsp; &nbsp; - &nbsp; Ghana</option>
                                                <option value="+350">+350 &nbsp; &nbsp; &nbsp; - &nbsp; Gibraltar
                                                </option>
                                                <option value="+30">+30 &nbsp; &nbsp; &nbsp; - &nbsp; Greece</option>
                                                <option value="+44">+44 &nbsp; &nbsp; &nbsp; - &nbsp; Guernsey</option>
                                                <option value="+852">+852 &nbsp; &nbsp; &nbsp; - &nbsp; Hong Kong
                                                </option>
                                                <option value="+36">+36 &nbsp; &nbsp; &nbsp; - &nbsp; Hungary</option>
                                                <option value="+354">+354 &nbsp; &nbsp; &nbsp; - &nbsp; Iceland</option>
                                                <option value="+91">+91 &nbsp; &nbsp; &nbsp; - &nbsp; India</option>
                                                <option value="+62">+62 &nbsp; &nbsp; &nbsp; - &nbsp; Indonesia</option>
                                                <option value="+98">+98 &nbsp; &nbsp; &nbsp; - &nbsp; Iran</option>
                                                <option value="+964">+964 &nbsp; &nbsp; &nbsp; - &nbsp; Iraq</option>
                                                <option value="+353">+353 &nbsp; &nbsp; &nbsp; - &nbsp; Ireland</option>
                                                <option value="+44">+44 &nbsp; &nbsp; &nbsp; - &nbsp; Isle of Man
                                                </option>
                                                <option value="+39">+39 &nbsp; &nbsp; &nbsp; - &nbsp; Italy</option>
                                                <option value="+81">+81 &nbsp; &nbsp; &nbsp; - &nbsp; Japan</option>
                                                <option value="+44">+44 &nbsp; &nbsp; &nbsp; - &nbsp; Jersey</option>
                                                <option value="+962">+962 &nbsp; &nbsp; &nbsp; - &nbsp; Jordan</option>
                                                <option value="+254">+254 &nbsp; &nbsp; &nbsp; - &nbsp; Kenya</option>
                                                <option value="+381">+381 &nbsp; &nbsp; &nbsp; - &nbsp; Kosovo</option>
                                                <option value="+965">+965 &nbsp; &nbsp; &nbsp; - &nbsp; Kuwait</option>
                                                <option value="+371">+371 &nbsp; &nbsp; &nbsp; - &nbsp; Latvia</option>
                                                <option value="+961">+961 &nbsp; &nbsp; &nbsp; - &nbsp; Lebanon</option>
                                                <option value="+231">+231 &nbsp; &nbsp; &nbsp; - &nbsp; Liberia</option>
                                                <option value="+218">+218 &nbsp; &nbsp; &nbsp; - &nbsp; Libya</option>
                                                <option value="+423">+423 &nbsp; &nbsp; &nbsp; - &nbsp; Liechtenstein
                                                </option>
                                                <option value="+370">+370 &nbsp; &nbsp; &nbsp; - &nbsp; Lithuania
                                                </option>
                                                <option value="+352">+352 &nbsp; &nbsp; &nbsp; - &nbsp; Luxembourg
                                                </option>
                                                <option value="+389">+389 &nbsp; &nbsp; &nbsp; - &nbsp; Macedonia
                                                </option>
                                                <option value="+60">+60 &nbsp; &nbsp; &nbsp; - &nbsp; Malaysia</option>
                                                <option value="+356">+356 &nbsp; &nbsp; &nbsp; - &nbsp; Malta</option>
                                                <option value="+52">+52 &nbsp; &nbsp; &nbsp; - &nbsp; Mexico</option>
                                                <option value="+373">+373 &nbsp; &nbsp; &nbsp; - &nbsp; Moldova</option>
                                                <option value="+377">+377 &nbsp; &nbsp; &nbsp; - &nbsp; Monaco</option>
                                                <option value="+976">+976 &nbsp; &nbsp; &nbsp; - &nbsp; Mongolia
                                                </option>
                                                <option value="+382">+382 &nbsp; &nbsp; &nbsp; - &nbsp; Montenegro
                                                </option>
                                                <option value="+212">+212 &nbsp; &nbsp; &nbsp; - &nbsp; Morocco</option>
                                                <option value="+95">+95 &nbsp; &nbsp; &nbsp; - &nbsp; Myanmar</option>
                                                <option value="+31">+31 &nbsp; &nbsp; &nbsp; - &nbsp; Netherlands
                                                </option>
                                                <option value="+64">+64 &nbsp; &nbsp; &nbsp; - &nbsp; New Zealand
                                                </option>
                                                <option value="+234">+234 &nbsp; &nbsp; &nbsp; - &nbsp; Nigeria</option>
                                                <option value="+44">+44 &nbsp; &nbsp; &nbsp; - &nbsp; Northern Ireland
                                                </option>
                                                <option value="+47">+47 &nbsp; &nbsp; &nbsp; - &nbsp; Norway</option>
                                                <option value="+968">+968 &nbsp; &nbsp; &nbsp; - &nbsp; Oman</option>
                                                <option value="+507">+507 &nbsp; &nbsp; &nbsp; - &nbsp; Panama</option>
                                                <option value="+675">+675 &nbsp; &nbsp; &nbsp; - &nbsp; Papua New
                                                    Guinea
                                                </option>
                                                <option value="+51">+51 &nbsp; &nbsp; &nbsp; - &nbsp; Peru</option>
                                                <option value="+63">+63 &nbsp; &nbsp; &nbsp; - &nbsp; Philippines
                                                </option>
                                                <option value="+48">+48 &nbsp; &nbsp; &nbsp; - &nbsp; Poland</option>
                                                <option value="+351">+351 &nbsp; &nbsp; &nbsp; - &nbsp; Portugal
                                                </option>
                                                <option value="+974">+974 &nbsp; &nbsp; &nbsp; - &nbsp; Qatar</option>
                                                <option value="+40">+40 &nbsp; &nbsp; &nbsp; - &nbsp; Romania</option>
                                                <option value="+7">+7 &nbsp; &nbsp; &nbsp; - &nbsp; Russian Federation
                                                </option>
                                                <option value="+378">+378 &nbsp; &nbsp; &nbsp; - &nbsp; San Marino
                                                </option>
                                                <option value="+966">+966 &nbsp; &nbsp; &nbsp; - &nbsp; Saudi Arabia
                                                </option>
                                                <option value="+44">+44 &nbsp; &nbsp; &nbsp; - &nbsp; Scotland</option>
                                                <option value="+381">+381 &nbsp; &nbsp; &nbsp; - &nbsp; Serbia</option>
                                                <option value="+65">+65 &nbsp; &nbsp; &nbsp; - &nbsp; Singapore</option>
                                                <option value="+421">+421 &nbsp; &nbsp; &nbsp; - &nbsp; Slovakia
                                                </option>
                                                <option value="+386">+386 &nbsp; &nbsp; &nbsp; - &nbsp; Slovenia
                                                </option>
                                                <option value="+27">+27 &nbsp; &nbsp; &nbsp; - &nbsp; South Africa
                                                </option>
                                                <option value="+82">+82 &nbsp; &nbsp; &nbsp; - &nbsp; South Korea
                                                </option>
                                                <option value="+34">+34 &nbsp; &nbsp; &nbsp; - &nbsp; Spain</option>
                                                <option value="+94">+94 &nbsp; &nbsp; &nbsp; - &nbsp; Srilanka</option>
                                                <option value="+249">+249 &nbsp; &nbsp; &nbsp; - &nbsp; Sudan</option>
                                                <option value="+47">+47 &nbsp; &nbsp; &nbsp; - &nbsp; Svalbard and Jan
                                                    Mayen
                                                </option>
                                                <option value="+46">+46 &nbsp; &nbsp; &nbsp; - &nbsp; Sweden</option>
                                                <option value="+41">+41 &nbsp; &nbsp; &nbsp; - &nbsp; Switzerland
                                                </option>
                                                <option value="+886">+886 &nbsp; &nbsp; &nbsp; - &nbsp; Taiwan, ROC
                                                </option>
                                                <option value="+255">+255 &nbsp; &nbsp; &nbsp; - &nbsp; Tanzania
                                                </option>
                                                <option value="+66">+66 &nbsp; &nbsp; &nbsp; - &nbsp; Thailand</option>
                                                <option value="+216">+216 &nbsp; &nbsp; &nbsp; - &nbsp; Tunisia</option>
                                                <option value="+90">+90 &nbsp; &nbsp; &nbsp; - &nbsp; Turkey</option>
                                                <option value="+380">+380 &nbsp; &nbsp; &nbsp; - &nbsp; Ukraine</option>
                                                <option value="+971">+971 &nbsp; &nbsp; &nbsp; - &nbsp; United Arab
                                                    Emirates
                                                </option>
                                                <option value="+44">+44 &nbsp; &nbsp; &nbsp; - &nbsp; United Kingdom
                                                </option>
                                                <option value="+1" selected="selected">+1 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                    United States
                                                </option>
                                                <option value="+598">+598 &nbsp; &nbsp; &nbsp; - &nbsp; Uruguay</option>
                                                <option value="+58">+58 &nbsp; &nbsp; &nbsp; - &nbsp; Venezuela</option>
                                                <option value="+84">+84 &nbsp; &nbsp; &nbsp; - &nbsp; Vietnam</option>
                                                <option value="+44">+44 &nbsp; &nbsp; &nbsp; - &nbsp; Wales</option>
                                            </select>
                                            <input class="query_input query_phone" maxlength="16" type="text"
                                                   name="phone" id="q_phone" value="" placeholder="Phone"
                                                   onkeypress="return isNumber(event)">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="inner-addon left-addon">

                                        <textarea name="query" class="query_txt" rows="1" placeholder="Query" id="query"
                                                  style="height: 100px;"></textarea>
                                    </div>
                                </div>
                                <input type="submit" name="submit" value="Submit"
                                       class="btn btn-danger text-uppercase btn-block">
                            </form>
                        </div>
                    </div>


                    <!-- /widget widget-popular-news -->
                </div>
                <!-- /sidebar -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
@stop
