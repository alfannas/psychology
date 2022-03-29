<?php /* Template Name: Page Artikel */ ?>

<?php get_header();?>

<?php //$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>1)); ?>
 
<?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'         => 'post',
        'post_status'       => 'publish',
        'posts_per_page'    => 9,
        'paged'             => $paged
    );

    $wp_query = new WP_Query( $args ); 
?>
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
                <?php if ( have_posts() ) : while(have_posts()): the_post();?>
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
                                <h6><a href="<?php the_permalink() ?>"><?php the_title();?></a></h6>
                                <p><?php the_excerpt();?></p>
                                <a href="<?php the_permalink() ?>">
                                    <button class="btn btn-success btn-sm">Lihat Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                

                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

                
            </div>

            <?php if (function_exists("pagination")): ?>
                <div class="container">
                    <?php pagination($wp_query->max_num_pages); ?>
                </div>
            <?php endif; ?>
            
            <?php wp_reset_postdata(); ?>
        </div>

        
        
        
    </div>
</section>

<?php get_footer();?>