<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php wp_title( ' ', true, 'right' ); ?></title>

    <meta name="description" content="Priceshape main page"> <!-- Should have content -->
    <meta name="keywords" content=""> <!-- Should have content -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?> > 
<header id="header">
    <nav class="main-navigation">
        <h1 class="logo ">
            <a href="<?php echo home_url();?>" alt="<?php bloginfo( 'name' ); ?>" class="d-flex align-items-start">
                <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                    echo '<img src="' . esc_url( $logo ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                } else {
                    echo '<img src="'. get_template_directory_uri() .'/assets/img/logo.svg" alt=" logo">';
                }?>
                <div class="logo-title"><?php the_field('title-logo', 'option');?></div>
                <div class="logo-subtitle"><?php the_field('subtitle-logo', 'option');?></div>
            </a>
        </h1>
     
        <div class="main-menu d-flex">
            
            <div class="desktop">
                
                <?php 
                wp_nav_menu(array( 
                    'theme_location' => 'menu-1',
                    'menu_id' => '',
                    'menu_class' => 'links-list',  
                ));
                ?> 

            </div> 

            <div class="header-search">
                <a href="" class="search-icon"></a>
                <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >  
                    <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Search here..." />
                    <input type="submit" id="searchsubmit" value="Search" />
                </form>
            </div>
            

            <label for="mobile-menu" class="mobile-menu-icon">

                <div class="mobile_menu_title">
                    <div class="open"><?php the_field('mobile_menu_open', 'option');?></div>
                    <div class="close"><?php the_field('mobile_menu_close', 'option');?></div>
                    
                </div>
                <div class="span-block">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                
            </label>
        </div> 
        <div class="mobile-menu">
            <?php 
                wp_nav_menu(array( 
                    'theme_location' => 'menu-1',
                    'menu_id' => '',
                    'menu_class' => 'links-list',  
                ));
            ?> 
        </div>
    </nav>
</header>

<main id="main"  class="">

 

