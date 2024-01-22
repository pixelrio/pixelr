<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pixelr.io_Labs_Inc.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/misc/favicon.png">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pixelr.IO Labs Inc.</title>
    <!-- Bootstrap Core CSS-->
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
</head>

<body <?php body_class(); ?> id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" >

  <!-- Preloader-->
  <div id="preloader">
      <div id="status"></div>
    </div>
    <!-- Navigation-->
    <nav class="navbar navbar-unibody navbar-custom navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <?php bloginfo('name'); ?>
              </a>
        </div>
            <?php
              wp_nav_menu( array(
                  'theme_location'    => 'header-nav',
                  'depth'             => 2,
                  'container'         => 'ul',
                  'container_class'   => 'collapse navbar-collapse flex-row-reverse',
                  'menu_class'        => 'navbar-nav'
                )
              );
            ?>
        </div>
    </nav>
    
    <?php if ( is_front_page() ) { ?>
      <!-- Full width hero section with video  -->
      <header class="intro" data-background="<?php bloginfo('stylesheet_directory'); ?>/img/toronto.png">
        <div class="intro-body">
          <h1 class="no-pad wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
           &lt;pixelr.IO /&gt;
            <span class="badge hidden-sm hidden-xs wow fadeIn" data-wow-duration="3s" data-wow-delay=".4s">Labs Inc.</span></h1>
            <h2 class="intro-small wow fadeInDown Zeyada" data-wow-duration="2s" data-wow-delay=".2s">
              <span class="rotate">Design, Development, Analytics, SEO, SEM, Consulting</span>
            </h2>
            <a class="page-scroll" href="#about"><span class="mouse"><span><i class="icon ion-ios-arrow-down"></i></span></span></a>
        </div>
        <div class="video-controls video-controls-visible hidden-sm"><a class="fa fa-volume-off fa-lg" id="video-volume" href="#"></a><a class="fa fa-pause fa-lg" id="video-play" href="#"></a></div>
      </header>
    <?php } else{ ?>
      <!-- Header for internal pages and blog posts -->
      <?php $thumb = get_the_post_thumbnail_url(); ?>
      <header class="intro introhalf" data-background="<?php echo $thumb;?>">
        <div class="intro-body">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <?php
                  // if ( is_singular() ) :
                  //   the_title( '<h2 class="entry-title">', '</h2>' );
                  // else :
                  //   the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                  // endif;
                  if ( is_home() ) {
                  ?>
                    <h2 class="entry-title">
                      <?php
                        wp_title();
                      ?>
                    </h2>
                  <?php
                  }
                  if (is_single()) { 
                    the_title( '<h2 class="entry-title">', '</h2>' );
                    $categories = get_the_category();
                    echo('<h6 class="breadcrumb">
                            <a href="' . home_url() . '">Home</a> / 
                            <a href="' . home_url() . '/blog">Blog</a> /
                            <a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>
                          </h6>'
                        );
                  } else if (is_page()) { // PAGE
                    get_the_title('<h2 class="entry-title">', '</h2>');
                  } else if (is_search() ){
                    echo ('<h2 class="entry-title">' . get_search_query() . '</h2>');
                  } 
                  else if(is_category()) {
                    $arr = get_the_category();
                    if ( ! empty( $arr ) ) {
                  ?>
                    <h2 class="entry-title">
                      <?php echo esc_html( $arr[0]->name ); ?>
                    </h2>
                  <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </header>
    <?php } ?>