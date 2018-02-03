@extends('home::layouts.master')
@section('title','Course')
@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li class="active">PMP@ Training Course</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 title_courses"><br>
                    <h1 class="titlefont">PMP<sup>®</sup> Certification Training Course </h1>
                    <div class="row">
                        <div class="col-sm-8 ">
                            <p><label style=" color:#F47A00;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></label>
                                <a id="scrollToRating" style="color:#FFF">156 ratings</a> | <span style="color:#FFF">3764 students enrolled </span>
                            </p>

                            <h2 class="courepage-intro-text">The PMP certification is the global gold standard for
                                project management professionals. Skilled and certified practitioners of project
                                management are in high demand by employers in all industries.This PMP course online is
                                designed to teach you the full scope of project management processes, and help you pass
                                the PMP certification exam on your first attempt.
                                Join the community of more than 500,000 PMPs in 185 countries and get PMP certified
                                today!</h2>
                        </div>

                        <div class="col-sm-4">

                            <img src="/assets/images/courses/pmp.jpg" width="300" height="200" class="img-responsive"
                                 style="padding-left:20px;"><br>

                        </div>

                    </div>

                </div>
            </div>
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
                                        <li role="presentation" class="active"><a href="#classroom" aria-controls="home"
                                                                                  role="tab" data-toggle="tab"
                                                                                  aria-expanded="true">Classroom</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#virtual" aria-controls="profile"
                                                                            role="tab" data-toggle="tab"
                                                                            aria-expanded="false">Online Classes</a>
                                        </li>

                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content col-text">
                                        <div role="tabpanel" class="tab-pane fade active in" id="classroom">
                                            <div class="bg-white-rounded border-round" id="schedule_div">
                                                <div class="clearfix table-head text-uppercase hidden-xs">
                                                    <div class="col-sm-3 table-caption"><i class="fa fa-calendar"></i>
                                                        Date
                                                    </div>
                                                    <div class="col-sm-3 table-caption"><i
                                                                class="fa fa-clock-o fa-low-size"></i> time
                                                    </div>
                                                    <div class="col-sm-2 table-caption type-course"><i
                                                                class="fa fa-th-list"></i> course type
                                                    </div>
                                                    <div class="col-sm-2 table-caption"><i class="fa fa-tags"></i> price
                                                    </div>
                                                    <div class="col-sm-2 table-caption"><i class="fa fa-user"></i>
                                                        register
                                                    </div>
                                                </div>

                                                <div itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="clearfix table-body Classroom">
                                                        <div class="col-sm-3 table-caption">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"><i
                                                                            class="fa fa-calendar fa-low-size"></i>&nbsp;
                                                                    Date :
                                                                </div>
                                                                <div class="xs-caption">
                                                                    <div class="text-capitalize schedule-date">Oct 24 -
                                                                        Oct 27
                                                                    </div>
                                                                    <div class="color-gray text-capitalize"> ( 4 Days
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
                                                                <div class="xs-caption"> 09:00 AM - 06:00 PM</div>
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
                                                                    <strike class="color-gray"> USD 1799.00 </strike>
                                                                    <div class="schedule-price">USD 1599.00</div>
                                                                    <div><span class="color-gray">valid till :</span> 10
                                                                        Oct
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 table-caption text-center ">
                                                            <button type="button" class="btn btn-danger enroll-now"
                                                                    data-id="c-1">ENROLL NOW
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix table-body Virtual schedule_toggle"
                                                         style="display: block;">
                                                        <div class="col-sm-3 table-caption">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"><i
                                                                            class="fa fa-calendar fa-low-size"></i>&nbsp;
                                                                    Date :
                                                                </div>
                                                                <div class="xs-caption">
                                                                    <div class="text-capitalize schedule-date">Nov 14 -
                                                                        Nov 17
                                                                    </div>
                                                                    <div class="color-gray text-capitalize"> ( 4 Days
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
                                                                <div class="xs-caption"> 07:30 PM - 11:30 PM</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 table-caption type-course">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"> type :</div>
                                                                <div class="xs-caption">
                                                                    <div class="xs-caption"> Classroom</div>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 table-caption">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"> price :</div>
                                                                <div class="xs-caption">
                                                                    <strike class="color-gray"> USD 1999.00 </strike>
                                                                    <div class="schedule-price">USD 1499.00</div>
                                                                    <div><span class="color-gray">valid till :</span> 06
                                                                        Nov
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 table-caption text-center ">
                                                            <button type="button" class="btn btn-danger enroll-now"
                                                                    data-id="c-2">ENROLL NOW
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix table-body Classroom schedule_toggle"
                                                         style="display: block;">
                                                        <div class="col-sm-3 table-caption">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"><i
                                                                            class="fa fa-calendar fa-low-size"></i>&nbsp;
                                                                    Date :
                                                                </div>
                                                                <div class="xs-caption">
                                                                    <div class="text-capitalize schedule-date">Dec 12 -
                                                                        Dec 15
                                                                    </div>
                                                                    <div class="color-gray text-capitalize"> ( 4 Days
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
                                                                <div class="xs-caption"> 09:00 AM - 06:00 PM</div>
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
                                                                    <strike class="color-gray"> USD 1799.00 </strike>
                                                                    <div class="schedule-price">USD 1599.00</div>
                                                                    <div><span class="color-gray">valid till :</span> 24
                                                                        Nov
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 table-caption text-center ">
                                                            <button type="button" class="btn btn-danger enroll-now"
                                                                    data-id="c-3">ENROLL NOW
                                                            </button>
                                                        </div>
                                                    </div>


                                                </div>


                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="virtual">
                                            <div class="bg-white-rounded border-round">
                                                <div class="clearfix table-head text-uppercase hidden-xs">
                                                    <div class="col-sm-3 table-caption"><i class="fa fa-calendar"></i>
                                                        Date
                                                    </div>
                                                    <div class="col-sm-3 table-caption"><i
                                                                class="fa fa-clock-o fa-low-size"></i> time
                                                    </div>
                                                    <div class="col-sm-2 table-caption type-course"><i
                                                                class="fa fa-th-list"></i> course type
                                                    </div>
                                                    <div class="col-sm-2 table-caption"><i class="fa fa-tags"></i> price
                                                    </div>
                                                    <div class="col-sm-2 table-caption"><i class="fa fa-user"></i>
                                                        register
                                                    </div>
                                                </div>
                                                <div itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="clearfix table-body Classroom">
                                                        <div class="col-sm-3 table-caption">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"><i
                                                                            class="fa fa-calendar fa-low-size"></i>&nbsp;
                                                                    Date :
                                                                </div>
                                                                <div class="xs-caption">
                                                                    <div class="text-capitalize schedule-date">Sep 26 -
                                                                        Sep 29
                                                                    </div>
                                                                    <div class="color-gray text-capitalize"> ( 4 Days
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
                                                                <div class="xs-caption"> 09:00 AM - 06:00 PM</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 table-caption type-course">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"> type :</div>
                                                                <div class="xs-caption"> Virtual Classroom</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 table-caption">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"> price :</div>
                                                                <div class="xs-caption">
                                                                    <strike class="color-gray"> USD 1299.00 </strike>
                                                                    <div class="schedule-price">USD 999.00</div>
                                                                    <div><span class="color-gray">valid till :</span> 19
                                                                        Sep
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 table-caption text-center ">
                                                            <form action="#" id="add_to_cart_598946eb68b76"
                                                                  method="post">
                                                                <button type="submit" class="btn btn-danger"
                                                                        data-currency="USD" data-category="Classroom"
                                                                        data-price="12999.00">ENROLL NOW
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix table-body Classroom">
                                                        <div class="col-sm-3 table-caption">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"><i
                                                                            class="fa fa-calendar fa-low-size"></i>&nbsp;
                                                                    Date :
                                                                </div>
                                                                <div class="xs-caption">
                                                                    <div class="text-capitalize schedule-date">Oct 24 -
                                                                        Oct 27
                                                                    </div>
                                                                    <div class="color-gray text-capitalize"> ( 4 Days
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
                                                                <div class="xs-caption"> 09:00 AM - 06:00 PM</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 table-caption type-course">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"> type :</div>
                                                                <div class="xs-caption">
                                                                    Virtual Classroom
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 table-caption">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"> price :</div>
                                                                <div class="xs-caption">
                                                                    <strike class="color-gray"> USD 1299.00 </strike>
                                                                    <div class="schedule-price">USD 999.00</div>
                                                                    <div><span class="color-gray">valid till :</span> 10
                                                                        Oct
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 table-caption text-center ">
                                                            <form action="#" id="#" method="post">
                                                                <button type="submit" class="btn btn-danger"
                                                                        data-currency="USD" data-category="Classroom"
                                                                        data-price="12999.00">ENROLL NOW
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix table-body Virtual schedule_toggle"
                                                         style="display: block;">
                                                        <div class="col-sm-3 table-caption">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"><i
                                                                            class="fa fa-calendar fa-low-size"></i>&nbsp;
                                                                    Date :
                                                                </div>
                                                                <div class="xs-caption">
                                                                    <div class="text-capitalize schedule-date">Nov 14 -
                                                                        Nov 17
                                                                    </div>
                                                                    <div class="color-gray text-capitalize"> ( 4 Days
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
                                                                <div class="xs-caption"> 07:30 PM - 11:30 PM</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 table-caption type-course">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"> type :</div>
                                                                <div class="xs-caption">
                                                                    <div class="xs-caption"> Virtual Classroom</div>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 table-caption">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"> price :</div>
                                                                <div class="xs-caption">
                                                                    <strike class="color-gray"> USD 1299.00 </strike>
                                                                    <div class="schedule-price">USD 999.00</div>
                                                                    <div><span class="color-gray">valid till :</span> 06
                                                                        Nov
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 table-caption text-center ">
                                                            <form action="#" method="post">
                                                                <button type="submit" class="btn btn-danger">ENROLL
                                                                    NOW
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix table-body Classroom schedule_toggle"
                                                         style="display: block;">
                                                        <div class="col-sm-3 table-caption">
                                                            <div class="clearfix">
                                                                <div class="visible-xs xs-title"><i
                                                                            class="fa fa-calendar fa-low-size"></i>&nbsp;
                                                                    Date :
                                                                </div>
                                                                <div class="xs-caption">
                                                                    <div class="text-capitalize schedule-date">Dec 12 -
                                                                        Dec 15
                                                                    </div>
                                                                    <div class="color-gray text-capitalize"> ( 4 Days
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
                                                                <div class="xs-caption"> 09:00 AM - 06:00 PM</div>
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
                                                                    <strike class="color-gray"> USD 1299.00 </strike>
                                                                    <div class="schedule-price">USD 999.00</div>
                                                                    <div><span class="color-gray">valid till :</span> 24
                                                                        Nov
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
                                        <li role="presentation" class="active"><a href="#overview" aria-controls="home"
                                                                                  role="tab" data-toggle="tab"
                                                                                  aria-expanded="true">OVERVIEW</a></li>
                                        <li role="presentation" class=""><a href="#agenda" aria-controls="profile"
                                                                            role="tab" data-toggle="tab"
                                                                            aria-expanded="false">AGENDA</a></li>
                                        <li role="presentation" class=""><a href="#benefits" aria-controls="messages"
                                                                            role="tab" data-toggle="tab"
                                                                            aria-expanded="false">BENEFITS</a></li>
                                        <li role="presentation" class=""><a href="#certification"
                                                                            aria-controls="settings" role="tab"
                                                                            data-toggle="tab" aria-expanded="false">CERTIFICATION</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#whocanattend"
                                                                            aria-controls="settings" role="tab"
                                                                            data-toggle="tab" aria-expanded="false">WHO
                                                CAN ATTEND?</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content col-text">
                                        <div role="tabpanel" class="tab-pane fade active in" id="overview">
                                            <p>Project Management Professional (PMP)<sup>®</sup> certification is the
                                                most distinguished professional qualification for project managers
                                                offered by Project Management Institute (PMI)<sup>®</sup>. The
                                                certification is relevant for professionals who are seeking to advance
                                                their career by completing the PMP<sup>®</sup> certification exam that
                                                is based on Project Management Institute, <em>A Guide to the Project
                                                    Management Body of Knowledge, (PMBOK<sup>®</sup>&nbsp; Guide)—Fifth
                                                    Edition</em>, Project Management Institute, Inc., 2013.</p>
                                            <p><br>Our blended learning program equips you with the right information
                                                required to ace the PMP<sup>®</sup> and Certified Associate of Project
                                                Management (CAPM)<sup>®</sup> exams, and is based on the principles that
                                                are outlined in the <em>PMBOK<sup>®</sup> Guide</em>. Now you can
                                                enhance your competence and knowledge in Project management techniques,
                                                and establish your ability to handle complex project challenges with
                                                confidence.</p>
                                            <p>The PMP<sup>®</sup> certification is very relevant in the global IT
                                                industry, and gives you the edge by showing your employers that you have
                                                the skills and training to get a project done from start to finish. If
                                                time and place constraints prevent you from attending a workshop course,
                                                then you could consider our Online Guided PMP<sup>®</sup> Exam Prep
                                                course to prepare for the PMP<sup>®</sup> or CAPM<sup>®</sup> exams at
                                                your own convenience.</p>
                                            <div style="text-align: justify;"><strong>What you will receive from our
                                                    35-hour&nbsp;PMP<sup style="margin: 0px; padding: 0px;">®</sup>&nbsp;course:</strong>
                                            </div>
                                            <div style="text-align: justify;">&nbsp;</div>
                                            <div style="text-align: justify;">
                                                <div><strong>From the Course:<br></strong></div>
                                                <ul>
                                                    <li>Learn to define and describe common terminology, manage projects
                                                        faster while using fewer resources
                                                    </li>
                                                    <li>Avoid common mistakes in managing projects and learn the many
                                                        tricks of the trade
                                                    </li>
                                                    <li>Apply International Project Management Standards from
                                                        PMI<sup>®</sup>&nbsp;(the <em>PMBOK<sup>®</sup>&nbsp;Guide</em>)
                                                        to real-world situations
                                                    </li>
                                                    <li>Study <em>PMBOK<sup>®</sup></em>&nbsp;<em>Guides</em> Five
                                                        Process Groups, Ten Knowledge Areas, And The Area Of
                                                        Professional and Social Responsibility
                                                    </li>
                                                    <li>Gain skills needed to pass the PMI<sup>®</sup>s Project
                                                        Management Professional (PMP)<sup>®</sup> Certification Exam
                                                    </li>
                                                    <li>Prepare for PMP<sup>®</sup> /CAPM<sup>®</sup> exams and master
                                                        test-taking techniques
                                                    </li>
                                                    <li>Learn <em>PMBOK<sup>®</sup> Guide</em> terms, definitions, and
                                                        processes
                                                    </li>
                                                    <li>Practice styles and types of questions modelled on
                                                        PMP<sup>®</sup>/CAPM<sup>®</sup>&nbsp;exams
                                                    </li>
                                                </ul>
                                            </div>
                                            <div style="text-align: justify;">&nbsp;<strong>From the Workshop :</strong>
                                            </div>
                                            <div style="text-align: justify;">&nbsp;</div>
                                            <ul style="list-style-type: disc;">
                                                <li style="text-align: justify;">100 Days Free online access to PMP®
                                                    e-learning
                                                </li>
                                                <li style="text-align: justify;">35 PDUs Certificate</li>
                                                <li style="text-align: justify;">14 Hrs of High Quality full length
                                                    Audio-Video based on PMBOK® Guide Fifth Edition
                                                </li>
                                                <li style="text-align: justify;">6 Full-Length Mock Exams featuring 1200
                                                    practice questions
                                                </li>
                                                <li style="text-align: justify;">Knowledge Area Questionnaire featuring
                                                    300 questions on the 10 Knowledge Areas
                                                </li>
                                                <li style="text-align: justify;">PMP® Exam Blue print (PMP®&nbsp; Exam
                                                    Application steps and procedure)
                                                </li>
                                                <li style="text-align: justify;">PMP®&nbsp; Math Formula with examples
                                                </li>
                                                <li style="text-align: justify;">PMP®&nbsp; Exam Tips and Techniques
                                                </li>
                                                <li style="text-align: justify;">Ready to use Free Project Management
                                                    Templates
                                                </li>
                                                <li style="text-align: justify;">Downloadable Courseware e-book (please
                                                    carry laptop/tablet to refer during class)
                                                </li>
                                                <li style="text-align: justify;">PMP® Exam Application assistance
                                                    (Assistance with PMI® Registration, PMI® Membership, &amp; PMI®
                                                    Application procedure)
                                                </li>
                                                <li style="text-align: justify;">Sample PMP Application Template (filled
                                                    out) for reference
                                                </li>
                                                <li style="text-align: justify;">End-to-end support via phone, mail, and
                                                    chat<br>
                                                    <p><br><strong>PMP is a registered mark of the Project Management
                                                            Institute, Inc.</strong></p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="agenda">
                                            <div style="text-align: justify;"><strong>Introduction to PMP<sup>®</sup>
                                                    Certification Course<br><br></strong></div>
                                            <ul style="list-style-type: disc; text-align: justify;">
                                                <li>What are PMI<sup>®</sup> &amp; <em>PMBOK® Guide</em>?</li>
                                                <li>Evolution of PMI<sup>®</sup></li>
                                                <li>Certifications offered by PMI<sup>®</sup></li>
                                                <li>PMI<sup>®</sup> Contact Resources</li>
                                                <li>What is PMP<sup>®</sup>?</li>
                                                <li>Prerequisites for the PMP<sup>®</sup> Exam</li>
                                                <li>PMP<sup>®</sup> Exam Syllabus</li>
                                                <li>The Structure of the PMP<sup>®</sup> Exam</li>
                                                <li>Introduction to Project Management<br><br></li>
                                            </ul>
                                            <div style="text-align: justify;"><strong>Project Management
                                                    Framework<br><br></strong></div>
                                            <ul style="list-style-type: disc; text-align: justify;">
                                                <li>Definition of a Project</li>
                                                <li>What is Project Management?</li>
                                                <li>What is Operations Management?</li>
                                                <li>What is Program Management?</li>
                                                <li>What is Portfolio Management?</li>
                                                <li>Project Management Office (PMO)</li>
                                                <li>Constraints</li>
                                                <li>Role of a Project Manager</li>
                                                <li>Organizational Structure</li>
                                                <li>Enterprise Environmental Factors</li>
                                                <li>Organizational Process Assets</li>
                                                <li>Project lifecycle Vs. Product Life cycle<br><br></li>
                                            </ul>
                                            <div style="text-align: justify;"><strong>Project Management
                                                    Processes<br><br></strong></div>
                                            <ul style="list-style-type: disc; text-align: justify;">
                                                <li>Project LifeCycle Overview</li>
                                                <li>Project Lifecycle Vs. Project Management Process</li>
                                                <li>Stakeholders</li>
                                                <li>Key Stakeholders</li>
                                                <li>Process Groups, Knowledge Areas</li>
                                                <li>Input/ Output of 47 Project Management Process Groups</li>
                                                <li>Organizational influences on Project Management<br><br></li>
                                            </ul>
                                            <div style="text-align: justify;"><strong>Project Integration Management<br><br></strong>
                                            </div>
                                            <ul style="list-style-type: disc; text-align: justify;">
                                                <li>What is Project Integration Management</li>
                                                <li>Role of Project Team</li>
                                                <li>Role of Project Sponsor</li>
                                                <li>Project Selection Methods</li>
                                                <li>Core Processes of the Project Integration Management Knowledge
                                                    Area<br><br></li>
                                            </ul>
                                            <div style="text-align: justify;"><strong>Project Scope
                                                    Management<br><br></strong></div>
                                            <ul style="list-style-type: disc; text-align: justify;">
                                                <li>What is Project Scope Management</li>
                                                <li>Product Scope vs. Project Scope</li>
                                                <li>Core Processes of the Project Scope Management Knowledge
                                                    Area<br><br></li>
                                            </ul>
                                            <div style="text-align: justify;"><strong>Project Time
                                                    Management<br><br></strong></div>
                                            <ul style="list-style-type: disc; text-align: justify;">
                                                <li>What is Project Time Management</li>
                                                <li>What is Project Schedule</li>
                                                <li>Gantt Charts</li>
                                                <li>Network Diagram</li>
                                                <li>Estimation</li>
                                                <li>Schedule Network Analysis Techniques</li>
                                                <li>PERT, PERT Analysis, Critical Path Method and Schedule Compression
                                                </li>
                                                <li>Core Processes of the Project Time Management Knowledge Area<br><br>
                                                </li>
                                            </ul>
                                            <div style="text-align: justify;"><strong>Project Cost
                                                    Management<br><br></strong></div>
                                            <ul style="list-style-type: disc; text-align: justify;">
                                                <li>What is Project Cost Management</li>
                                                <li>Differentiate between Cost Estimating and Cost Budgeting</li>
                                                <li>Key Terminology in Project Cost Management</li>
                                                <li>Core Processes of Project Cost Management Knowledge Area</li>
                                                <li>Earned Value Technique<br><br></li>
                                            </ul>
                                            <div style="text-align: justify;"><strong>Project Quality Management<br><br></strong>
                                            </div>
                                            <ul style="list-style-type: disc; text-align: justify;">
                                                <li>What is Quality?</li>
                                                <li>What is Quality Management?</li>
                                                <li>Cost of Quality</li>
                                                <li>Core PM processes of Project Quality Management Knowledge Area</li>
                                                <li>Seven Basic Tools of Quality<br><br></li>
                                            </ul>
                                            <div style="text-align: justify;"><strong>Project Human Resource
                                                    Management<br><br></strong></div>
                                            <ul style="list-style-type: disc; text-align: justify;">
                                                <li>What is Human Resource Management</li>
                                                <li>Roles and Responsibilities of the Project Sponsor</li>
                                                <li>Functional Manager vs. Project Manager</li>
                                                <li>Core processes of Human Resource Management Knowledge Area</li>
                                                <li>Conflict Management</li>
                                                <li>Motivation Theory<br><br></li>
                                            </ul>
                                            <div style="text-align: justify;"><strong>Project Communication
                                                    Management<br><br></strong></div>
                                            <ul style="list-style-type: disc; text-align: justify;">
                                                <li>What is Communication?</li>
                                                <li>Communication Methods, Technology and Channels</li>
                                                <li>Basic Communication Model</li>
                                                <li>Key Terminology in Project Communication Management</li>
                                                <li>Core processes of Communication Management Knowledge Area<br><br>
                                                </li>
                                            </ul>
                                            <div style="text-align: justify;"><strong>Project Risk
                                                    Management<br><br></strong></div>
                                            <ul style="list-style-type: disc; text-align: justify;">
                                                <li>What is Risk?</li>
                                                <li>Project Management Risks</li>
                                                <li>How are Risk &amp; EMV calculated?</li>
                                                <li>Risk Classification</li>
                                                <li>Decision Tree Analysis</li>
                                                <li>Risk Reserve &amp; Contingency Reserve</li>
                                                <li>Key Terminology in Project Risk Management</li>
                                                <li>Core processes of Risk Management Knowledge Area<br><br></li>
                                            </ul>
                                            <div style="text-align: justify;"><strong>Project Procurement Management<br><br></strong>
                                            </div>
                                            <ul style="list-style-type: disc; text-align: justify;">
                                                <li>What is a Contract?</li>
                                                <li>Different Types of Contract</li>
                                                <li>Advantages and Disadvantages of Contract Types</li>
                                                <li>Key Terminology in Project Procurement Management</li>
                                                <li>Core Processes of Project Procurement Management Knowledge
                                                    Area<br><br></li>
                                            </ul>
                                            <div style="text-align: justify;"><strong>Project Stakeholder Management<br><br></strong>
                                            </div>
                                            <ul style="list-style-type: disc; text-align: justify;">
                                                <li>Who is a Stakeholder?</li>
                                                <li>Stakeholder Register</li>
                                                <li>Various Analytical Techniques for Stakeholder Analysis</li>
                                                <li>Various Management and Interpersonal Skills</li>
                                                <li>Key Terminology in Project Stakeholder Management</li>
                                                <li>Core processes of Project Stakeholder Management Knowledge
                                                    Area<br><br></li>
                                            </ul>
                                            <div style="text-align: justify;"><strong>PMI<sup>®</sup> Professional &amp;
                                                    Social Responsibility<br><br></strong></div>
                                            <ul style="list-style-type: disc; text-align: justify;">
                                                <li>How to Ensure Individual Integrity</li>
                                                <li>How to Contribute to Project Management Knowledge Base</li>
                                                <li>Ethnocentrism</li>
                                                <li>Code of Ethics</li>
                                                <li>Professional Responsibility</li>
                                                <li>Balance stakeholders interest<br><br></li>
                                            </ul>
                                            <div style="text-align: justify;"><strong>PMP<sup>®</sup> Exam Tips &amp;
                                                    Tricks<br><br></strong></div>
                                            <ul style="list-style-type: disc;">
                                                <li style="text-align: justify;">PMP<sup>®</sup>&nbsp; type exam
                                                    questions
                                                </li>
                                                <li style="text-align: justify;">Tricky test questions</li>
                                                <li style="text-align: justify;">Exam key terms</li>
                                            </ul>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="benefits">
                                            <div><strong>From the Course:<br><br></strong></div>
                                            <ul style="list-style-type: disc;">
                                                <li>Learn to define and describe common terminology, manage projects
                                                    faster while using fewer resources
                                                </li>
                                                <li>Avoid common mistakes in managing projects and learn the many tricks
                                                    of the trade
                                                </li>
                                                <li>Apply International Project Management Standards from
                                                    PMI<sup>®</sup> (the <em>PMBOK<sup>®</sup> Guide</em>) to real-world
                                                    situations
                                                </li>
                                                <li>Study <em>PMBOK<sup>®</sup> Guides</em> Five Process Groups, Ten
                                                    Knowledge Areas, And The Area Of Professional and Social
                                                    Responsibility
                                                </li>
                                                <li>Gain skills needed to pass the PMI<sup>®</sup>s Project Management
                                                    Professional (PMP)<sup>®</sup> Certification Exam
                                                </li>
                                                <li>Prepare for PMP<sup>®</sup>/CAPM<sup>®</sup> exams and master
                                                    test-taking techniques
                                                </li>
                                                <li>Learn <em>PMBOK<sup>®</sup> Guide</em> terms, definitions, and
                                                    processes
                                                </li>
                                                <li>Practice styles and types of questions modelled on PMP<sup>®</sup>/CAPM<sup>®</sup>
                                                    exams (This course is aligned to the 2016 exam)<br><br><br></li>
                                            </ul>
                                            <div><strong>From the Workshop :</strong></div>
                                            <div>&nbsp;</div>
                                            <ul style="list-style-type: disc;">
                                                <li>100 Days Free online access to PMP® e-learning</li>
                                                <li>35 PDUs Certificate</li>
                                                <li>14 Hrs of High Quality full length Audio-Video based on PMBOK® Guide
                                                    Fifth Edition
                                                </li>
                                                <li>6 Full-Length Mock Exams featuring 1200 practice questions</li>
                                                <li>Knowledge Area Questionnaire featuring 300 questions on the 10
                                                    Knowledge Areas
                                                </li>
                                                <li>PMP® Exam Blue print (PMP®&nbsp; Exam Application steps and
                                                    procedure)
                                                </li>
                                                <li>PMP®&nbsp; Math Formula with examples</li>
                                                <li>PMP®&nbsp; Exam Tips and Techniques</li>
                                                <li>Ready to use Free Project Management Templates</li>
                                                <li>Downloadable Courseware e-book (please carry laptop/tablet to refer
                                                    during class)
                                                </li>
                                                <li>PMP® Exam Application assistance (Assistance with PMI® Registration,
                                                    PMI® Membership, &amp; PMI® Application procedure)
                                                </li>
                                                <li>Sample PMP Application Template (filled out) for reference</li>
                                                <li>End-to-end support via phone, mail, and chat</li>
                                            </ul>
                                            <p><br> Disclaimer: <br><strong>Individual workshop deliverables may be
                                                    subject to change.</strong></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="certification">
                                            <div style="text-align: justify;"><strong>Eligibility:</strong><br><br>To
                                                apply for the PMP<sup>®</sup> Credential, you need to either:
                                            </div>
                                            <div style="text-align: justify;">&nbsp;</div>
                                            <div style="text-align: justify;">Possess a Secondary Degree (High School
                                                Diploma, Associates Degree, or Global equivalent) with minimum of five
                                                (5) years / 60 months of unique (non-overlapping) Project Management
                                                experience, with 7,500 hours in leading and directing projects, and 35
                                                hours of Project Management Education
                                            </div>
                                            <div style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                OR<br> Possess a four (4) year degree (Bachelors Degree or the Global
                                                equivalent) and a minimum 3 years of Project Management experience, with
                                                4,500 hours in leading and directing projects, and 35 hours of Project
                                                Management Education<br><br><strong>Process:<br><br></strong>To apply
                                                for the PMP<sup>®</sup> Certification Exam :<br><br>Register and log in
                                                to
                                                <a href="https://authentication.pmi.org/Default.aspx?r=certification.pmi.org/default.aspx&amp;s=true%20)">PMI<sup>®</sup>s
                                                    Online System</a> to get started.<br><br></div>
                                            <div style="text-align: justify;">A printable <a
                                                        href="http://www.pmi.org/Certification/~/media/PDF/Certifications/PMP%20Application Form.ashx">PMP<sup>®</sup>
                                                    Application Form</a> is also available.<br><br></div>
                                            <div style="text-align: justify;">You can always refer the <a
                                                        href="http://www.pmi.org/Certification/~/media/PDF/Certifications/pdc_pmphandbook.ashx%20)">PMP<sup>®</sup>
                                                    Handbook</a> for further information.<br><br></div>
                                            <div style="text-align: justify;"><strong>To maintain PMP<sup>®</sup>
                                                    Certification, as part of PMI</strong><strong><sup>®</sup>s
                                                    Continuing Certification Requirements program, a PMP<sup>®</sup>
                                                    credential holder will need to earn 60 PDUs per three-year
                                                    cycle.</strong><br><br></div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="whocanattend">
                                            <div style="text-align: justify;">This course will be useful for
                                                professionals&nbsp;in the following roles, among others:
                                            </div>
                                            <div style="text-align: justify;">&nbsp;</div>
                                            <ul>
                                                <li style="text-align: justify;">Associate Project Managers</li>
                                                <li style="text-align: justify;">Project Managers</li>
                                                <li style="text-align: justify;">IT Project Managers</li>
                                                <li style="text-align: justify;">Project Coordinators</li>
                                                <li style="text-align: justify;">Project Analysts</li>
                                                <li style="text-align: justify;">Project Leaders</li>
                                                <li style="text-align: justify;">Senior Project Managers</li>
                                                <li style="text-align: justify;">Team Leaders</li>
                                                <li style="text-align: justify;">Product Managers</li>
                                                <li style="text-align: justify;">Program Managers</li>
                                                <li style="text-align: justify;">Project Sponsors</li>
                                                <li style="text-align: justify;">Project Team Members seeking
                                                    PMP<sup>®</sup> or CAPM<sup>® </sup>certification.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--tabs panel end-->
                                </div>
                            </div>

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
