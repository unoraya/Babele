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


<!--[if IE]>  
  
<style type="text/css" media="screen">  
  @font-face{  
    font-family:'LibelSuit';  
    src: url('http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/LibelSuit.eot');  
  }  
</style>  
  
<![endif]--> 


  <style> 

    @font-face {  
      font-family: "libel";  
      src: url(http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/libel.ttf) format("truetype");  
    }  
      
    .titumen { font-family: "libel","LibelSuit", sans-serif }  

    .letre{
      position: absolute !important;
      width:33.3%;
      top:0px;
      left:0px;
      z-index: 2;
    }

    body{
      margin:0px;
      padding:0px;
    }
    .babel{
      text-align: center;
      position: relative;
    }

    .it-menu img{
      position: relative;
      width:100%;
      top:-3.3%;
    }

    .it-menu{
      overflow: hidden;
      float:left;
      height:33.3%;
      position: relative;
    }

    .db{
      width:33.3%;
    }
    .db2{
      width:66.6%;
    }

    #it-01{ background-color:#009640 ;}
    #it-02{ background-color:#FFED00 ;}
    #it-03{ background-color:#BE1622 ;}
    #it-04{ background-color:#CBBBA0 ;}
    #it-05{ background-color:#CBBBA0 ;}
    #it-06{ background-color:#00A19A ;}
    #it-07{ background-color:#36A9E1 ;}
    #it-08{ background-color:#F39200 ;}
  </style>

</head>

<body <?php body_class(roots_body_class()); ?>>

  <!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <?php roots_header_before(); ?>
    <header id="banner" class="navbar navbar-fixed-top" role="banner">
    </header>
  <?php roots_header_after(); ?>

  <?php roots_wrap_before(); ?>
  <div id="wrap" class="" role="document">