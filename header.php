<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title( '|', true, 'right' ); ?></title>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>

    <header>
        <nav class="blog-nav">
          <!-- <div id="site-header">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img src="/wp-content/themes/daringreport/images/logo_collapsed.png">
            </a>
          </div> -->
          <a class="blog-nav-item active" href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a>
          <?php wp_list_pages( '&title_li=' ); ?>
          <a href="#" class="toggler" onclick="return false;">
            <i class="bars"></i>
            <i class="bars"></i>
            <i class="bars"></i>
          </a>
        </nav>
    </header>

    <div id="mobile-navigation" role="navigation">
      <div class="menu-close"><i class="fa fa-times"></i></div>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'after' => '<span class="opener"><i class="plus"></i></span>' ) ); ?>
    </div>
      <a href="#" class="scroll-down" onclick="return false;">
        <i class="fa fa-chevron-down" aria-hidden="true"></i>
      </a>
    </div>

    <div id="main-container">
