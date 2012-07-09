<?php // https://github.com/retlehs/roots/wiki

if (!defined('__DIR__')) { define('__DIR__', dirname(__FILE__)); }

require_once locate_template('/inc/roots-config.php');      // config
require_once locate_template('/inc/roots-utils.php');       // utility functions

define('WP_BASE', wp_base_dir());
define('THEME_NAME', next(explode('/themes/', get_template_directory())));
define('RELATIVE_PLUGIN_PATH', str_replace(site_url() . '/', '', plugins_url()));
define('FULL_RELATIVE_PLUGIN_PATH', WP_BASE . '/' . RELATIVE_PLUGIN_PATH);
define('RELATIVE_CONTENT_PATH', str_replace(site_url() . '/', '', content_url()));
define('THEME_PATH', RELATIVE_CONTENT_PATH . '/themes/' . THEME_NAME);

require_once locate_template('/inc/roots-activation.php');  // activation
require_once locate_template('/inc/roots-cleanup.php');     // cleanup
require_once locate_template('/inc/roots-scripts.php');     // modified scripts output
require_once locate_template('/inc/roots-htaccess.php');    // rewrites for assets, h5bp htaccess
require_once locate_template('/inc/roots-hooks.php');       // hooks
require_once locate_template('/inc/roots-actions.php');     // actions
require_once locate_template('/inc/roots-widgets.php');     // widgets
require_once locate_template('/inc/roots-custom.php');      // custom functions


function obtener_id_cat($cat_name){
  $term = get_term_by('name', $cat_name, 'category');
  return $term->term_id;
}

function get_post_by_title($page_title, $output = OBJECT) {
    global $wpdb;
        $post = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_title = %s AND post_type='post'", $page_title ));
        if ($post){
            return get_post($post, $output);
        }
    return null;
}

///-------------------------Shortcode bann [bann src="" bar="" re20="" re21="" re30="" re31=""]-------------------------
function bann_func( $atts ) {
  extract( shortcode_atts( array('src' => '','bar' => '','re20' => '','re21' => '','re30' => '','re31' => ''), $atts));
  ?>
<div class="span4 side">


<div id="myCarousel2" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
      <h2 id="titu-noti" class="txtcenter">programación mes actual</h2>
      <?php echo do_shortcode('[eventlist]'); ?>
      </div>
    <div class="item">
        <h2 id="titu-noti"><?php echo $src; ?></h2>
        <?php query_posts('cat='.obtener_id_cat($bar).'&showposts=1');?>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <!--a href="<?php //the_permalink() ?>" style=" font-size:18px; color:#fff;"><?php //the_title(); ?></a-->
                <?php 
                  $varcont=get_the_content();
                  echo $varcont;
/*                  $varclen=strlen($varcont); 
                  $cadena_cambiada = str_replace("&nbsp;","",$varcont);
                  if(strlen($cadena_cambiada)>500){
                    echo substr($cadena_cambiada,0,500);
                    ?>
                      <p style="margin-top:10px"><a href='<?php the_permalink(); ?>' style='border-right: 0px solid #FFFFFF;'>Ver Mas</a></p>
                    <?php
                  }else{
                    echo $cadena_cambiada;
                  }*/
                  
                ?>
            <?php endwhile; ?>
            <?php else : ?>
                <p>Entrada no encontrada</p>
            <?php endif; ?>
        <?php  wp_reset_query(); ?>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel2" data-slide="prev">‹</a>
  <a class="right carousel-control" href="#myCarousel2" data-slide="next">›</a>
</div>



</div>
<div class="span4 side">
    <h2 id="titu-noti"><?php echo $re20; ?></h2>
    <a href="" style="margin-left:16px; color:#FFED00;"><?php echo $re21; ?></a>
</div>

<div class="span4 side">
    <h2 id="titu-noti"><?php echo $re30; ?> <a href="" style="color:#fff;"><?php echo $re31; ?></a></h2>
</div>

  <?php
}
add_shortcode( 'bann', 'bann_func' );
///------------------------------------------------Shortcode bann----------------------------------------------------




