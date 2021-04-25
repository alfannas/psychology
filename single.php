<?php get_header();?>

<div class="container pb-5" style="margin-top: 8rem;">
    <h1><?php the_title();?></h1>

    <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('hd720'); ?>" class="img-fluid mt-3 mb-3" >
    <?php endif; ?>

    <?php if (have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>

<?php get_footer();?>