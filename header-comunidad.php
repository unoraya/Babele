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

  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.5.3.min.js"></script>
  

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <?php roots_head(); ?>
  <?php wp_head(); 

include "lastRSS.php";
$rss = new lastRSS;
$rss->cache_dir = '';
$rss->cache_time = 0;
$rss->cp = 'utf-8';
$rss->date_format = 'd/m/Y';

  ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/min_sahrrre.js"></script>
</head>

<style>
    @font-face {  
      font-family: "libel";  
      src: url(http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/libel.ttf) format("truetype");  
    }  

    #example5{
    height: 64px;
    margin: auto;
    width: 240px;
    }
    .sharrre .button{
    float:left;
    width:60px;
    }

    .sharrre .facebook{
        width:85px;
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
      
    h1 { font-family: "libel","LibelSuit", sans-serif } 

    li a{
      font-family: "libel","LibelSuit",sans-serif;
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
      font-family: "libel","LibelSuit", sans-serif;
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



<body <?php body_class(roots_body_class()); ?>>

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
<div class="row show-grid">
    <div class="span4"><h2 class="typgen" style="font-size:40px; text-aling:center;">Facebook</h2>



<?php

$respuesta11 = file_get_contents("https://graph.facebook.com/oauth/access_token?client_id=410207289006475&client_secret=42e5a4e0b45ad4b6fe876aa9cdb53bd2&grant_type=client_credentials");
$a = explode('=', $respuesta11);


$respuesta = file_get_contents("https://graph.facebook.com/411873788829022/feed?access_token=".$a[1]);
$datos = json_decode($respuesta,true);


$facebook = array();
$innervar="";
$i=0;

$innervar.="<ul class='socialdisplay'>";
  foreach ($datos["data"] as $value) {
    $innervar.="<li>";
    if (trim($value["type"]) == "photo") {
      $innervar.="<strong class='stitlo'>".trim($value["from"]["name"]." ha publicado </strong>");
      $innervar.="<img  class='imgsocial' src='".trim($value["picture"])."'/></br>";
      if(trim($value["message"]) != ""){
        $innervar.=str_replace(trim($value["link"]), "", trim($value["message"]))."</br></br>";
      }
      if(trim($value["name"]) != ""){
        $innervar.="<strong>".trim($value["name"])."</strong></br>";
      }
      if(trim($value["caption"]) != ""){
        $innervar.=trim($value["caption"])."</br>";
      }
      $innervar.="</br><a style='border-right: 0px solid #FFFFFF;' href='".trim($value["link"])."' target='_blank' >Ver link</a>"."</br>";
    }
    else if (trim($value["type"]) == "video") {
      $innervar.="<strong class='stitlo'>".trim($value["from"]["name"]." ha publicado </strong>");
      if(trim($value["picture"]) != ""){
        $innervar.="<img  class='imgsocial' src='".trim($value["picture"])."'/>"."</br>";
      }
      if(trim($value["message"]) != ""){
        $innervar.=str_replace(trim($value["link"]), "", trim($value["message"]) )."</br></br>";
      }
      if(trim($value["name"]) != ""){
        $innervar.="<strong>".trim($value["name"])."</strong></br>";
      }
      if(trim($value["description"]) != ""){
        $innervar.=trim($value["description"])."</br>";
      }
      $innervar.="</br><a style='border-right: 0px solid #FFFFFF;' href='".trim($value["link"])."' target='_blank' >Ver link</a>"."</br>";
    }
    else if (trim($value["type"]) == "status") {
      if(trim($value["message"]) != ""){
        $innervar.="<strong class='stitlo'>".trim($value["from"]["name"]." ha publicado </strong> </br>");
        $innervar.=trim($value["message"])."</br>";
      }
    }
    else if (trim($value["type"]) == "link") {
      $innervar.="<strong class='stitlo'>".trim($value["from"]["name"]." ha publicado </strong> </br>");
      if(trim($value["picture"]) != ""){
        $innervar.="<img  class='imgsocial' src='".trim($value["picture"])."'/>"."</br>";
      }
      if(trim($value["name"]) != ""){
        $innervar.="<strong>".trim($value["name"])."</strong></br>";
      }
      if(trim($value["description"]) != ""){
        $innervar.=trim($value["description"])."</br>";
      }
      $innervar.="<a style='border-right: 0px solid #FFFFFF;' href='".trim($value["link"])."' target='_blank' >Ver link</a></br>";
      $innervar.=str_replace(trim($value["link"]), "", trim($value["message"]) )."</br>";
    }


    $innervar.="</li></br>";
    if($i==2){
      break;
    }
    $i++;
  }
$innervar.="</ul>";
echo $innervar;

?>


    </div>
    <div class="span4"><h2 class="typgen" style="font-size:40px; text-aling:center;">Twitter</h2>
      <ul class="sociallist">
        <?php
          $rssurl = "https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=babeleco";
          if ($rs = $rss->get($rssurl)) {
            for ($i=0;$i<count($rs);$i++){
               for($io=0;$i<count($rs["items"]);$i++){
                echo '<li>';
                  echo preg_replace("#http://([A-z0-9./-]+)#", '<a href="http://$1">$0</a>',str_replace("Babeleco: ","",$rs["items"][$i]["description"]));
                echo '</li>';
               }
            }
          }
        ?>
      </ul>
    </div>
    <div class="span4"><h2 class="typgen" style="font-size:40px; text-aling:center;">Blog Babele</h2>
      <ul class="sociallist">
        <li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</li>
        <li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</li>
        <li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</li>
      </ul>
    </div>
  </div>


                <div id="example5">
                    <div id="shareme" data-url="http://babele.com.co" data-text="Babele Centro de lenguas"></div>
                </div>
                
<div class="row show-grid">
  <div class="span12">
<?php  if (!(current_user_can('level_0'))){ ?>

<h2 class="typgen">Si usted es Estudiante de babele centro de lenguas ingrese aquí</h2>
          <table id="asociados-log">
            <tbody>
              <form action="<?php  echo get_option('home'); ?>/wp-login.php" method="post">
                    <tr>
                        <td><label for="label" class="label1">Usuario</label></td>
                        <td style="width:80%" ><input type="text" name="log" id="log" value="<?php  echo wp_specialchars(stripslashes($user_login), 1) ?>" size="20" class="input1" /></td>
                    </tr>
                    <tr>
                      <td><label for="label" class="label1">Contrase&ntilde;a</label></td>
                      <td><input type="password" name="pwd" id="pwd" size="20" class="input1"/></td>
                    </tr>
                    <tr>
                      <td><div class="olvido"><a href="<?php  echo get_option('home'); ?>/wp-login.php?action=lostpassword">Olvido su contrase&ntilde;a?</a></div></td>
                      <td><div class="campo3"><input type="submit" name="submit" value="Entrar" class="entrar" /></td>
                    </tr>
                    
                    <input type="hidden" name="redirect_to" value="<?php  echo $_SERVER['REQUEST_URI']; ?>" /></div>
              </form>
            </tbody>
          </table>


<?php  } else { 


$post_id = 370;
$my_post = get_post($post_id);
echo $my_post->post_content;


} ?>

  </div>
</div>
                <script>
                    $('#shareme').sharrre({
                        share: {
                            googlePlus: true,
                            facebook: true,
                            twitter: true
                        },
                        buttons: {
                            googlePlus: {size: 'tall',lang: 'es_ES'},
                            facebook: {layout: 'box_count',lang: 'es_ES'},
                            twitter: {count: 'vertical',lang: 'es_ES'}
                        },
                        enableHover: false,
                        enableCounter: false,
                        enableTracking: true,
                        url: '<?php  the_permalink() ?>'
                    });
                </script>

