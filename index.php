<?php get_template_part( 'header' ); ?>

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
                                    <p class="slider-text hidden-xs">Kami akan membantu Anda menghadapi masalah emosi atau psikologis Anda.</p>
                                    <a href="#" class="btn btn-success hidden-xs">Kontak Psikolog</a>
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
                                <p class="slider-text hidden-xs">Ketika Anda merasa tidak mampu menghadapi masalah Anda, maka ini saatnya Anda membutuhkan bantuan professional untuk membantu Anda.</p>
                                <a href="#" class="btn btn-success hidden-xs">Kontak Psikolog</a>
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
                                <p class="slider-text hidden-xs">Psikolog kami secara professional akan membantu Anda menghadapi permasalahan dan melewati masa-masa sulit Anda.</p>
                                <a href="#" class="btn btn-success hidden-xs">Jadwalkan Sesi</a>
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
                <p>Kami melayani berbagai layanan psikologis</p>
  		    </div>
  			<div class="col-sm-12 blog-cont">
  				<div class="row no-margin">
  					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services/service-1.jpg" alt=""> -->

							<div class="blog-single-plain">
							
								<h6>Konseling Tatap Muka</h6>
								<p>Pada masa pandemic ini, layanan ini belum tersedia. Namun di masa mendatang, kami menyediakan layanan konseling professional secara tatap muka.</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">Lihat Detail</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services/service-2.jpg" alt=""> -->

                            <div class="blog-single-plain">
								
								<h6>Konseling Online</h6>
								<p>Kami menyediakan layanan konseling online untuk membantu Anda memenuhi kebutuhan psikologis Anda di masa pandemic Covid-19.</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">Lihat Detail</button>
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services/service-3.jpg" alt=""> -->

                            <div class="blog-single-plain">
							
								<h6>Seminar dan Pelatihan</h6>
								<p>Kami menyediakan layanan seminar dan pelatihan secara online untuk meningkatkan wawasan masyarakat mengenai isu-isu psikologis dan kesehatan mental.</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">Lihat Detail</button>
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
            <div class="session-title row">
  		    <h2>Tim Kami</h2>
  		    <p></p>
              <br><br><br>
  		</div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 doc-img">
                        <!-- <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/doctt.png" alt=""> -->
                    </div>
                    <div class="col-md-6 col-sm-12 doc-det" style="height: 200px;">
                        
                        
                    </div>
                </div>
            </div>

        </div>

    </div>
  	
 	<!-- ################# Our Blog Starts Here#######################--->  	
  	
    <section class="our-blog container-fluid">
  		<div class="container">
            <div class="session-title row">
                <h2>Artikel</h2>
                <p>Artikel atau blog terbaru</p>
  		    </div>
  			<div class="col-sm-12 blog-cont">
  				<div class="row no-margin">
                    <?php if (have_posts()): while(have_posts()): the_post(); ?>
                        <div class="col-sm-4 blog-smk">
                            <div class="blog-single">
                                
                                <?php if(has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink() ?>" target="_blank">
                                        <img src="<?php the_post_thumbnail_url('portfolio'); ?>">
                                    </a>
                                    <div class="blog-single-det">
                                <?php else: ?>
                                    <div class="blog-single-plain">
                                <?php endif; ?>

                                
                                    <span><?php the_date("d M Y");?></span>
                                    <h6><?php the_title();?></h6>
                                    <p><?php the_excerpt();?></p>
                                    <a href="<?php the_permalink() ?>">
                                        <button class="btn btn-success btn-sm">Lihat Detail</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
					
  				</div>
  			</div>
  			
  		</div>
  	</section> 
  	
  	<!-- ################# Testimonial Starts Here#######################--->

<?php get_template_part( 'footer' ); ?>