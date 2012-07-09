<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <meta name="viewport" content="width=device-width">

  <?php roots_stylesheets(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo("template_url"); ?>/favicon.ico">
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.5.3.min.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <?php roots_head(); ?>
  <?php wp_head(); ?>

</head>


<style>
    @font-face {  
      font-family: "libel";  
      src: url(http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/libel.ttf) format("truetype");  
    }  
</style>
<!--[if IE]>  
  
<style type="text/css" media="screen">  
  @font-face{  
    font-family:'libel';  
    src: url('http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/libel.eot');  
  }  
</style>  
  
<![endif]--> 


  <style> 

      
    h1 { font-family: "libel", Helvetica } 

    li a{
      font-family: "libel",Helvetica;
      font-size: 26px;
      text-transform: uppercase;
      border-right: 1px solid #FFFFFF;
      text-decoration:none;
      border-bottom: 5px solid transparent;
    } 

    .subnav{
      margin-top: 30px;
    }

    #titu-noti{
      color:#FFED00;
      font-family: "libel", sans-serif;
      text-transform: uppercase;
      font-size: 62px;
      font-weight: lighter;
      margin-top:20px;
      margin-left:16px;
      line-height:52px;
    }
    .side{
      margin-left:0px;
      border-right: 1px solid #FFFFFF;
      min-height:188px;
      padding-right: 8px;
    }
  </style>



<body <?php //body_class(roots_body_class()); ?>>

  <!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <?php roots_header_before(); ?>
  <?php roots_header_after(); ?>
  <?php roots_wrap_before(); ?>

  <div id="wrap" class="<?php echo WRAP_CLASSES; ?>" role="document">
      <div class="registrate"><img src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/registrate.png" usemap="#Map">
        <map name="Map">
          <area shape="rect" coords="3,4,51,51" href="http://Youtube.com">
          <area shape="rect" coords="50,4,70,46" href="http://www.facebook.com/pages/Babele/411873788829022">
          <area shape="rect" coords="70,4,98,46" href="https://twitter.com/#!/Babeleco">
          <area shape="rect" coords="98,4,142,46" href="http://flickr.com">
          <area shape="rect" coords="143,4,175,46" href="http://plus.google.com">
          <area shape="rect" coords="182,4,280,46" href="resgistro">
        </map>
      </div>
      <div style="text-align:center; margin-top:30px">
        <img src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/logo.png" width="270" >
      </div>
  <div class="subnav">
      <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Navbar_Nav_Walker(), 'menu_class' => 'nav nav-pills offset2')); ?>
  </div>
  <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active">
        <a href="http://babele.com.co/portal/contacto/">
          <img src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/banners/banner01.jpg" alt="">
        </a>
      </div>
      <div class="item">
        <a href="http://babele.com.co/portal/lenguas/">
          <img src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/banners/banner02.jpg" alt="">
        </a>
      </div>
      <div class="item">
        <a href="http://babele.com.co/portal/comunidad-babele/">
          <img src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/banners/banner03.jpg" alt="">
        </a>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
  </div>