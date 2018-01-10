@extends('home::layouts.master')
@section('title','Contact Us')
@section('content')

<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Contact</h1>
					<ul class="list-unstyled">
						<li><a href="#">Home</a></li>
						<li class="active">Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</section><!-- Ends: .page-header -->
	
	<!--============================
		Contact Content
	=============================-->
	<section class="contact-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 contact-three-header">
					<h2>Get In Touch With Us</h2>
				</div>
				<div class="col-sm-12 contact-three-info">
					<ul class="list-unstyled row">
						<li class="col-sm-4">
							<span class="icon"><i class="fa fa-phone"></i></span>
							<span>Phone:  +2034852989</span>
							<span>Phone:  +91 805 002 1515</span>
							<span>Phone:  +65 94555425</span>
						</li>
						<li class="col-sm-4">
							<span class="icon"><i class="fa fa-envelope"></i></span>
							<span>info@myedulogy.com</span>
							<span>www.myedulogy.com</span>
						</li>
						<li class="col-sm-4">
							<span class="icon"><i class="fa fa-map-marker"></i></span>
							<span>USA:181 Castle Dr, Stratford, CT 06614</span>
	<span>INDIA:152, 20th Cross, 17th Main, Sector 3, HSR Layout, Bangalore 560102.</span>
<span>SINGAPORE:20,Maxwell Road #09-17 Maxwell House Singapore 069113</span>
						</li>
					</ul>
				</div><!-- Ends: .contact-three-info -->
				<div class="col-sm-12">
					<div class="contact-two-bottom">
						<div class="row">
							<div class="col-sm-12">
								<h3>Write Us</h3>
								<form  id="ajax-contact" method="post" action="http://ecologytheme.com/theme/edulight/send.php">
									<div class="form-group row">
										<div class="col-sm-6">
											<input type="text" placeholder="Name *">
										</div>
										<div class="col-sm-6">
											<input type="email" placeholder="Email *">
										</div>
										<div class="col-sm-12">
											<textarea placeholder="Message *"></textarea>
										</div>
										<div class="col-sm-12">
											<button type="submit">Send Message</button>
										</div>
									</div>
									<div id="form-messages"></div>
								</form>
							</div><!-- Ends: .col-sm-8 -->
						</div>
					</div><!-- Ends: .contact-two-bottom -->
				</div><!-- Ends: .col-sm-12 -->
			</div>
		</div>
	</section><!-- Ends: .contact-wrapper -->

@stop