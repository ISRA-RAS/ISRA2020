<?php 
date_default_timezone_set('Asia/Kolkata');
$msg = "";
if(isset($_GET['msg']) && $_GET['msg'] == 'success') { $msg = 'Thank you for your interest....!'; }

if(isset($_POST['submit'])) {
   
    $name               = $_POST['name'];
    $email              = $_POST['email'];
    $mobile             = $_POST['mobile'];
    $location           = $_POST['location'];
    $institution        = $_POST['institution'];
    $ieeeRegNo = $_POST['ieeeRegNo'];
    $createdDate        = date("d-m-Y h:i:s A");
            
    $email_message = "<html>
    <body>
    <h3>Symposium for Robotics and Allied Fields in IEEE Madras Section</h3>
    <b>Enquiry Details  : </b>
    <p>Name                  : $name</p>
    <p>Email                 : $email</p>
    <p>Mobile                : $mobile</p>
    <p>Location              : $location</p>
    <p>Institution           : $institution</p>
    <p>IEEE Registration No. : $ieeeRegNo</p>
    </body>
    </html>";
	$from      = "ISRA 2020<noreply@ilabs.link>";
	$to        = 'siva.shankar@ieee.org,al.muthu@ieee.org'; //'sainarmatha26@gmail.com,mnarmatha@infinitusdata.com'; 
	$subject   = "Enquiry from ISRA 2020 Registration Form";
	$headers   = "MIME-Version: 1.0\r\n";
	$headers   .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers   .= "To:$to \r\n";
	//$headers .= "Cc:$cc \r\n";
	$headers   .= "From: $from\r\n".'X-Mailer: PHP/'.phpversion();
    mail($to, $subject, $email_message, $headers);
    
    header("location:index.php?msg=success#msg"); 	 
}

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ISRA 2020 | Symposium for Robotics and Allied Fields in IEEE Madras Section</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
        <link rel="stylesheet" href="css/dripicons.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        <!-- header -->
        <header id="home" class="header-area">
            <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu pt-1 pb-1">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href="index.php"><img src="img/logo/iras-logo-100h.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-9">
                                <div class="responsive"><i class="icon dripicons-align-right"></i></div>
                                <div class="main-menu text-right text-xl-center">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active has-sub"><a href="#home">Home</a></li>
                                            <li class="has-sub"><a href="#about">About</a></li>
                                            <li class="has-sub"><a href="#speakers">Speakers</a></li>
                                            <li class="has-sub"><a href="#price">Price</a></li>
                                            <li class="has-sub"><a href="#sponsors">Sponsors</a></li>
                                            <li class="has-sub"><a href="#contact">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 text-right d-none d-xl-block">
                                <div class="header-btn second-header-btn">
                                     <a href="#contact" class="btn"><i class="far fa-ticket-alt"></i> Register Now!!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
        <!-- main-area -->
        <main>
            <!-- slider-area -->
            <section id="parallax" class="slider-area slider-bg second-slider-bg d-flex align-items-center justify-content-center fix" style="background-image:url(img/bg/header1_bg_img.jpg)">
                <div class="slider-shape ss-one layer" data-depth="0.10"><img src="img/shape/slider_shape01.png" alt="shape"></div>
                <div class="slider-shape ss-two layer" data-depth="0.30"><img src="img/shape/slider_shape02.png" alt="shape"></div>
                <div class="slider-shape ss-three layer" data-depth="0.40"><img src="img/shape/slider_shape03.png" alt="shape"></div>
                <div class="slider-shape ss-four layer" data-depth="0.60"><img src="img/shape/slider_shape04.png" alt="shape"></div>
                <div class="slider-shape ss-five layer" data-depth="0.20"><img src="img/shape/slider_shape05.png" alt="shape"></div>
                <div class="slider-shape ss-six layer" data-depth="0.15"><img src="img/shape/slider_shape06.png" alt="shape"></div>
                <div class="slider-active">
                    <div class="single-slider">
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <div class="slider-content second-slider-content">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s">
											<li><i class="fas fa-map-marker-alt"></i> Vellore Institute of Technology, Chennai, India</li>
											<li><i class="far fa-clock"></i>  27th - 28th March 2020</li>
										</ul>
                                        <h2 data-animation="fadeInUp animated" data-delay=".4s">Symposium for Robotics <span>and Allied Fields</span></h2>
										<div countdown class="conterdown wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s" data-date="Mar 27 2020 00:00:00">
										 <div class="timer">
											<div class="timer-outer bdr1">
											   <span class="days" data-days>0</span>
											   <div class="smalltext">Days</div>
											   <div class="value-bar"></div>
											</div>
											<div class="timer-outer bdr2">
											   <span class="hours" data-hours>0</span>
											   <div class="smalltext">Hours</div>
											</div>
											<div class="timer-outer bdr3">
											   <span class="minutes" data-minutes>0</span>
											   <div class="smalltext">Minutes</div>
											</div>
											<div class="timer-outer bdr4">
											   <span class="seconds" data-seconds>0</span>
											   <div class="smalltext">Seconds</div>
											</div>
											<p id="time-up"></p>
										 </div>
										 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->
            <!-- about-area -->
            <section id="about" class="about-area about-p pt-120 pb-50 p-relative" style="background: #f6fbff;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="about-content s-about-content pl-30">
                                <div class="about-title second-atitle">
                                    <div class="text-outline">
                                        <span>About</span>
                                    </div>
                                    <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">ABOUT THE SOCIETY</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <p>The IEEE Robotics and Automation Society's objectives are scientific, literary and educational in character. The Society strives for the advancement of the theory and practice of robotics and automation engineering and science and of the allied arts and sciences, and for the maintenance of high professional standards among its members, all in consonance with the Constitution and Bylaws of the IEEE and with special attention to such aims within the Field of Interest of the Society.</p>
                                    </div>
                                    <div class="col-md-5"><img src="img/logo/isra2020-logo-320px.png" class="img-thumbnail p-4" alt="ISRA 2020"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"> 
                                        <p>Our Mission is to provide an environment for students to grow and nurture their talents under the efficient guidance of reputed IEEE and industrial experts and keep the students updated with the latest trends and technologies and promote their researches and projects worldwide, with the Vision of being the most recognized and respected global organization in Robotics and Automation.</p>
                                        <p>RAS endeavours to advance innovation, education, and fundamental and applied research in robotics and automation. Robotics research emphasizes intelligence and adaptability to cope with unstructured environments. Automation research emphasizes efficiency, productivity, quality, and reliability, bringing into focus the systems that operate autonomously, often in explicitly structured environments over extended periods.</p>
                                        <p>The Society fosters the blooming of close cooperation and exchange of scientific and technological knowledge in Robotics and Automation that benefits members, the profession and humanity. It holds meetings for the presentation of papers, sponsors special technical publications, and through its committees studies and provides for the needs of its members and affiliates.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
            <!-- why-us-area -->
            <section id="about" class="about-area about-p pt-120 pb-120 p-relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                         <div class="feature-box wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
							<div class="crl mb-30">
								<img src="img/icon_1.png" alt="icon">
								<span>1</span>
							</div>
							<h4>Networking</h4>
						 </div>
						   <div class="feature-box wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
							<div class="crl mb-30">
								<img src="img/icon_2.png" alt="icon">
								<span>2</span>
							</div>
							<h4>New Speaker</h4>
						 </div>
						   <div class="feature-box wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
							<div class="crl mb-30">
								<img src="img/icon_3.png" alt="icon">
								<span>3</span>
							</div>
							<h4>Food Court</h4>
						 </div>
						   <div class="feature-box wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
							<div class="crl mb-30">
								<img src="img/icon_4.png" alt="icon">
								<span>4</span>
							</div>
							<h4>Have Fun</h4>
						 </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content s-about-content pl-30">
                                <div class="about-title second-atitle">
								<div class="text-outline wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">
										<span>Event</span>
									</div>
                                    <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".3s">Why Join ISRA 2020</span>
                                    <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".4s">Why You Should Join Event</h2>
                                    <h5 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".5s"><span></span>Shift your perspective on Robotics and Automation</h5>
                                </div>
								<div class="wow fadeInDown animated" data-animation="fadeInUp animated" data-delay=".2s">
									<p>We, at IEEE Robotics and Automation Society Student Chapter, Vellore Institute of Technology, Chennai are driven towards providing gateways for students to excel in our field with efforts that are be salubrious to the rest of the world. In order to achieve that, students with an inclination need to be identified at the grassroots level and groomed accordingly, with the best possible guidance from stalwarts of the industry, which would enable them to indulge in nifty research projects that are worthy of commendation among the global fraternity.</p>
                                    <p>To that end, we have organized an International-level Mega-event titled “International Symposium on Robotics and Automation” - ISRA 2020, on the 27th and 28th of March. This event is poised to feature a multitude of breakthroughs in the area of Robotics and Automation in our country and is primarily intended for the benefit of students.</p>
							   </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <p>The Symposium comprises two parts, namely Paper Presentation and Idea Presentation. In our quest to leave no stone unturned, both sessions have been designed to incorporate participation from all categories of students right from the schooling level to the  post-graduation level. The topics for the presentation range from biomedical robotics to aerial and terrestrial guided vehicles, encompassing all critical realms of research and development including, but not restricted to intelligent robotics, security applications and mechanisms like mobile manipulators. Also being dealt with, will be entries pertaining to the 4th wave of industrialization such as the internet of things, smart manufacturing and cognitive computing among others.</p>
                            <p>The Paper Presentation will function as an excellent platform for young, ambitious research students who have put their acquired knowledge and skill to the fore and come forward to showcase their enterprising work. Exemplary presentations have an opportunity to get recognized profusely by virtue of the superlative reach of the event.</p>
                            <p>The Idea Presentation is chiefly conducted to cater to the multifarious desiderata of budding research aspirants who are at the outset of their professional careers, but nevertheless, would feature novel and path-breaking projects from all students. An audacious idea is the spark that ignites the wildfire of technological innovation, and the audience are bound to witness many an idea of said nature during the course of this session.</p>
                            <p>The Symposium would be embellished with an abundance of insightful interactions by eminent luminaries from the field of RAS and beyond, which would enrich the students with invaluable information and cognizance that would prove fruitful in the quests we wish our students to undertake and hope to be prepared for on the back of it.</p>
                           <a href="#contact" class="btn mt-20"><i class="far fa-ticket-alt"></i> Register Now!!</a>
                       </div>
                    </div>
                </div>
            </section>
            <!-- why-us-area-end -->
			<!-- team-area -->
            <section id="speakers" class="team-area p-relative pt-120 pb-120 fix">
                <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><h2>Speakers</h2></div>
				<div class="circal1 item-zoom-inout"></div>
				<div class="circal2 item-zoom-inout"></div>
				<div class="circal3 item-zoom-inout"></div>
				<div class="circal4 item-zoom-inout"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-80">
                                <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Rockstars</span>
                                <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".4s">Event Speakers</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated" data-delay=".2s">
                              <div class="single-team text-center pt-50  pb-50 mb-30">
                                <div class="team-thumb">
                                    <img src="img/speaker_1.png" alt="img">
                                </div>
                                <div class="team-info">
                                    <h5>Siva Sankar</h5>
                                    <p>+91-9488468942</p>
                                    <div class="team-social pt-15 pb-15 mb-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
									<span>siva.shankar@ieee.org</span>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated" data-delay=".2s">
                              <div class="single-team text-center pt-50  pb-50 mb-30">
                                <div class="team-thumb">
                                   <img src="img/speaker_2.png" alt="img">
                                </div>
                                <div class="team-info">
                                    <h5>AL Muthuveerappan</h5>
                                    <p>+91-9940460841</p>
                                   <div class="team-social pt-15 pb-15 mb-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
									 <span>al.muthu@ieee.org</span>
                                </div>
                            </div>
                        </div>
                          
                    </div>
                </div>
            </section>
            <!-- team-area-end -->
             <!-- counter-area -->
            <div class="counter-area pt-120 pb-120" style="background-image:url(img/bg/counter_bg.jpg);background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                           <div class="about-title second-atitle">
                                    <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Why Join ISRA 2020</span>
                                    <h1 class="wow fadeInUp animated text-white" data-animation="fadeInUp animated" data-delay=".2s">Join us at International Symposium on Robotics and Automation.</h1>
                                    <h5 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Shift your perspective on Robotics and Automation</h5>
                                </div>
								<ul class="wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
									<li>
										<img src="img/calendar.png" alt="img">
										<span>Join us on 27th - 28th March 2020, Vellore Institute of Technology, Chennai, India.</span>
									</li>
									<li>
										<img src="img/comments.png" alt="img">
										<span>This event is poised to feature a multitude of breakthroughs in the area of Robotics and Automation in our country and is primarily intended for the benefit of students.</span>
									</li>
								</ul>
                        </div>
                        <div class="col-lg-6 col-sm-6">
						 <div class="single-counter text-center mb-30 cr1">
                                <div class="counter p-relative">
                                    <span class="count">30</span>
                                    <small>+</small>
                                </div>
                                <p>Sponsors</p>
                            </div>
                            <div class="single-counter text-center mb-30 cr2">
                                <div class="counter p-relative">
                                    <span class="count">5000</span>
                                    <small>+</small>
                                </div>
                                <p>Happy People</p>
                            </div>
							<div class="single-counter text-center mb-30 cr3">
                                <div class="counter p-relative">
                                    <span class="count">20</span>
                                    <small>+</small>
                                </div>
                                <p>Cool Speakers</p>
                            </div>
							<div class="cr4"></div>
							<div class="cr5"></div>
							<div class="cr6"></div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- counter-area-end -->
			
    		<!-- pricing-area -->
            <section id="price" class="pricing-area pt-113 pb-90 fix" style="background-image:url(img/bg/pricing_bg.jpg);background-size: cover;">
			<div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><h2>Plans</h2></div>
			 <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-80">
                                <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Our plans</span>
                                <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".4s">Get Your Ticket</h2>
                            </div>
                        </div>
                    </div>
                <div class="container">

                    <div class="row">
                        
                         <div class="col-lg-2 col-md-6"></div>
                         
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-box text-center mb-30 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="pricing-head">
                                    <h4>IEEE Members</h4></h4>
                                    <div class="price-count mb-30">
                                        <h2><small>₹</small>600</h2>
                                    </div>
                                </div>
                                <div class="pricing-body mb-40">
                                    <p>A brief description or details about the plan.</p>
									  <strong>Fee inclusive of taxes applicable</strong>
									  <div class="bar">
										<span style="width:50%;"></span>
									  </div>
									    <div class="bar-no">350/500</div>
									<div class="pricing-btn mt-40">
										<a href="#contact" class="btn"><i class="far fa-ticket-alt"></i> Buy Ticket</a>
									</div>
                                </div>

                            </div>
                        </div>
       <!--                 <div class="col-lg-4 col-md-6">-->
							<!--<div class="pricing-box active text-center mb-30 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">-->
							<!--	<div class="tag">Exclusive author</div>-->
       <!--                         <div class="pricing-head">-->
       <!--                             <h4>Gold</h4>-->
       <!--                             <div class="price-count mb-30">-->
       <!--                                 <h2><small>₹</small>1999</h2>-->
       <!--                             </div>-->
       <!--                         </div>-->
       <!--                         <div class="pricing-body mb-40">-->
       <!--                            <p>A brief description or details about the plan.</p>-->
							<!--		  <strong>Prices exclude 18% GST</strong>-->
							<!--		  <div class="bar">-->
							<!--			<span style="width:50%;"></span>-->
							<!--		  </div>-->
							<!--		  <div class="bar-no">350/500</div>-->
							<!--		<div class="pricing-btn mt-40">-->
							<!--			<a href="#contact" class="btn"><i class="far fa-ticket-alt"></i> Buy Ticket</a>-->
							<!--		</div>-->
       <!--                         </div>-->

       <!--                     </div>-->
       <!--                 </div>-->
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-box text-center mb-30 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="pricing-head">
                                    <h4>IEEE Non Members</h4>
                                    <div class="price-count mb-30">
                                        <h2><small>₹</small>750</h2>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                   <p>A brief description or details about the plan.</p>
								   <strong>Fee inclusive of taxes applicable</strong>
								   <div class="bar">
										<span style="width:50%;"></span>
									  </div>
									   <div class="bar-no">350/500</div>
									<div class="pricing-btn mt-40">
										<a href="#contact" class="btn"><i class="far fa-ticket-alt"></i> Buy Ticket</a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- pricing-area-end -->
            <!-- Sponsors-area -->
            <section id="sponsors" class="sponsors services-bg pt-113 fix">
                <div class="container">
                    <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><h2>Sponsors</h2></div>
			 <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="section-title mb-80">
                                <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Sponsors</span>
                                <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Happy Sponsors</h2>
                            </div>
                        </div>
						<div class="col-xl-4 col-lg-4 text-right">
                            <a href="#contact" class="btn wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s"><i class="far fa-ticket-alt"></i> Buy Ticket</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center">
                            <ul class="wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
								<li><a href="#"><img src="img/sponsors_1.png" alt="img"></a></li>
								<li><a href="#"><img src="img/sponsors_2.png" alt="img"></a></li>
								<li><a href="#"><img src="img/sponsors_3.png" alt="img"></a></li>
								<li><a href="#"><img src="img/sponsors_4.png" alt="img"></a></li>
								<li><a href="#"><img src="img/sponsors_5.png" alt="img"></a></li>
								<li><a href="#"><img src="img/sponsors_6.png" alt="img"></a></li>
								<li><a href="#"><img src="img/sponsors_7.png" alt="img"></a></li>
								<li><a href="#"><img src="img/sponsors_8.png" alt="img"></a></li>
								<li><a href="#"><img src="img/sponsors_9.png" alt="img"></a></li>
							</ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Sponsors-area-end -->

            <!-- contact-area start -->
            <section id="contact" class="pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="section-title text-center mb-80">
                                <span>get in touch</span>
                                <h2>Get Your Updates</h2>
                            </div>
                        </div>
                    </div>
                    
                    <div id="msg"><?php if($msg != '' ) { ?><p class="text-danger" style="font-size:18px;text-align: center;"><?php echo $msg; ?></p><?php } ?></div>
                    
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-wrapper">
                                <form action="index.php" id="" name="" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-name c-icon">
                                                <i class="fas fa-user"></i>
                                                <input id="name" name="name" required pattern="[A-Za-z .]+" placeholder="Your name :" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-email c-icon">
                                                <i class="fas fa-envelope"></i>
                                                <input id="email" name="email" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="info@example.com :" type="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-phone c-icon">
                                                <i class="fas fa-phone"></i>
                                                <input id="mobile" name="mobile" required pattern="[0-9]+" placeholder="your mobile number :" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-phone c-icon">
                                                <i class="fas fa-map-marker"></i>
                                                <input id="location" name="location"  placeholder="your Location :" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-phone c-icon">
                                                <i class="fas fa-graduation-cap"></i>
                                                <input id="institution" name="institution"  placeholder="your Institution :" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-phone c-icon">
                                                <i class="fas fa-pencil"></i>
                                                <input id="ieeeRegNo" name="ieeeRegNo"  placeholder="IEEE Registration No. :" type="text">
                                            </div>
                                        </div>
                                        
                                        <!--<div class="col-lg-12 mb-30">-->
                                        <!--    <div class="contact-message c-icon">-->
                                        <!--        <i class="fas fa-pencil-alt"></i>-->
                                        <!--        <textarea id="message" name="message" cols="30" rows="10" placeholder="your message :"></textarea>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="col-lg-12">
                                            <div class="contact-butoon text-center mt-20">
                                                <button class="btn" type="submit" id="submit" name="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area end -->

             <!-- contact-area -->
            <div class="contact-area pt-120 pb-90" style="background-image:url(img/map.png);background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="about-title second-atitle">                          
                                <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Contact</span>
                                <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Get Direction to the Event Hall</h2>
                                <img class="rounded mx-auto d-block pb-4" src="img/logo/vit-logo.jpg" alt="vit logo">
                            </div>
                            
                            <div class="feature-box text-left wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <h5>Venue Location</h5>
                                    <p>Vellore Institute of Technology,<br>Vandalur - Kelambakkam Road,<br>Chennai, Tamil Nadu - 600 127.</p>
                                </div>
                            </div>
                            <div class="feature-box text-left wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="icon">
                                    <i class="far fa-ticket-alt"></i>
                                </div>
                                <div class="content">
                                    <h5>Contact Details</h5>
                                    <p>Name: Mr. Siva Sankar<br>Phone: +91-9488468942<br>Email: siva.shankar@ieee.org</p>
                                </div>
                            </div>
                            <div class="feature-box text-left wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="icon">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h5>Important Phone Numbers</h5>
                                    <p>+91-9488468942<br>+91-9940460841</p>
                                </div>
                            </div>
                            <div class="feature-box text-left wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="icon">
                                    <i class="fal fa-home"></i>
                                </div>
                                <div class="content">
                                    <h5>Programme Details</h5>
                                    <p>Name: Mr. AL Muthuveerappan<br>Phone: +91-9940460841<br>Email: al.muthu@ieee.org</p>
                                </div>
                            </div>
                            <div class="feature-box text-left wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="icon">
                                    <i class="fal fa-globe"></i>
                                </div>
                                <div class="content">
                                    <h5>Booking Website</h5>
                                    <p>www.isra2020.com</p>
                                </div>
                            </div>
                        
                        </div>
                       <div class="col-lg-6 col-sm-12">
                            <iframe style="height: 600px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15560.163142953666!2d80.1534283!3d12.840641!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x944b42131b757d2d!2sVIT%20Chennai!5e0!3m2!1sen!2sin!4v1576072451415!5m2!1sen!2sin" width="600" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                                             
                    </div>
                </div>
            </div>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->
        <!-- footer -->
        <footer class="footer-bg footer-p" style="background-image:url(img/bg/footer_bg_img.jpg);background-size: cover;">

            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-12 col-lg-12 col-sm-12 text-center">
                            <div class="footer-widget pt-120 mb-30">
                                <div class="logo mb-35">
                                    <a href="#"><img src="img/logo/iras-logo-100h.png" alt="logo"></a>
                                </div>
                                <div class="footer-text mb-20">
                                    <p>ISRA 2020 - Biggest Symposium for Robotics and Allied Fields in IEEE Madras Section</p>
                                    <p>27th - 28th March 2020, Vellore Institute of Technology, Chennai, India.</p>
                                </div>
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="copyright-wrap pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-text text-center">
								<div class="footer-link">
                                    <ul>
                                        <li><a href="#home">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#speakers">Speakers</a></li>
                                        <li><a href="#price">Price</a></li>
                                        <li><a href="#sponsors">Sponsors</a></li>
                                        <li><a href="#contact">Contact Us</a></li>
                                    </ul>
                                    <div class="text-center mt-3">
                                        <p>Copyright &copy; 2019-20. IEEE Robotics &amp; Automation Society - VITC Student Chapter. All Rights Reserved.  | Powered by <u><a class="text-white" href="http://www.infinitusdata.com" target="_blank">Infinitus Data Logic Pvt Ltd</a></u></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->

		<!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/one-page-nav-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/paroller.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/element-in-view.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
