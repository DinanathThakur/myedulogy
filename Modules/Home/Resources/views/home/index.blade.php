@extends('home::layouts.master')

@section('title','Online Training')

@section('content')


    <!--==================
        Home
    ===================-->
    <section class="home">
        <div class="home-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Classroom-Led Online Class</h1>
                        <span class="home-subtitle">Own your future by learning new skills online</span>
                        <form role="form" name="course_search" method="get" action="coursesearch.html" class="home-search">
                            <div class="form-group clearfix">
                                <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                                    <input type="text" placeholder="What do you want to learn today?">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            <p class="movecenter" style="font-size:17px; margin-top:1px;"><a href="Pmp.html" style="color:#FFF;" target="_blank">PMP<sup>®</sup> | </a><a href="ITIL.html" 
                                style="color:#FFF;">ITIL<sup>®</sup> | </a><a href="Agile.html" 
                                style="color:#FFF;" target="_blank">Agile & Scrum<sup>®</sup> |</a> <a href="Devops.html" style="color:#FFF;" target="_blank">DEVOPS<sup>®</sup> |</a><a href="TOGAF.html" style="color:#FFF;" target="_blank">TOGAF<sup>®</sup> | </a> <a href="SixSigma.html" style="color:#FFF;" >Six Sigma | </a><a href="PMP-ACP.html"  style="color:#FFF;">PMI-ACP<sup>®</sup>  </a>
                                <br/> <br/>
                                 </p>
                                 <div class="col-sm-12 free-trial-btn">
                                        <a href="#" class="el-btn-regular">Start My Free Trial</a>
                                    </div>
                        </form>
                        
                        <a href="#" class="home-to-bottom"><img src="/assets/images/online-course/mouse-ico.png" alt=""></a>
                    </div><!-- Ends: .home-content -->
                </div>
            </div>
        </div>
    </section><!-- Ends: .home -->
        <!--==================
        About
    ===================-->
    <section class="about" id="about">
            <div class="container">
                    <div class="row">
                            <div class="col-sm-12 section-header04 section-header-d">
                                <h2>About <span>Us</span></h2>
                                <span class="section-devider"><span><i class="fa fa-circle"></i></span></span>
                            </div><!-- ends: .section-header -->
                        </div>
                <div class="row">
                    <div class="col-md-7 col-sm-12 flat-pdr-100 about-text">
                        <p>    Edulogy is an Energetic & Vibrant Solutions Provider working with both Corporations and Individuals.Our Corporate offerings includes IT Advisory Solutions, BPM Solutions. For Individuals we offer Live Virtual / Classroom Training to help them enrich their Competency, Knowledge & Skills. Edulogy also organizes Group Testing Events.
                            </p>
                            <p class='flat-lh-25'>Set yourself up for success with our Professional Training courses! 
                                    Get the learning tools you need to shape your career.</p>
                    </div>
                    <div class="col-md-5 col-sm-12">
                            <ul class="list-unstyled flat-list">     
                                    <li>BUSINESS CONSULTING SOLUTIONS</li> 
                                    <li>CORPORATE TRAINING SOLUTIONS</li>
                                    <li><b>MANAGEMENT TRAINING SOLUTIONS</b>
DevOps® F, Prince2 Agile® Practitioner, ITIL® P, TOGAF® 9.1, Safe Agile, Scrummaster®, Agile Scrum, AgilePM®, PMI-ACP®, PMP®, PGMP®& RMP®.</li>
                                    <li><b>TECHNICAL TRAINING SOLUTIONS</b>
