<?php
   /**
    * The header for our theme
    *
    * This is the template that displays all of the <head> section and everything up until <div id="content">
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package Simple_Calendar_Theme
    */
   
   ?>
<!doctype html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="https://gmpg.org/xfn/11">
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
      <?php wp_body_open(); ?>
      <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'simple-calendar' ); ?></a>
      <?php
         $header = 'demo';
         if($header == 'production'){ ?>
      <header id="masthead" class="sc_animate_header site-header main_header">
         <div class="header_wrapper">
            <div class="site-branding sc_logo">
               <?php
                  the_custom_logo();
                  if ( is_front_page() && is_home() ) :
                  	?>
               <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
               <?php
                  else :
                  	?>
               <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
               <?php
                  endif;
                  $simple_calendar_description = get_bloginfo( 'description', 'display' );
                  if ( $simple_calendar_description || is_customize_preview() ) :
                  	?>
               <p class="site-description"><?php echo $simple_calendar_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
               <?php endif; ?>
            </div>
            <!-- .site-branding -->
            <nav id="site-navigation" class="main-navigation">
               <?php
                  wp_nav_menu(
                  	array(
                  		'theme_location' => 'menu-1',
                  		'menu_id'        => 'primary-menu',
                  	)
                  );
                  ?>
            </nav>
            <!-- #site-navigation -->
            <div class="toggle">
               <div class="menu-bar1 bar"></div>
               <div class="menu-bar2 bar"></div>
               <div class="menu-bar3 bar"></div>
            </div>
         </div>
      </header>
      <!-- #masthead -->
      <?php } else {?>
      <header id="masthead" class="demo_sc_main_header">
         <div class="header_wrapper">
            <div class="site-branding demo_sc_logo">
               <?php
                  the_custom_logo();
                  if ( is_front_page() && is_home() ) :
                  	?>
               <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
               <?php
                  else :
                  	?>
               <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
               <?php
                  endif;
                  $simple_calendar_description = get_bloginfo( 'description', 'display' );
                  if ( $simple_calendar_description || is_customize_preview() ) :
                  	?>
               <p class="site-description"><?php echo $simple_calendar_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
               <?php endif; ?>
            </div>
            <!-- .site-branding -->
            <nav id="site-navigation" class="main-navigation demo_sc_nav">
               <?php
                  wp_nav_menu(
                  	array(
                  		'theme_location' => 'menu-1',
                  		'menu_id'        => 'primary-menu',
                  	)
                  );
                  ?>
            </nav>
            <!-- #site-navigation -->
            <div class="demo_sc_toggle">
               <div class="menu-bar1 bar"></div>
               <div class="menu-bar2 bar"></div>
               <div class="menu-bar3 bar"></div>
            </div>
         </div>
      </header>
      <?php }