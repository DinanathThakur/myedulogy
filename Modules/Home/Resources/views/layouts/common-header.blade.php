<header>
    <!-- Header Top -->
    <div class="header-top header-top-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12 header-top-left">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone"></i>  <a href="tel:+2034852989" title="Phone number">+1 210 401 5100</a></li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:info@edulogy.com" title="Email address"> info@edulogy.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-xs-12 header-top-right">
                    <ul class="list-unstyled">
                        @if (!Auth::check())
                        <li><a href="/register">Register</a></li>
                        <li><a href="/login" class="apply-btn" >Login</a></li>
                        @else
                        <li><a href="/user/my-profile" class="apply-btn" >My Profile</a></li>
                        @endif
                        <li><a href="#">Cart (0)</a></li>
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
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#edulight-navbar-collapse" aria-expanded="false">
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
                                                <input type="search" class="form-control main-search-input" placeholder="Search ...">
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
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Courses</a>
                                            <ul class="dropdown-menu">
                                                <!-- <li><a href="#">Course Categories</a></li>  -->
                                                <li class="mega-menu dropdown-submenu"><a href="#">Project Management</a>
                                                    <i class="fa fa-angle-right"></i>
                                                    <ul class="mega-menu-block list-unstyled dropdown-menu">
                                                        <li>
                                                            <div class="mega-menu-content clearfix">
                                                                <span class="mega-content-block">
                                                                    <a href="pmp.html">PMP<sup>®</sup> Certification</a>
                                                                    <a href="prince2foundation.html">PRINCE2<sup>®</sup> Foundation Practitioner</a>
                                                                    <a href="capm-certification.html" title="">CAPM<sup>®</sup> Certification</a>
                                                                    <a href="#" title="">PMP PLUS</a>
                                                                    <a href="#" title="">Project Management Expert</a>
                                                                    <a href="PMP-ACP.html" title="">PMI-RMP<sup>®</sup> Certification</a>
                                                                    <a href="#" title="">CBAP<sup>®</sup>-Certified Business Analysis Professional</a>
                                                                    <a href="#" title="">CCBA<sup>®</sup>-Certification of Competency in Business Analysis</a>
                                                                </span>
                                                                <span class="mega-content-block-second">
                                                                    <a href="#" title="">PRINCE2<sup>®</sup> Foundation</a>

                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu dropdown-submenu"><a href="#">IT Service & Architecture</a>
                                                    <i class="fa fa-angle-right"></i>
                                                    <ul class="mega-menu-block list-unstyled dropdown-menu">
                                                        <li>
                                                            <div class="mega-menu-content clearfix">
                                                                <span class="mega-content-block">
                                                                    <a href="ITIL.html">ITIL Foundation </a>
                                                                    <a href="ITIL.html">ITIL Intermediate Capability & Life Cycle Module </a>
                                                                    <a href="#" title="">ITIL Expert</a>
                                                                    <a href="#" title="">ITIL Practitioner </a>
                                                                    <a href="Devops.html" title="">Devops</a>
                                                                    <a href="TOGAF.html" title="">TOGAF 9</a>

                                                                </span>
                                                                <span class="mega-content-block-second">
                                                                    <img src="/assets/images/megamenu.jpg" alt="" class="img-responsive" />

                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu dropdown-submenu">
                                                    <a href="#">Big Data and Analytics</a>
                                                    <i class="fa fa-angle-right"></i>
                                                    <ul class="mega-menu-block list-unstyled dropdown-menu">
                                                        <li>
                                                            <div class="mega-menu-content clearfix">
                                                                <span class="mega-content-block">
                                                                    <a href="#">Bigdata Hadoop Architect</a>
                                                                    <a href="#">Business Analytics Expert</a>
                                                                    <a href="#" title="">Big Hadoop Solution Architect</a>
                                                                    <a href="#" title="">Integrated Programme in Big Data& Data Science </a>
                                                                    <a href="#" title="">Big Data Hadoop and Spark Developer </a>
                                                                    <a href="#" title="">Data Science Certification Training & Programming</a>
                                                                    <a href="#" title="">Data Science with SAS Training </a>
                                                                    <a href="#" title="">Data Science with Python</a>
                                                                </span>
                                                                <span class="mega-content-block-second">
                                                                    <a href="#" title="">Tableaue Desktop 10 Qualified Associate Training</a>

                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu dropdown-submenu">
                                                    <a href="#">Cyber Security </a>
                                                    <i class="fa fa-angle-right"></i>
                                                    <ul class="mega-menu-block list-unstyled dropdown-menu">
                                                        <li>
                                                            <div class="mega-menu-content clearfix">
                                                                <span class="mega-content-block">
                                                                    <a href="#">Certified Ethical Hacker - EC Council</a>
                                                                    <a href="#">Computer Hacking Forensic Investigator </a>
                                                                    <a href="#" title="">CISSSP – ISC2</a>
                                                                    <a href="#" title="">CISA - CISSP</a>
                                                                    <a href="#" title="">CRISC - CISSP</a>
                                                                    <a href="#" title="">CISM - CISSP</a>
                                                                    <a href="#" title="">COBIT 5 – Peoplecert </a>
                                                                    <a href="#" title="">Comptia Security </a>
                                                                </span>
                                                                <span class="mega-content-block-second">
                                                                    <img src="/assets/images/megamenu.jpg" alt="" class="img-responsive" />
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu dropdown-submenu">
                                                    <a href="#">Digital Marketing</a>
                                                    <i class="fa fa-angle-right"></i>
                                                    <ul class="mega-menu-block list-unstyled dropdown-menu">
                                                        <li>
                                                            <div class="mega-menu-content clearfix">
                                                                <span class="mega-content-block">
                                                                    <a href="#">Digital Marketing Certified Associate</a>
                                                                    <a href="#">Digital Marketing Specialist</a>
                                                                    <a href="#" title="">Digital & Social Selling Certified Associate Training Program</a>
                                                                    <a href="#" title="">PPC Specialist</a>
                                                                    <a href="#" title="">SEO Specialist</a>
                                                                    <a href="#" title="">Social Media Specialist</a>
                                                                    <a href="#" title="">Advanced Web Analytics</a>
                                                                    <a href="#" title="">Advanced Mobile Marketing</a>
                                                                </span>
                                                                <span class="mega-content-block-second">
                                                                    <a href="#" title="">Advanced Content Marketing</a>
                                                                    <a href="#" title="">Advanced Email Marketing</a>

                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu dropdown-submenu">
                                                    <a href="#">Agile and Scrum</a>
                                                    <i class="fa fa-angle-right"></i>
                                                    <ul class="mega-menu-block list-unstyled dropdown-menu">
                                                        <li>
                                                            <div class="mega-menu-content clearfix">
                                                                <span class="mega-content-block">
                                                                    <a href="#">Certified Scrum Master</a>
                                                                    <a href="#">Certified Scrum Product Owner</a>
                                                                    <a href="#" title="">Certified Scrum Developer</a>
                                                                    <a href="#" title="">SAFe Agilest Certification </a>
                                                                    <a href="#" title="">Project Management Expert</a>
                                                                    <a href="#" title="">Agile Scrum Foundation</a>
                                                                    <a href="#" title="">Agile Scrum Master</a>
                                                                    <a href="#" title="">PMI -Agile Certified Practitioner </a>								
                                                                </span>
                                                                <span class="mega-content-block-second">
                                                                    <img src="/assets/images/megamenu.jpg" alt="" class="img-responsive" />
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu dropdown-submenu">
                                                    <a href="#">Cloud Computing</a>
                                                    <i class="fa fa-angle-right"></i>
                                                    <ul class="mega-menu-block list-unstyled dropdown-menu">
                                                        <li>
                                                            <div class="mega-menu-content clearfix">
                                                                <span class="mega-content-block">
                                                                    <a href="#">AWS Solution Architect Associate</a>
                                                                    <a href="#">Infrastructure Solution 70-533</a>
                                                                    <a href="#" title="">AWS sysops Associate</a>
                                                                    <a href="#" title="">AWS Developer Associate</a>
                                                                    <a href="#" title="">AWS Devops Architect</a>
                                                                    <a href="#" title="">AWS Technical Essential</a>
                                                                    <a href="#" title="">Microsoft Azure Developer Solution Architect</a>
                                                                    <a href="#" title="">Implementing Microsoft Azure</a>															
                                                                </span>
                                                                <span class="mega-content-block-second">
                                                                    <img src="/assets/images/megamenu.jpg" alt="" class="img-responsive" />

                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="mega-menu dropdown-submenu">
                                                    <a href="#">Quality Management</a>
                                                    <i class="fa fa-angle-right"></i>
                                                    <ul class="mega-menu-block list-unstyled dropdown-menu">
                                                        <li>
                                                            <div class="mega-menu-content clearfix">
                                                                <span class="mega-content-block">
                                                                    <a href="#">Total Quality Management</a>
                                                                    <a href="#">Quality Management System</a>
                                                                    <a href="#" title="">Quality Assurance</a>
                                                                    <a href="#" title="">Quality Control</a>
                                                                    <a href="#" title="">Internal Audit ISO 9001-2015</a>
                                                                    <a href="#" title="">Lead Auditor</a>
                                                                    <a href="#" title="">Intro to Six Sigma</a>
                                                                    <a href="SixSigma.html" title="">Lean Six Sigma Green Belt</a>
                                                                    <a href="#" title="">Lean Six Sigma Black Belt</a>
                                                                    <a href="#">Lean Management</a>

                                                                </span>
                                                                <span class="mega-content-block-second">
                                                                    <a href="#">Lean Six Sigma Application in IT</a>
                                                                    <a href="#" title="">Lean Six Sigma in Health Care</a>
                                                                    <a href="#" title="">Certified Tester Foundation</a>
                                                                    <a href="#" title="">Kaizen</a>
                                                                    <a href="#" title="">Safety Management</a>
                                                                    <a href="#" title="">Health and Safety Management</a>
                                                                    <a href="#" title="">Problem Solving Techniques</a>

                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu dropdown-submenu">
                                                    <a href="#">Business Productivity Tools</a>
                                                    <i class="fa fa-angle-right"></i>
                                                    <ul class="mega-menu-block list-unstyled dropdown-menu">
                                                        <li>
                                                            <div class="mega-menu-content clearfix">
                                                                <span class="mega-content-block">
                                                                    <a href="#">Microsoft<sup>®</sup> Excel 2013 Foundation</a>
                                                                    <a href="#" title="">Microsoft<sup>®</sup> Excel 2013 Advanced</a>
                                                                    <a href="#" title="">Microsoft<sup>®</sup>  Project 2013</a>
                                                                    <a href="#" title="">Microsoft<sup>®</sup> Excel 2013 Intermediate</a>
                                                                    <a href="#" title="">Microsoft<sup>®</sup>  Office 2013 Access</a>
                                                                    <a href="#" title="">Microsoft<sup>®</sup>  Office 2013 Outlook</a>
                                                                    <a href="#" title="">Microsoft<sup>®</sup>  Office 2013 PowerPoint</a>
                                                                    <a href="#" title="">Microsoft<sup>®</sup>  Office 2013 Word</a>

                                                                </span>
                                                                <span class="mega-content-block-second">
                                                                    <img src="/assets/images/megamenu.jpg" alt="" class="img-responsive" />

                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li><!-- End Pages -->
                                        <li> <a href="/about-us">About Us</a> </li>
                                        <li> <a href="/accreditation">Accreditation</a> </li>
                                        <li> <a href="#">Blog</a> </li>
                                        <li> <a href="/contact-us">Contact</a> </li><!-- End Contact -->
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