///------------------------------------------------Shortcode descgen [bann src=""]-------------------------
function descgen_func( $atts, $content=null ) {
  extract( shortcode_atts( array('src' => ''), $atts));
?>
  <div class='span3 side3'>
    <table class="table table-bordered table-striped">
      <tr>
        <td class="span1" style="vertical-align:middle; text-align:center;">
      <span class="typgen"><?php echo $src; ?></span>
        </td>
        <td class="span2">
      <?php do_shortcode($content); ?>
        </td>
      </tr>
    </table>
  </div>

<?php
}
add_shortcode( 'descgen', 'descgen_func' );


///------------------------------------------------Shortcode descgen----------------------------------------------------

///-------------------------Shortcode levelsh [levelsh src=""]-------------------------
function level_func($atts, $content=null) {
  extract( shortcode_atts( array('src' => ''), $atts));
?>
  <div class='span2 item-leve0' style="padding-left:8px; text-align: center;">
    <a href="#!<?php echo "|slide|".$src; ?>" class="item-level " style="width:100%"><?php echo $src; ?> <span style="font-weight:lighter; margin-left:5px;">Ver más +</span></a>

      <div style='display:none;' class="objcontent">
        <div rel="<?php echo $src; ?>">
          <?php do_shortcode($content); ?>
        </div>
      </div>

  </div>
<?php
}
add_shortcode( 'levelsh', 'level_func' );
///------------------------------------------------Shortcode levelsh----------------------------------------------------



///------------------------------------------------Shortcode cont3----------------------------------------------------

///-------------------------Shortcode levelsh [cont3]-----------------------------------------------------------------
function cont3_func($atts ,$content=null) {
?>
        <div class='span3'>
          <p>
            <?php echo $content; ?>
          </p>
        </div>
<?php
}
add_shortcode( 'cont3', 'cont3_func' );
///------------------------------------------------Shortcode levelsh----------------------------------------------------




///------------------------------------------------Shortcode cont6------------------------------------------------------

///-------------------------Shortcode levelsh [cont6]-------------------------------------------------------------------
function cont6_func($atts ,$content=null) {
?>
      <div class="nonv">
        <div class='span6' rel="sd0">
          <p>
            <?php echo $content; ?>
          </p>
        </div>
      </div>
<?php
}
add_shortcode( 'cont6', 'cont6_func' );
///------------------------------------------------Shortcode levelsh----------------------------------------------------





///-------------------------Shortcode [ct1]-------------------------------------------------------------------------
function ct1_func($atts ,$content=null) {
?>
        <div class='span1'>
            <?php echo $content; ?>
        </div>
<?php
}
add_shortcode( 'ct1', 'ct1_func' );
///------------------------------------------------Shortcode ct1----------------------------------------------------

///-------------------------Shortcode [ct2]-------------------------------------------------------------------------
function ct2_func($atts ,$content=null) {
?>
        <div class='span2'>
            <?php echo $content; ?>
        </div>
<?php
}
add_shortcode( 'ct2', 'ct2_func' );
///------------------------------------------------Shortcode ct2----------------------------------------------------

///-------------------------Shortcode [ct3]-------------------------------------------------------------------------
function ct3_func($atts ,$content=null) {
?>
        <div class='span3'>
            <?php echo $content; ?>
        </div>
<?php
}
add_shortcode( 'ct3', 'ct3_func' );
///------------------------------------------------Shortcode ct3----------------------------------------------------

///-------------------------Shortcode [ct4]-------------------------------------------------------------------------
function ct4_func($atts ,$content=null) {
?>
        <div class='span4'>
            <?php echo $content; ?>
        </div>
<?php
}
add_shortcode( 'ct4', 'ct4_func' );
///------------------------------------------------Shortcode ct4----------------------------------------------------

///-------------------------Shortcode [ct5]-------------------------------------------------------------------------
function ct5_func($atts ,$content=null) {
?>
        <div class='span5'>
            <?php echo $content; ?>
        </div>
<?php
}
add_shortcode( 'ct5', 'ct5_func' );
///------------------------------------------------Shortcode ct5----------------------------------------------------

