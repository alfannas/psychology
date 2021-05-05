<?php get_header();?>

<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Artikel</h2>
            <ul>
                <li> <a href="<?php echo home_url();?>"><i class="fas fa-home"></i>Beranda</a></li>
                <li> <a href="<?php echo home_url('/artikel');?>"><i class="fas fa-angle-double-right"></i>Artikel</a></li>
                <li><i class="fas fa-angle-double-right"></i><?php the_title();?></li>
            </ul>
        </div>
    </div>
</div>
<!-- ######## Page  Title End ####### -->

<section class="our-blog container-fluid content">
    <div class="container">
        <div class="col-sm-12">
  			<div class="row">
  				<div class="col-lg-8 col-md-8 blog-smk">
					<div class="blog-cont">
                        <h2><?php the_title();?></h2>

                        <?php if(has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('hd720'); ?>" class="img-fluid mt-3 mb-3" >
                        <?php endif; ?>

                        <?php if (have_posts()): while(have_posts()): the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>