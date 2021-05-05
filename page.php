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
    <div class="blog-cont container">
        <?php if (have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer();?>