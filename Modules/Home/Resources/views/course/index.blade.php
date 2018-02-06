@extends('home::layouts.master')
@section('title','Course')
@section('content')
    <section class="page-header">
        <div class="container">
            @if(isset($courseDetails)&& $courseDetails->courseName!='')
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="list-unstyled">
                            <li><a href="/">Home</a></li>
                            <li><a href="javascript:;">Courses</a></li>
                            <li class="active">{{$courseDetails->courseName}}</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 title_courses"><br>
                        <h1 class="titlefont">{{$courseDetails->courseName}}</h1>
                        <div class="row">
                            <div class="col-sm-8 ">
                                <p>
                                    <label style=" color:#F47A00;">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </label>
                                    <a id="scrollToRating" style="color:#FFF">{{$courseDetails->ratings}} ratings</a> |
                                    <span style="color:#FFF">{{$courseDetails->userEnrolled}} students enrolled </span>
                                </p>
                                <h2 class="courepage-intro-text">{{$courseDetails->mainDescription}}</h2>
                            </div>

                            <div class="col-sm-4">
                                <img src="{{$courseDetails->img!=''? $courseDetails->img:'/assets/images/courses/pmp.jpg'}}"
                                     width="300" height="200"
                                     class="img-responsive"
                                     style="padding-left:20px;"><br>

                            </div>

                        </div>

                    </div>
                </div>
            @else
                <h3>No soch course found...</h3>
            @endif
        </div>
    </section><!-- Ends: .page-header -->

    <!--==========================
        Single Course Content
    ===========================-->
    <section class="single-course-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="single-course-content">
                        <div class="post-content">


                            <div class="section-schedule" id="detail-schedule">
                                <h3>Classroom and Online Training Courses </h3>
                                <div role="tabpanel" class="bg-white-rounded border-round">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-justified nav-list-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#classroom" aria-controls="home" role="tab" data-toggle="tab"
                                               aria-expanded="true">Classroom</a></li>
                                        <li role="presentation" class="">
                                            <a href="#virtual" aria-controls="profile" role="tab" data-toggle="tab"
                                               aria-expanded="false">Online Classes</a>
                                        </li>

                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content col-text">
                                        <div role="tabpanel" class="tab-pane fade active in" id="classroom">

                                            <div class="bg-white-rounded border-round" id="schedule_div">
                                                @if(isset($courses['C']) && !empty($courses['C']))
                                                    <div class="clearfix table-head text-uppercase hidden-xs">
                                                        <div class="col-sm-3 table-caption"><i
                                                                    class="fa fa-calendar"></i> Date
                                                        </div>
                                                        <div class="col-sm-3 table-caption"><i
                                                                    class="fa fa-clock-o fa-low-size"></i> time
                                                        </div>
                                                        <div class="col-sm-2 table-caption type-course"><i
                                                                    class="fa fa-th-list"></i> course type
                                                        </div>
                                                        <div class="col-sm-2 table-caption"><i class="fa fa-tags"></i>
                                                            price
                                                        </div>
                                                        <div class="col-sm-2 table-caption"><i class="fa fa-user"></i>
                                                            register
                                                        </div>
                                                    </div>

                                                    <div itemscope="" itemtype="http://schema.org/Product">
                                                        @foreach($courses['C'] as $course)

                                                            <div class="clearfix table-body Classroom schedule_toggle">
                                                                <div class="col-sm-3 table-caption">
                                                                    <div class="clearfix">
                                                                        <div class="visible-xs xs-title"><i
                                                                                    class="fa fa-calendar fa-low-size"></i>&nbsp;
                                                                            Date :
                                                                        </div>
                                                                        <div class="xs-caption">
                                                                            <div class="text-capitalize schedule-date">
                                                                                {{date('M d', strtotime($course->startDate)).' - '. date('M d', strtotime($course->endDate))}}
                                                                            </div>
                                                                            <div class="color-gray text-capitalize">
                                                                                ( {{date_diff(date_create($course->startDate),date_create($course->endDate),true)->format("%a Days")}}
                                                                                )
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 table-caption">
                                                                    <div class="clearfix">
                                                                        <div class="visible-xs xs-title"><i
                                                                                    class="fa fa-clock-o fa-low-size"></i>&nbsp;
                                                                            time :
                                                                        </div>
                                                                        <div class="xs-caption"> {{date('h:i A', strtotime($course->startTime)).' - '.date('h:i A', strtotime($course->endTime))}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2 table-caption type-course">
                                                                    <div class="clearfix">
                                                                        <div class="visible-xs xs-title"> type :</div>
                                                                        <div class="xs-caption"> Classroom</div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2 table-caption">
                                                                    <div class="clearfix">
                                                                        <div class="visible-xs xs-title"> price :</div>
                                                                        <div class="xs-caption">
                                                                            @if( time() <= strtotime($course->offerExpireOn) && $course->discountValue )
                                                                                <strike class="color-gray">
                                                                                    USD {{number_format($course->price,2)}} </strike>
                                                                                <div class="schedule-price">
                                                                                    USD {{number_format(($course->discountType=='F'?$course->price-$course->discountValue:($course->price-($course->price*$course->discountValue/100))),2)}} </div>
                                                                                <div><span class="color-gray">valid till :</span> {{date('d M', strtotime($course->offerExpireOn))}}
                                                                                </div>
                                                                            @else
                                                                                <div class="schedule-price">
                                                                                    USD {{number_format($course->price,2)}} </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2 table-caption text-center ">
                                                                    <button type="button"
                                                                            class="btn btn-danger enroll-now"
                                                                            data-id="{{$course->id}}">ENROLL NOW
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @else
                                                    <h3 class="text-center">No course found</h3>
                                                @endif
                                            </div>


                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="virtual">
                                            <div class="bg-white-rounded border-round">
                                                @if(isset($courses['O']) && !empty($courses['O']))
                                                    <div class="clearfix table-head text-uppercase hidden-xs">
                                                        <div class="col-sm-3 table-caption"><i
                                                                    class="fa fa-calendar"></i> Date
                                                        </div>
                                                        <div class="col-sm-3 table-caption"><i
                                                                    class="fa fa-clock-o fa-low-size"></i> time
                                                        </div>
                                                        <div class="col-sm-2 table-caption type-course"><i
                                                                    class="fa fa-th-list"></i> course type
                                                        </div>
                                                        <div class="col-sm-2 table-caption"><i class="fa fa-tags"></i>
                                                            price
                                                        </div>
                                                        <div class="col-sm-2 table-caption"><i class="fa fa-user"></i>
                                                            register
                                                        </div>
                                                    </div>
                                                    <div itemscope="" itemtype="http://schema.org/Product">
                                                        @foreach($courses['O'] as $course)
                                                            <div class="clearfix table-body Classroom schedule_toggle">
                                                                <div class="col-sm-3 table-caption">
                                                                    <div class="clearfix">
                                                                        <div class="visible-xs xs-title"><i
                                                                                    class="fa fa-calendar fa-low-size"></i>&nbsp;
                                                                            Date :
                                                                        </div>
                                                                        <div class="xs-caption">
                                                                            <div class="text-capitalize schedule-date">
                                                                                {{date('M d', strtotime($course->startDate)).' - '. date('M d', strtotime($course->endDate))}}
                                                                            </div>
                                                                            <div class="color-gray text-capitalize">
                                                                                ( {{date_diff(date_create($course->startDate),date_create($course->endDate),true)->format("%a Days")}}
                                                                                )
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 table-caption">
                                                                    <div class="clearfix">
                                                                        <div class="visible-xs xs-title"><i
                                                                                    class="fa fa-clock-o fa-low-size"></i>&nbsp;
                                                                            time :
                                                                        </div>
                                                                        <div class="xs-caption"> {{date('h:i A', strtotime($course->startTime)).' - '.date('h:i A', strtotime($course->endTime))}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2 table-caption type-course">
                                                                    <div class="clearfix">
                                                                        <div class="visible-xs xs-title"> type :</div>
                                                                        <div class="xs-caption"> Classroom</div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2 table-caption">
                                                                    <div class="clearfix">
                                                                        <div class="visible-xs xs-title"> price :</div>
                                                                        <div class="xs-caption">
                                                                            @if( time() <= strtotime($course->offerExpireOn) && $course->discountValue )
                                                                                <strike class="color-gray">
                                                                                    USD {{number_format($course->price,2)}} </strike>
                                                                                <div class="schedule-price">
                                                                                    USD {{number_format(($course->discountType=='F'?$course->price-$course->discountValue:($course->price-($course->price*$course->discountValue/100))),2)}} </div>
                                                                                <div><span class="color-gray">valid till :</span> {{date('d M', strtotime($course->offerExpireOn))}}
                                                                                </div>
                                                                            @else
                                                                                <div class="schedule-price">
                                                                                    USD {{number_format($course->price,2)}} </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2 table-caption text-center ">
                                                                    <button type="button"
                                                                            class="btn btn-danger enroll-now"
                                                                            data-id="c-1">ENROLL NOW
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @else
                                                    <h3 class="text-center">No course found</h3>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!--tabs panel end-->
                                </div>

                            </div>
                            @if(isset($otherDescription)&& !empty($otherDescription))
                                <div class="section_description" id="description">
                                    <h3>Description</h3>
                                    <div role="tabpanel" class="bg-white-rounded border-round">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-justified nav-list-tabs" role="tablist">
                                            @foreach($otherDescription as $key => $description)
                                                <li role="presentation" class="{{$key==0 ? 'active':''}}">
                                                    <a href="#desc-{{$key}}" aria-controls="home" role="tab"
                                                       data-toggle="tab"
                                                       aria-expanded="true">{{$description['tab']}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content col-text">
                                            @foreach($otherDescription as $key => $description)
                                                <div role="tabpanel" class="tab-pane fade {{$key==0 ? 'active in':''}} "
                                                     id="desc-{{$key}}">{!!html_entity_decode($description['description'])!!}</div>
                                            @endforeach
                                        </div>
                                        <!--tabs panel end-->
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div><!-- Ends: .col-sm-8 -->

                <div class="col-md-4 col-sm-12">
                    <div class="single-course-sidebar">
                        <div class="sidebar-widget">
                            <h3 class="widget-title">TRENDING COURSES</h3>
                            <div class="widget-content course-features">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> PMP<sup>®</sup></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> ITIL Foundation</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> PRINCE2<sup>®</sup>
                                            Foundation</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> PRINCE2<sup>®</sup>
                                            Practitioner</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> PRINCE2<sup>®</sup>
                                            Foundation &amp; Practitioner </a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> ITIL Lifecycle Module
                                            SO</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> ITIL Lifecycle Module
                                            ST</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> ITIL Lifecycle Module
                                            SS</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> ITIL Lifecycle Module
                                            SD</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> ITIL Lifecycle Module
                                            CSI</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> CAPM<sup>®</sup></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> PMI-ACP<sup>®</sup></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> PRINCE2 Agile</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> DevOps<sup>®</sup></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> TOGAF<sup>®</sup></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Six Sigma Green Belt</a>
                                    </li>
                                </ul>

                            </div>
                        </div><!-- Ends: .sidebar-widget -->

                        <div class="sidebar-widget">
                            <h3 class="widget-title">Request More Information</h3>
                            <div class="widget-content">
                                <div class="bg-white-rounded border-round aside-space hidden-xs" style="padding: 10px;">

                                    <div id="query_status"></div>
                                    <form class="drop-a-query" action="#" method="post">

                                        <div class="form-group">
                                            <div class="inner-addon left-addon">
                                                <input type="text" class="query_input" placeholder="Name" name="name"
                                                       id="name" value="">
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
                                                    <option value=" Agile Leadership Skills"> Agile Leadership Skills
                                                    </option>
                                                    <option value="Advanced Excel 2013">Advanced Excel 2013</option>
                                                    <option value="Agile and Scrum">Agile and Scrum</option>
                                                    <option value="Agile Business Analysis">Agile Business Analysis
                                                    </option>
                                                    <option value="Agile Delivery and Consulting">Agile Delivery and
                                                        Consulting
                                                    </option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="">
                                                    <select class="query_input isd_cls" name="phone_code"
                                                            id="q_phone_code">
                                                        <option value="+358">+358 &nbsp; &nbsp; &nbsp; - &nbsp; Aland
                                                            Islands
                                                        </option>
                                                        <option value="+355">+355 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Albania
                                                        </option>
                                                        <option value="+213">+213 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Algeria
                                                        </option>
                                                        <option value="+376">+376 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Andorra
                                                        </option>
                                                        <option value="+54">+54 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Argentina
                                                        </option>
                                                        <option value="+374">+374 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Armenia
                                                        </option>
                                                        <option value="+61">+61 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Australia
                                                        </option>
                                                        <option value="+43">+43 &nbsp; &nbsp; &nbsp; - &nbsp; Austria
                                                        </option>
                                                        <option value="+994">+994 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Azerbaijan
                                                        </option>
                                                        <option value="+973">+973 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Bahrain
                                                        </option>
                                                        <option value="+880">+880 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Bangladesh
                                                        </option>
                                                        <option value="+375">+375 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Belarus
                                                        </option>
                                                        <option value="+32">+32 &nbsp; &nbsp; &nbsp; - &nbsp; Belgium
                                                        </option>
                                                        <option value="+591">+591 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Bolivia
                                                        </option>
                                                        <option value="+387">+387 &nbsp; &nbsp; &nbsp; - &nbsp; Bosnia
                                                            and Herzegovina
                                                        </option>
                                                        <option value="+267">+267 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Botswana
                                                        </option>
                                                        <option value="+55">+55 &nbsp; &nbsp; &nbsp; - &nbsp; Brazil
                                                        </option>
                                                        <option value="+359">+359 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Bulgaria
                                                        </option>
                                                        <option value="+855">+855 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Cambodia
                                                        </option>
                                                        <option value="+1">+1 &nbsp; &nbsp; &nbsp; - &nbsp; Canada
                                                        </option>
                                                        <option value="+34">+34 &nbsp; &nbsp; &nbsp; - &nbsp; Canary
                                                            Islands
                                                        </option>
                                                        <option value="+56">+56 &nbsp; &nbsp; &nbsp; - &nbsp; Chile
                                                        </option>
                                                        <option value="+86">+86 &nbsp; &nbsp; &nbsp; - &nbsp; China
                                                        </option>
                                                        <option value="+57">+57 &nbsp; &nbsp; &nbsp; - &nbsp; Colombia
                                                        </option>
                                                        <option value="+385">+385 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Croatia
                                                        </option>
                                                        <option value="+357">+357 &nbsp; &nbsp; &nbsp; - &nbsp; Cyprus
                                                        </option>
                                                        <option value="+420">+420 &nbsp; &nbsp; &nbsp; - &nbsp; Czech
                                                            Republic
                                                        </option>
                                                        <option value="+45">+45 &nbsp; &nbsp; &nbsp; - &nbsp; Denmark
                                                        </option>
                                                        <option value="+20">+20 &nbsp; &nbsp; &nbsp; - &nbsp; Egypt
                                                        </option>
                                                        <option value="+372">+372 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Estonia
                                                        </option>
                                                        <option value="+251">+251 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Ethiopia
                                                        </option>
                                                        <option value="+298">+298 &nbsp; &nbsp; &nbsp; - &nbsp; Faroe
                                                            Islands
                                                        </option>
                                                        <option value="+679">+679 &nbsp; &nbsp; &nbsp; - &nbsp; Fiji
                                                        </option>
                                                        <option value="+358">+358 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Finland
                                                        </option>
                                                        <option value="+33">+33 &nbsp; &nbsp; &nbsp; - &nbsp; France
                                                        </option>
                                                        <option value="+995">+995 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Georgia
                                                        </option>
                                                        <option value="+49">+49 &nbsp; &nbsp; &nbsp; - &nbsp; Germany
                                                        </option>
                                                        <option value="+233">+233 &nbsp; &nbsp; &nbsp; - &nbsp; Ghana
                                                        </option>
                                                        <option value="+350">+350 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Gibraltar
                                                        </option>
                                                        <option value="+30">+30 &nbsp; &nbsp; &nbsp; - &nbsp; Greece
                                                        </option>
                                                        <option value="+44">+44 &nbsp; &nbsp; &nbsp; - &nbsp; Guernsey
                                                        </option>
                                                        <option value="+852">+852 &nbsp; &nbsp; &nbsp; - &nbsp; Hong
                                                            Kong
                                                        </option>
                                                        <option value="+36">+36 &nbsp; &nbsp; &nbsp; - &nbsp; Hungary
                                                        </option>
                                                        <option value="+354">+354 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Iceland
                                                        </option>
                                                        <option value="+91">+91 &nbsp; &nbsp; &nbsp; - &nbsp; India
                                                        </option>
                                                        <option value="+62">+62 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Indonesia
                                                        </option>
                                                        <option value="+98">+98 &nbsp; &nbsp; &nbsp; - &nbsp; Iran
                                                        </option>
                                                        <option value="+964">+964 &nbsp; &nbsp; &nbsp; - &nbsp; Iraq
                                                        </option>
                                                        <option value="+353">+353 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Ireland
                                                        </option>
                                                        <option value="+44">+44 &nbsp; &nbsp; &nbsp; - &nbsp; Isle of
                                                            Man
                                                        </option>
                                                        <option value="+39">+39 &nbsp; &nbsp; &nbsp; - &nbsp; Italy
                                                        </option>
                                                        <option value="+81">+81 &nbsp; &nbsp; &nbsp; - &nbsp; Japan
                                                        </option>
                                                        <option value="+44">+44 &nbsp; &nbsp; &nbsp; - &nbsp; Jersey
                                                        </option>
                                                        <option value="+962">+962 &nbsp; &nbsp; &nbsp; - &nbsp; Jordan
                                                        </option>
                                                        <option value="+254">+254 &nbsp; &nbsp; &nbsp; - &nbsp; Kenya
                                                        </option>
                                                        <option value="+381">+381 &nbsp; &nbsp; &nbsp; - &nbsp; Kosovo
                                                        </option>
                                                        <option value="+965">+965 &nbsp; &nbsp; &nbsp; - &nbsp; Kuwait
                                                        </option>
                                                        <option value="+371">+371 &nbsp; &nbsp; &nbsp; - &nbsp; Latvia
                                                        </option>
                                                        <option value="+961">+961 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Lebanon
                                                        </option>
                                                        <option value="+231">+231 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Liberia
                                                        </option>
                                                        <option value="+218">+218 &nbsp; &nbsp; &nbsp; - &nbsp; Libya
                                                        </option>
                                                        <option value="+423">+423 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Liechtenstein
                                                        </option>
                                                        <option value="+370">+370 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Lithuania
                                                        </option>
                                                        <option value="+352">+352 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Luxembourg
                                                        </option>
                                                        <option value="+389">+389 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Macedonia
                                                        </option>
                                                        <option value="+60">+60 &nbsp; &nbsp; &nbsp; - &nbsp; Malaysia
                                                        </option>
                                                        <option value="+356">+356 &nbsp; &nbsp; &nbsp; - &nbsp; Malta
                                                        </option>
                                                        <option value="+52">+52 &nbsp; &nbsp; &nbsp; - &nbsp; Mexico
                                                        </option>
                                                        <option value="+373">+373 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Moldova
                                                        </option>
                                                        <option value="+377">+377 &nbsp; &nbsp; &nbsp; - &nbsp; Monaco
                                                        </option>
                                                        <option value="+976">+976 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Mongolia
                                                        </option>
                                                        <option value="+382">+382 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Montenegro
                                                        </option>
                                                        <option value="+212">+212 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Morocco
                                                        </option>
                                                        <option value="+95">+95 &nbsp; &nbsp; &nbsp; - &nbsp; Myanmar
                                                        </option>
                                                        <option value="+31">+31 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Netherlands
                                                        </option>
                                                        <option value="+64">+64 &nbsp; &nbsp; &nbsp; - &nbsp; New
                                                            Zealand
                                                        </option>
                                                        <option value="+234">+234 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Nigeria
                                                        </option>
                                                        <option value="+44">+44 &nbsp; &nbsp; &nbsp; - &nbsp; Northern
                                                            Ireland
                                                        </option>
                                                        <option value="+47">+47 &nbsp; &nbsp; &nbsp; - &nbsp; Norway
                                                        </option>
                                                        <option value="+968">+968 &nbsp; &nbsp; &nbsp; - &nbsp; Oman
                                                        </option>
                                                        <option value="+507">+507 &nbsp; &nbsp; &nbsp; - &nbsp; Panama
                                                        </option>
                                                        <option value="+675">+675 &nbsp; &nbsp; &nbsp; - &nbsp; Papua
                                                            New Guinea
                                                        </option>
                                                        <option value="+51">+51 &nbsp; &nbsp; &nbsp; - &nbsp; Peru
                                                        </option>
                                                        <option value="+63">+63 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Philippines
                                                        </option>
                                                        <option value="+48">+48 &nbsp; &nbsp; &nbsp; - &nbsp; Poland
                                                        </option>
                                                        <option value="+351">+351 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Portugal
                                                        </option>
                                                        <option value="+974">+974 &nbsp; &nbsp; &nbsp; - &nbsp; Qatar
                                                        </option>
                                                        <option value="+40">+40 &nbsp; &nbsp; &nbsp; - &nbsp; Romania
                                                        </option>
                                                        <option value="+7">+7 &nbsp; &nbsp; &nbsp; - &nbsp; Russian
                                                            Federation
                                                        </option>
                                                        <option value="+378">+378 &nbsp; &nbsp; &nbsp; - &nbsp; San
                                                            Marino
                                                        </option>
                                                        <option value="+966">+966 &nbsp; &nbsp; &nbsp; - &nbsp; Saudi
                                                            Arabia
                                                        </option>
                                                        <option value="+44">+44 &nbsp; &nbsp; &nbsp; - &nbsp; Scotland
                                                        </option>
                                                        <option value="+381">+381 &nbsp; &nbsp; &nbsp; - &nbsp; Serbia
                                                        </option>
                                                        <option value="+65">+65 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Singapore
                                                        </option>
                                                        <option value="+421">+421 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Slovakia
                                                        </option>
                                                        <option value="+386">+386 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Slovenia
                                                        </option>
                                                        <option value="+27">+27 &nbsp; &nbsp; &nbsp; - &nbsp; South
                                                            Africa
                                                        </option>
                                                        <option value="+82">+82 &nbsp; &nbsp; &nbsp; - &nbsp; South
                                                            Korea
                                                        </option>
                                                        <option value="+34">+34 &nbsp; &nbsp; &nbsp; - &nbsp; Spain
                                                        </option>
                                                        <option value="+94">+94 &nbsp; &nbsp; &nbsp; - &nbsp; Srilanka
                                                        </option>
                                                        <option value="+249">+249 &nbsp; &nbsp; &nbsp; - &nbsp; Sudan
                                                        </option>
                                                        <option value="+47">+47 &nbsp; &nbsp; &nbsp; - &nbsp; Svalbard
                                                            and Jan Mayen
                                                        </option>
                                                        <option value="+46">+46 &nbsp; &nbsp; &nbsp; - &nbsp; Sweden
                                                        </option>
                                                        <option value="+41">+41 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Switzerland
                                                        </option>
                                                        <option value="+886">+886 &nbsp; &nbsp; &nbsp; - &nbsp; Taiwan,
                                                            ROC
                                                        </option>
                                                        <option value="+255">+255 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Tanzania
                                                        </option>
                                                        <option value="+66">+66 &nbsp; &nbsp; &nbsp; - &nbsp; Thailand
                                                        </option>
                                                        <option value="+216">+216 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Tunisia
                                                        </option>
                                                        <option value="+90">+90 &nbsp; &nbsp; &nbsp; - &nbsp; Turkey
                                                        </option>
                                                        <option value="+380">+380 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Ukraine
                                                        </option>
                                                        <option value="+971">+971 &nbsp; &nbsp; &nbsp; - &nbsp; United
                                                            Arab Emirates
                                                        </option>
                                                        <option value="+44">+44 &nbsp; &nbsp; &nbsp; - &nbsp; United
                                                            Kingdom
                                                        </option>
                                                        <option value="+1" selected="selected">+1 &nbsp; &nbsp; &nbsp; -
                                                            &nbsp; United States
                                                        </option>
                                                        <option value="+598">+598 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Uruguay
                                                        </option>
                                                        <option value="+58">+58 &nbsp; &nbsp; &nbsp; - &nbsp;
                                                            Venezuela
                                                        </option>
                                                        <option value="+84">+84 &nbsp; &nbsp; &nbsp; - &nbsp; Vietnam
                                                        </option>
                                                        <option value="+44">+44 &nbsp; &nbsp; &nbsp; - &nbsp; Wales
                                                        </option>
                                                    </select>
                                                    <input class="query_input query_phone" maxlength="16" type="text"
                                                           name="phone" id="q_phone" value="" placeholder="Phone"
                                                           onkeypress="return isNumber(event)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="inner-addon left-addon">
                                                <textarea name="query" class="query_txt" rows="1" placeholder="Query"
                                                          id="query" style="height: 100px;"></textarea>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" value="Submit"
                                               class="btn btn-danger text-uppercase btn-block">
                                    </form>
                                </div>
                            </div>
                        </div><!-- Ends: .sidebar-widget -->
                    </div><!-- Ends: .single-course-sidebar -->
                </div><!-- Ends: .col-sm-4 -->
            </div>
        </div>
    </section><!-- Ends: .single-course-wrapper -->

@stop

@section('page-script')

    <script type="text/javascript">

        $(document.body).on('click', '.enroll-now', function (e) {
            var obj = $(this);
            var courseID = obj.data('id');
            if (courseID) {

                $.ajax({
                    url: '/ajaxHandler',
                    method: "POST",
                    dataType: 'json',
                    data: {id: courseID, method: 'addToCart'},
                    beforeSend: function (request) {
                        blockUI({msg: "Adding to cart, please wait..."});
                    },
                    success: function (result) {
                        if (result) {
                            $('#cart-count').text(result.data);
                        }
                    },
                    error: function (error) {

                    },
                    complete: function (data) {
                        unblockUI();
                    }
                });
            }

        })

    </script>

@stop
