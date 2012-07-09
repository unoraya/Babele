<?php
/*
Template Name: babeleco
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="span12 row show-grid" role="main">
        <?php roots_loop_before(); ?>


<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>
      <div class="page-header">
      </div>
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    <?php roots_post_inside_after(); ?>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ 


session_start();

if(isset($_GET["idi"])){
  $_SESSION["idioma"]=substr($_GET["idi"], 0,3);
}else{
  if(!isset($_SESSION["idioma"])){
    $_SESSION["idioma"]="esp";
  }
}
/*$_SESSION["idioma"]*/
if(isset($_SESSION["idioma"])){
    $idposti=get_post_by_title("esp");
    if($idposti!=null){
    ?>
          <?php query_posts('p='.$idposti->ID);?>
              <?php while (have_posts()) : the_post(); ?>
                  <?php the_content(); ?>
              <?php endwhile; ?>
          <?php  wp_reset_query(); ?>
    <?php  
    }else{
      $idposti=get_post_by_title("esp");
    ?>
          <?php query_posts('p='.$idposti->ID);?>
              <?php while (have_posts()) : the_post(); ?>
                  <?php the_content(); ?>
              <?php endwhile; ?>
          <?php  wp_reset_query(); ?>
    <?php
    }
}



?>


        <?php roots_loop_after(); ?>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>