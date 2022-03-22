<?php get_template_part( 'header' ); ?>

    <!-- ################# Slider Starts Here#######################--->
     <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="item">
                <div class="slider-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slider1.jpeg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h2 class="slider-title">Merasa cemas atau stres?</h2>
                                <p class="slider-text hidden-xs">Kami akan membantu Anda menghadapi masalah emosi atau psikologis Anda.</p>
                                <a href="<?php echo home_url('/kontak'); ?>" class="btn btn-success hidden-xs">Kontak Psikolog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slider2.jpeg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h2 class="slider-title">Saatnya mencari bantuan</h2>
                                <p class="slider-text hidden-xs">Ketika Anda merasa tidak mampu menghadapi masalah Anda, maka ini saatnya Anda membutuhkan bantuan profesional untuk membantu Anda.</p>
                                <a href="<?php echo home_url('/kontak'); ?>" class="btn btn-success hidden-xs">Kontak Psikolog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slider3.jpeg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h2 class="slider-title">Temui psikolog kami</h2>
                                <p class="slider-text hidden-xs">Psikolog kami secara professional akan membantu Anda menghadapi permasalahan dan melewati masa-masa sulit Anda.</p>
                                <a href="<?php echo home_url('/daftar-konseling'); ?>" class="btn btn-success hidden-xs">Jadwalkan Sesi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
 	<!-- ################# Our Blog Starts Here#######################--->  	
    <section class="our-blog container-fluid content">
        <div class="container">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="blog-cont">
                            <?php if (have_posts()): while(have_posts()): the_post(); ?>
                                <div class="col-sm-12 mb-4">
                                    <div class="row">
                                    <?php if(has_post_thumbnail()): ?>
                                        <div class="col-sm-4">
                                            <a href="<?php the_permalink() ?>" target="_blank">
                                                <img src="<?php the_post_thumbnail_url('portfolio'); ?>">
                                            </a>
                                        </div>
                                        <div class="col-sm-8">
                                
                                            <h6><a href="<?php the_permalink() ?>"><?php the_title();?></a></h6>
                                            <p><?php the_excerpt();?></p>
                                            <a href="<?php the_permalink() ?>">
                                               Baca Selengkapnya
                                            </a>
                                        </div>
                                    <?php else: ?>
                                        <div class="col-sm-12">
                                            
                                            <h6><a href="<?php the_permalink() ?>"><?php the_title();?></a></h6>
                                            <p><?php the_excerpt();?></p>
                                            <a href="<?php the_permalink() ?>">
                                                Baca Selengkapnya
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                            <?php if (function_exists("pagination")): ?>
                                <div class="container">
                                    <?php pagination($wp_query->max_num_pages); ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>
        </div>
    </section>
  	
  	<!-- ################# Testimonial Starts Here#######################--->

<?php get_template_part( 'footer' ); ?>