AWS, BIG DATA, CISA®, CISM®, CISSP®, CLOUD COMPUTING, COMPTIA®, HADOOP, ORACLE®, MICROSOFT AZURE. </li>
                                                                     
                                </ul>  
                    </div>
                </div>
            </div>
        </section><!-- ends: .about -->
    <!--==================
        Courses
    ===================-->
    <section class="courses-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header04 section-header-d">
                    <h2>Popular<span>Courses</span></h2>
                    <span class="section-devider"><span><i class="fa fa-circle"></i></span></span>
                </div><!-- ends: .section-header -->
            </div>
        </div>
        <div class="container-custom">
            <div class="row">
                <div class="col-sm-12 course-carousel-main owl-carousel">
                    <div class="online-course-single">
                        <figure>
                            <img src="/assets/images/online-course/c01.jpg" alt="" class="img-responsive">
                        </figure>
                        <div class="online-course-details">
                            <h3>PMP ®</h3>
                            <p>Prepare for the PMP® certification exam and fast track your career as a project management professional. <a href="Pmp.html" class="link_read">Read More..</a></p>
                            
                            <div class="course-excerpt-bottom">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-heart"></i> 25 Reviews</li>
                                    <li>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </li>
                                </ul>
                            </div><!-- Ends: .course-excerpt-bottom -->
                        </div><!-- Ends: .online-course-details -->
                    </div><!-- Ends: .online-course-single -->
                    <div class="online-course-single">
                        <figure>
                            <img src="/assets/images/online-course/c02.jpg" alt="" class="img-responsive">
                            
                        </figure>
                        <div class="online-course-details">
                            <h3>TOGAF ®</h3>
                        
                            <p>TOGAF®, an Open Group standard, is the open Enterprise Architecture standard used by the world’s leading organizations to improve business efficiency.<a href="#" class="link_read">Read More..</a></p>
                                                    
                            <div class="course-excerpt-bottom">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-heart"></i> 22 Reviews</li>
                                    <li>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-half"></i></span>
                                    </li>
                                </ul>
                            </div><!-- Ends: .course-excerpt-bottom -->
                        
                        </div><!-- Ends: .online-course-details -->
                    </div><!-- Ends: .online-course-single -->
                    <div class="online-course-single">
                        <figure>
                            <img src="/assets/images/online-course/c03.jpg" alt="" class="img-responsive">
                        </figure>
                        <div class="online-course-details">
                        <h3>Agile Scrum</h3>
                        <p>Our Agile and Scrum training will enable you to develop an Agile mindset by focusing on the Scrum methodology.<a href="#" class="link_read">Read More..</a></p>
                        
                            <div class="course-excerpt-bottom">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-heart"></i> 27 Reviews</li>
                                    <li>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </li>
                                </ul>
                            </div><!-- Ends: .course-excerpt-bottom -->
                            
                        </div><!-- Ends: .online-course-details -->
                    </div><!-- Ends: .online-course-single -->
                    <div class="online-course-single">
                        <figure>
                            <img src="/assets/images/online-course/c04.jpg" alt="" class="img-responsive">
                            
                        </figure>
                        <div class="online-course-details">
                                <h3>Six Sigma Green Belt ®</h3>
                                <p>Most preferably for Quality management aspirants or Quality specialist, Green Belt certification is the start of the Six Sigma Certification.Green Belt focuses on DMAIC aspects.<a href="#" class="link_read">Read More..</a></p>
                                
                                
                                    <div class="course-excerpt-bottom">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-heart"></i> 27 Reviews</li>
                                            <li>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- Ends: .course-excerpt-bottom -->
                                    
                                </div><!-- Ends: .online-course-details -->
                    </div><!-- Ends: .online-course-single -->

                    
                </div><!-- Ends: .course-carousel-main -->
            </div>
        </div>
    </section><!-- Ends: .course-main -->