///-------------------------Shortcode [ct6]-------------------------------------------------------------------------
function ct6_func($atts ,$content=null) {
?>
        <div class='span6'>
            <?php echo $content; ?>
        </div>
<?php
}
add_shortcode( 'ct6', 'ct6_func' );
///------------------------------------------------Shortcode ct6----------------------------------------------------

///-------------------------Shortcode [ct7]-------------------------------------------------------------------------
function ct7_func($atts ,$content=null) {
?>
        <div class='span7'>
            <?php echo $content; ?>
        </div>
<?php
}
add_shortcode( 'ct7', 'ct7_func' );
///------------------------------------------------Shortcode ct7----------------------------------------------------

///-------------------------Shortcode [ct8]-------------------------------------------------------------------------
function ct8_func($atts ,$content=null) {
?>
        <div class='span8'>
            <?php echo $content; ?>
        </div>
<?php
}
add_shortcode( 'ct8', 'ct8_func' );
///------------------------------------------------Shortcode ct8----------------------------------------------------

///-------------------------Shortcode [ct9]-------------------------------------------------------------------------
function ct9_func($atts ,$content=null) {
?>
        <div class='span9'>
            <?php echo $content; ?>
        </div>
<?php
}
add_shortcode( 'ct9', 'ct9_func' );
///------------------------------------------------Shortcode ct9----------------------------------------------------

///-------------------------Shortcode [ct10]-------------------------------------------------------------------------
function ct10_func($atts ,$content=null) {
?>
        <div class='span10'>
            <?php echo $content; ?>
        </div>
<?php
}
add_shortcode( 'ct10', 'ct10_func' );
///------------------------------------------------Shortcode ct10----------------------------------------------------

///-------------------------Shortcode [ct11]-------------------------------------------------------------------------
function ct11_func($atts ,$content=null) {
?>
        <div class='span11'>
            <?php echo $content; ?>
        </div>
<?php
}
add_shortcode( 'ct11', 'ct11_func' );
///------------------------------------------------Shortcode ct11----------------------------------------------------

///-------------------------Shortcode [ct12]-------------------------------------------------------------------------
function ct12_func($atts ,$content=null) {
?>
        <div class='span12'>
            <?php echo $content; ?>
        </div>
<?php
}
add_shortcode( 'ct12', 'ct12_func' );
///------------------------------------------------Shortcode ct12----------------------------------------------------



// set the maximum 'Large' image width to the maximum grid width
// http://wordpress.stackexchange.com/q/11766
if (!isset($content_width)) { $content_width = 940; }

function roots_setup() {
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // tell the TinyMCE editor to use editor-style.css
  // if you have issues with getting the editor to show your changes then
  // use this instead: add_editor_style('editor-style.css?' . time());
  add_editor_style('editor-style.css');

  // http://codex.wordpress.org/Post_Thumbnails
  add_theme_support('post-thumbnails');
  // set_post_thumbnail_size(150, 150, false);

  // http://codex.wordpress.org/Post_Formats
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'roots')
  ));
}

add_action('after_setup_theme', 'roots_setup');

// http://codex.wordpress.org/Function_Reference/register_sidebar
function roots_register_sidebars() {
  $sidebars = array('Sidebar', 'Footer');

  foreach($sidebars as $sidebar) {
    register_sidebar(
      array(
        'id'            => 'roots-' . sanitize_title($sidebar),
        'name'          => __($sidebar, 'roots'),
        'description'   => __($sidebar, 'roots'),
        'before_widget' => '<article id="%1$s" class="widget %2$s"><div class="widget-inner">',
        'after_widget'  => '</div></article>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
      )
    );
  }
}

add_action('widgets_init', 'roots_register_sidebars');

// return post entry meta information
function roots_entry_meta() {
  echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s at %s.', 'roots'), get_the_date(), get_the_time()) .'</time>';
  echo '<p class="byline author vcard">'. __('Written by', 'roots') .' <a href="'. get_author_posts_url(get_the_author_meta('id')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
}