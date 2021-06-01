<?php /* Template Name: Page Layanan */ ?>
<?php get_header();?>

<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2><?php the_title();?></h2>
            <ul>
                <li> <a href="<?php echo home_url();?>"><i class="fas fa-home"></i>Beranda</a></li>
                <li><i class="fas fa-angle-double-right"></i><?php the_title();?></li>
            </ul>
        </div>
    </div>
</div>
<!-- ######## Page  Title End ####### -->

<section class="our-blog container-fluid">
    <div class="container">
        <div class="col-sm-12 blog-cont">
            <div class="row no-margin">
                <div class="col-lg-4 col-md-6 blog-smk">
                    <div class="blog-single">

                            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services/service-1.jpg" alt=""> -->

                        <div class="blog-single-plain">
                        
                            <h6>Konseling Tatap Muka</h6>
                            <p>Pada masa pandemi ini, layanan ini belum tersedia. Namun di masa mendatang, kami menyediakan layanan konseling secara tatap muka.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 blog-smk">
                    <div class="blog-single">

                            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services/service-2.jpg" alt=""> -->

                        <div class="blog-single-plain">
                            
                            <h6>Konseling Online</h6>
                            <p>Kami menyediakan layanan konseling online untuk membantu Anda memenuhi kebutuhan psikologis Anda di masa pandemi Covid-19.</p>
                            <a href="<?php echo home_url('daftar-konseling');?>">
                                <button class="btn btn-success btn-sm">Daftar Konseling</button>
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
                            
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        
    </div>
</section>  

<?php get_footer();?>