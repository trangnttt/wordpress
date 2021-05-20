<!DOCTYPE html>
<html>

<head>
  <title>Content Website</title>
  <meta name="description" content="Description Web" />
  <meta name="keywords" content="" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/slick-theme.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/jquery.mmenu.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/lightGallery.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/lightslider.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/jquery.mmenu.positioning.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css">
  <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.png" type="image/x-icon" />

</head>

<body>
  <div class="lh-wrapper">
    <div class="lh-header <?php if(!is_home()) { echo 'module-header';} ?>">
      <div class="header-position">
        <!-- end block-header -->
        <div class="block-menu">
          <div class="container">
            <div class="row">
              <div class="box-logo col-lg-2 col-4">
                <a href="" class="logo"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/phan-gia-huy.png" alt=""></a>
              </div>
              <div class="box-menu col-lg-10">
                <nav id="drop_down">
                  <?php wp_nav_menu(
                    array(
                      'theme_location' => 'header-menu',
                      'container' => 'false',
                      'menu_id' => 'header-menu',
                      'menu_class' => 'lh2-ul'
                    )
                  ); ?>
                </nav>
              </div>
            </div>
            <button class="d-lg-none d-md-none" id="menu"><span></span></button>
          </div>
        </div>
        <!-- end block-menu -->
      </div>

      <?php
      if (!is_home()) { ?>
        <div class="block-slider">

        </div>
      <?php }
      ?>