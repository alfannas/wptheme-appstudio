<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
    </head>

<body <?php body_class();?>>

<header class="sticky-top">
    <!-- <div class="container">
        <?php wp_nav_menu (
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navigation'
            )
        ); ?>
    </div> -->
    <!-- Navigation -->
    <?php $menu_items = basictheme_get_menu_items('top-menu'); ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
        <h1 class="js-scroll-trigger"><?php bloginfo( 'name' ); ?></h1>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
            <?php foreach($menu_items as $item): ?>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
        </div>
    </nav>
    
</header>
