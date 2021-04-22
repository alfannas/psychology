<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body>

    <!-- ################# Header Starts Here#######################--->

    <header id="menu-jk">
        
        <nav  class="">
            <div class="container">
                <div class="row nav-ro">
                   <div class="col-lg-3 col-md-4 col-sm-12">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="" height="60">
                       <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                   </div>
                   <?php $menus = get_menu_items('top-menu'); ?>
                   <div id="menu" class="col-lg-7 col-md-8 d-none d-md-block no-padding">
                       <ul>
                            <?php if ($menus): ?>
                            <?php foreach($menus as $item): ?>
                                <li class="nav-item">
                                    <a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
                                </li>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                   </div>
                   <div class="col-sm-2 d-none d-lg-block">
                       <button class="btn btn-success">Book an Appointment</button>
                   </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- ################# Slider Starts Here#######################--->
     <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slider-1.jpg" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="slider-captions">
                                    <h1 class="slider-title">Merasa cemas atau stres?</h1>
                                    <p class="slider-text hidden-xs">We can help you conquer a wide range of psychological and emotional problems.</p>
                                    <a href="#" class="btn btn-success hidden-xs">View All Therapies</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">Saatnya mencari bantuan</h1>
                                <p class="slider-text hidden-xs">We can help you conquer a wide range of psychological and emotional problems.</p>
                                <a href="#" class="btn btn-success hidden-xs">Schedule A Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slider-3.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">Temui psikolog kami</h1>
                                <p class="slider-text hidden-xs">Our psychiatrists are highly skilled to meet your unique needs.</p>
                                <a href="#" class="btn btn-success hidden-xs">Kontak Psikolog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="our-blog container-fluid">
  		<div class="container">
  		<div class="session-title row">
  		    <h2>Layanan</h2>
  		    <p></p>
  		</div>
  			<div class="col-sm-12 blog-cont">
  				<div class="row no-margin">
  					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services/service-1.jpg" alt="">

							<div class="blog-single-det">
							
								<h6>Konseling Online</h6>
								<p>Dimasa pembatasan saat pandemi Covid-19 ini, kami menyediakan layanan konseling psikologis secara online.</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">More Detail</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services/service-2.jpg" alt="">

							<div class="blog-single-det">
								
								<h6>Edukasi Online</h6>
								<p>Meningkatkan pengetahuan masyarakat melalui acara online seperti webinar maupun acara online lain yang lain.</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">More Detail</button>
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services/service-3.jpg" alt="">

							<div class="blog-single-det">
							
								<h6>Kolom Artikel</h6>
								<p>Memberikan perspektif psikologis terhadap hal-hal yang mungkin kita alami sehari-hari melalui kolom artikel yang akan rutin kami berikan.</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">More Detail</button>
								</a>
							</div>
						</div>
					</div>
					
					
					
				
					
					
  				</div>
  			</div>
  			
  		</div>
  	</section>  
  	
  	<!-- ################# Doctors Message Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
                <div class="row">


                    <div class="col-md-6 col-sm-12 doc-img">
                        <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/doctt.png" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 doc-det">
                        <h2>Hello, I’m Doctor Sanjay</h2>
                        <span>Expert Clinical Psychologist in Manhattan</span>

                        <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply text of thetypesetting Ipsum is simply text of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of </p>

                        <h4>Call me on : +123 98 8887</h4>
                    </div>
                </div>
            </div>

        </div>

    </div>

      	<!-- ################# Mission Vision Starts Here#######################--->
  	
  	<div class="mosion-vision">
  	    <div class="container">
  	        <div class="row">
  	            <div class="col-lg-4 col-md-12">
  	                <div class="single-dd">
  	                    <h4>Our Mission</h4>
  	                    <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply text of thetypesetting Ipsum is simply text of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of </p>
  	                    
  	                    
  	                </div>
  	            </div>
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>Our Vision</h4>
  	                    <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of ply text of the Ipsum is simply text of thetypesetting Ipsum is simply text of the stry simply <br>dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of </p>
  	                    
  	                    
  	                </div>
  	            </div>
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>Why Choos Us ?</h4>
  	                    <p>Effective Psychological Therapy with a minimum of 5 years post qualification experience. </p>
  	                    
  	                    <p>Ipsum is simply text of the Lorem Ipsum is simply my text of ply text</p>
  	                    
  	                    <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of ply text of the Ipsum f the Lorem Ipsum is simply my text of ply text </p>
  	                    
  	                    
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</div>
  	
 	<!-- ################# Our Session Starts Here#######################--->  	
  	
  	<section class="sesion-type">
  	    <div class="container">
             <div class="session-title row">
  		    <h2>Our Session Types</h2>
  		    <p>Not the answer you're looking for? Printing and typesetting inLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s Lorem</p>
  		</div>
  	        <div class="row">
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/session/therapy-1.jpg" alt="">
  	                    <p>Individual Therapy</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/session/therapy-2.jpg" alt="">
  	                    <p>Cuple Therapy</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/session/therapy-3.jpg" alt="">
  	                    <p>online Session</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/session/therapy-4.jpg" alt="">
  	                    <p>Group Therapy</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/session/therapy-5.jpg" alt="">
  	                    <p>All Age Group</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess sess-ok">
  	                   <h4>Start Your Session today</h4>
  	                    <p>Take the first step on your journey to feeling better. </p>
  	                    <button class="btn btn-success">Book an Appointment</button>
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</section>
  	
  	<!-- ################# Testimonial Starts Here#######################--->
    

      <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                    Lembar Harapan merupakan sebuah platform berbasis kesehatan mental yang bertujuan untuk memberikan harapan kepada setiap individu untuk dapat bertumbuh dan meraih kebahagiaan dan kesejahteraan melalui perubahan perilaku, emosi, atau kognitif ke arah yang lebih baik. Lembar Harapan menjadi sumber informasi, memberikan edukasi, dan layanan konseling yang sesuai dengan kebutuhan setiap individu.
                    </p>
                
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#/about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#/gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        Phone/WA: 081237101636 <br>
                        Email: <a href="mailto:info@lembarharapan.id" class="">info@lembarharapan.id</a><br>
                        Web: <a href="#" class="">lembarharapan.id</a>
                    </address>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                2021 &copy; All Rights Reserved. LembarHarapan.id</a>
                
                <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>
    
        <?php wp_footer(); ?>
    </body>

</html>