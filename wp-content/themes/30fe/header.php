<!-- header.php -->
<?php
/**
 * The Header template
 *
 *
 * @package 30FE TEMPLATE
 */
global $post;
?>
<!DOCTYPE html>
<!--[if IE 7]>
    <html class="ie ie7" <?php language_attributes(); ?>>
    <![endif]-->
<!--[if IE 8]>
    <html class="ie ie8" <?php language_attributes(); ?>>
    <![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
  <!--<![endif]-->

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta name="breakpoint" content="phone" media="(max-width: 479px)">
    <meta name="breakpoint" content="small-tablet" media="(min-width: 480px) and (max-width: 639px)">
    <meta name="breakpoint" content="tablet" media="(min-width: 640px) and (max-width: 1023px)">
    <meta name="breakpoint" content="desktop" media="(min-width: 1024px)">
    <meta name="breakpoint" content="widescreen" media="(min-width: 1280px)">
    <meta name="breakpoint" content="retina" media="only screen and (-webkit-min-device-pixel-ratio : 2)">
    <meta name="format-detection" content="telephone=no">
    <link rel="profile" href="#">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css">
    <?php wp_head(); ?>
    <link rel='icon' type='image/svg+xml' href='<?php echo get_template_directory_uri(); ?>/images/favicon.svg' />
    <link rel='icon' type='image/png' href='<?php echo get_template_directory_uri(); ?>/images/favicon.png' />




  </head>

  <body <?php body_class(); ?>>
    <header class="header">
      <?php 
             get_template_part( 'modules/navbar' );
      ?>
      <section class="body__hider"></section>
    </header>