<section class="course-category">
    <div class="container">
        <div class="row">
                <div class="col-sm-12">
                        <div class="course-info-block">
                            <div class="row">
                                    <div class="col-sm-12 section-header04 section-header-d">
                                            <h2>Our <span>Mission</span></h2>
                                            <span class="section-devider"><span><i class="fa fa-circle"></i></span></span>
                                            
                                        </div><!-- ends: .section-header -->
                                <div class="col-sm-4">
                                    <div class="cib-single">
                                        <img src="/assets/images/online-course/cap-ico.png" alt="" class="img-responsive">
                                        <h3>Learn from the experts</h3>
                                        <p>Lorem ipsum dolor sit amet, consesit elit ctetuer adipiscing elit sed diamnib noi    nibh euismodes adipiscing tincidu.</p>
                                        <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Ends: .col-sm-4 -->
                                <div class="col-sm-4">
                                    <div class="cib-single">
                                        <img src="/assets/images/online-course/badge-ico.png" alt="" class="img-responsive">
                                        <h3>
                                                Guaranteed career growth</h3>
                                        <p>Lorem ipsum dolor sit amet, consesit elit ctetuer adipiscing elit sed diamnib noi    nibh euismodes adipiscing tincidu.</p>
                                        <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Ends: .col-sm-4 -->
                                <div class="col-sm-4">
                                    <div class="cib-single">
                                        <img src="/assets/images/online-course/graph-ico.png" alt="" class="img-responsive">
                                        <h3>Accredited curriculum</h3>
                                        <p>Lorem ipsum dolor sit amet, consesit elit ctetuer adipiscing elit sed diamnib noi    nibh euismodes adipiscing tincidu.</p>
                                        <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Ends: .col-sm-4 -->
                                
                            </div>
                        </div>
                    </div><!-- Ends: .course-info-block -->
        </div>
    </div>
