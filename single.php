<?php get_header();?>

<section class="container-fluid content">
    <div class="container">
        <div class="col-sm-12 blog-cont">
  			<div class="row">
  				<div class="col-lg-8 col-md-8 blog-smk">
					<div class="blog-single">
                        <?php if(has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('hd720'); ?>" class="img-fluid mt-3 mb-3" >
                        <?php endif; ?>
                        <h2><?php the_title();?></h2>

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