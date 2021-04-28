<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keyword" content="psikologi, harapan, bunuh diri, cemas, gelisah, stress">
    <?php wp_head(); ?>

    <?php if(is_front_page()):?>
        <title><?php bloginfo('name');?></title>
        <meta name="description" content="Lembar Harapan merupakan sebuah platform berbasis kesehatan mental yang bertujuan untuk memberikan harapan kepada setiap individu untuk dapat bertumbuh dan meraih kebahagiaan.">
    <?php else: ?>
        <title><?php echo get_the_title() . " - " . get_bloginfo('name');?></title>
        <?php if(have_posts()):?>
            <meta name="description" content="<?php the_excerpt(); ?>">
        <?php endif; ?>
    <?php endif; ?>
</head>

<body>

    <!-- ################# Header Starts Here#######################--->

    <header id="menu-jk">
        
        <nav  class="">
            <div class="container">
                <div class="row nav-ro">
                   <div class="col-lg-3 col-md-4 col-sm-12">
                       <a href="<?php echo home_url(); ?>">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="" height="60">
                       </a>
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
                       <button class="btn btn-success">Daftar Konseling</button>
                   </div>
                </div>
            </div>
        </nav>
    </header>