</section>
    
    <!--==================
        Our Events
    ===================-->
    <section class="events events-style02">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header04 section-header-d">
                    <h2>Accreditation <span></span></h2>
                    <span class="section-devider"><span><i class="fa fa-circle"></i></span></span>
                    
                    <p>Edulogy offers the Best Deals in Certification, Examination & Training Experience to its Clients via Direct Accreditations & Marketing Authorizations with ATO's & REP's. The ITIL / PRINCE2 Licensed Affiliate logo is a trade mark of AXELOS Limited, used under permission of AXELOS Limited. All Rights Reserved.</p>
                    </div><!-- ends: .section-header -->
                <div class="col-sm-12">
                    <div class="col-sm-2">
                                    <img alt="owlcarousel-item-img" src="/assets/images/clients/Logo-01.png"/>
                </div><div class="col-sm-2">
                                    <img alt="owlcarousel-item-img" src="/assets/images/clients/Logo-02.png"/>
                                </div>
                                <div class="col-sm-2">
                                    <img alt="owlcarousel-item-img" src="/assets/images/clients/Logo-03.png"/>
                                </div>
                                <div class="col-sm-2">
                                    <img alt="owlcarousel-item-img" src="/assets/images/clients/Logo-04.png"/>
                                </div>
                                <div class="col-sm-2">
                                    <img alt="owlcarousel-item-img" src="/assets/images/clients/Logo-05.png"/>
                                </div>
                                <div class="col-sm-2">
                                    <img alt="owlcarousel-item-img" src="/assets/images/clients/Logo-06.png"/>
                                </div>

                </div>
            </div>
        </div>
    </section><!-- ends: .events -->
    
    <!--==================
        Testimonial
    ===================-->
    <section class="testimonial">
            <div class="container">
                <div class="row">
                        <div class="col-sm-12 section-header04 section-header-d">
                                <h2>Customer <span>Speak</span></h2>
                                <span class="section-devider"><span><i class="fa fa-circle"></i></span></span>
                                
                            </div><!-- ends: .section-header -->
                    <div id="testimonial-carousel" class="owl-carousel testimonial-carousel col-sm-12">
                        <div class="testimonial-single">
                            <!-- <div class="client-image">
                                <img src="/assets/images/s01.jpg" alt="" class="img-responsive img-circle">
                            </div> -->
                            <div class="client-content">
                                    <blockquote>
                                            It was  a great class. Lots of energy.  And I enjoyed.  
                                        </blockquote>
                            <ul class="list-unstyled client-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h3 class="client-info">John Derek, <span>Project Manager, Bejing</span></h3>
                            </div>
                        </div><!-- ends: .testimonial-single -->
                        <div class="testimonial-single">
                            
                            <div class="client-content">
                                    <blockquote>
                                            Fantastic course to prepare for PMP with professional trainers.  
                                        </blockquote>
                            <ul class="list-unstyled client-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h3 class="client-info">Kevin Luther, <span>Global Factory Sales & Marketing Manager</span></h3>
                            </div>
                        </div><!-- ends: .testimonial-single -->
                        <div class="testimonial-single">
                            
                            <div class="client-content">
                                    <blockquote>
                                            Great DevOps®. I had a great time taking this course. I took the course to prepare to sit for the practise but may be able to sit for the DevOps®. Content was very detailed. 
                                        </blockquote>
                            <ul class="list-unstyled client-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h3 class="client-info">Daniel Thomas, <span>Marketing Manager</span></h3>
                            </div>
                        </div><!-- ends: .testimonial-single -->
                        <div class="testimonial-single">
                                
                                <div class="client-content">
                                        <blockquote>
                                                As a participant it was smooth sailing for me.  </blockquote>
                                <ul class="list-unstyled client-rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h3 class="client-info">Rosy Jacobs, <span>Sr. Project Manager</span></h3>
                                </div>
                            </div><!-- ends: .testimonial-single -->
                        <div class="testimonial-single">
                        
                            <div class="client-content">
                                    <blockquote>
                                            Bootcamp. I had a great time taking this course. I took the course to prepare to sit for the CAPM.
                                        </blockquote>
                            <ul class="list-unstyled client-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h3 class="client-info">Lucia Martin, <span>Project Manager, Arcade Systems</span></h3>
                            </div>
                        </div><!-- ends: .testimonial-single -->
                        <div class="testimonial-single">
                                
                                    <div class="client-content">
                                            <blockquote>
                                                    "This is a good workshop before taking the exam. The tips on TOGAF analyzing the question are very helpful in getting the answers." 
                                                </blockquote>
                                    <ul class="list-unstyled client-rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <h3 class="client-info">Jerwine Clark, <span>Design Manager At NEC</span></h3>
                                    </div>
                                </div><!-- ends: .testimonial-single -->
                    </div>
                </div>
            </div>
        </section><!-- ends: .testimonial -->
        <section id="contact"  class="flat-row contact-page pad-top-134  contact-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-content">
                                <div class="contact-address">
                                    <div class="style1">                                    
                                       <img src="/assets/images/icon/c1.png" alt="image">
                                    </div> 
                                    <div class="details">
                                        <h5>Our Location</h5>
                                       <p> USA:
    181 Castle Dr, Stratford, CT 06614</p>
    <p>INDIA:
    152, 20th Cross, 17th Main, Sector 3, HSR Layout, Bangalore 560102.</p>
    <p>SINGAPORE:
    20,Maxwell Road #09-17 Maxwell House Singapore 069113</p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-4">
                            <div class="contact-content">
                                <div class="contact-address">
                                    <div class="style1">
                                        <img src="/assets/images/icon/c2.png" alt="image">
                                    </div>
                                    <div class="details">
                                        <h5>Contact us Anytime</h5>
                                         <p>Phone: +2034852989</p>
                                        <p>Phone: +91 805 002 1515 </p>
                                          <p>Phone: +65 94555425 </p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-4">
                            <div class="contact-content">
                                <div class="contact-address">
                                    <div class="style1">
                                        <img src="/assets/images/icon/c3.png" alt="image">
                                    </div>
                                    <div class="details">
                                        <h5>For Queries</h5>
                                        <p>info@myedulogy.com </p>
                                        <p>www.myedulogy.com</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
    
                    <div class="row">
                        <div class="flat-spacer d74px"></div>
                    </div>
    
                    <div id="respond" class="comment-respond contact style2">
                        <h1 class="title comment-title">GET IN TOUCH WITH US!</h1>
                        <h3 class="text-center">Call us on +1 210 401 5100 or Drop-in your queries below</h3>
                        <div class="contact-one-form">
                                <form id="ajax-contact" method="post" action="#">
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Name *" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" placeholder="Email *" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Subject *" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Phone *" required>
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea placeholder="Message" required></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit">Send Message</button>
                                        </div>
                                    </div>
                                    <div id="form-messages"></div>
                                </form>
                            </div><!-- Ends: .contact-one-form -->                 
                    </div><!-- /#respond -->
                </div><!-- /.container -->   
            </section>
    
@stop
