<?php
/*
Template Name: lenguas
*/
get_header('lenguas'); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="span12 row show-grid" role="main">
        <?php roots_loop_before(); ?>
      <div class="page-header">
        <h1>LENGUAS</h1>
      </div>
<?php

      function the_slug() {
        $post_data = get_post($post->ID, ARRAY_A);
        $slug = $post_data['post_name'];
        return $slug; 
      }

session_start();

if(isset($_GET["idi"])){
  $_SESSION["idioma"]=substr($_GET["idi"], 0,3);
}else{
  if(!isset($_SESSION["idioma"])){
    $_SESSION["idioma"]="esp";
  }
}



?>

      <?php query_posts('cat=6&showposts=20'); $conty=0;?>
        <?php if (have_posts()) : ?>
          <div class="span3">
              <ul id="list-idi">
          <?php while (have_posts()) : the_post(); 
                if(substr($_SESSION["idioma"], 0,2)==substr(the_slug(), 0,2)){
          ?>
                  <li class="preg">
                    <a href="?idi=<?php echo the_slug(); ?>" class="item-idi"><h2 class="idiom" ><?php the_title(); ?></h2></a>
                  </li>
          <?php
                }else{
          ?>
                  <li>
                    <a href="?idi=<?php echo the_slug(); ?>" class="item-idi"><h2 class="idiom" ><?php the_title(); ?></h2></a>
                  </li>
          <?php 
                }
                endwhile; ?>
              </ul>
              <a href="#!|slide|sd0"><h2 class="typgen" style="font-size:40px; margin-left: 25px; color:#FFED00;">Ver Objetivos y Metodologia</h2></a>
          </div>

          <?php while (have_posts()) : the_post(); 
                if(substr($_SESSION["idioma"], 0,2)==substr(the_slug(), 0,2)){
          ?>
                <div class="opt-preg span3" rel="<?php echo the_slug(); ?>">
                    <?php the_content(); ?>
                </div>
          <?php
                }else{
          ?>
                <div class="opt-ocul span3" rel="<?php echo the_slug(); ?>">
                    <?php //the_content(); ?>
                </div>
          <?php 
                }
                $conty++;
                endwhile; ?>

          <?php else : ?>
              <p>Entrada no encontrada</p>
          <?php endif; ?>
      <?php  wp_reset_query(); ?>


<div class='span6'>

  <div id="myCarousel2" class="carousel slide row show-grid">
    <div class="carousel-inner">



    </div>
  </div>
</div>


        <?php roots_loop_after(); ?>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>



<script>


$(".carousel-inner").append("<div class='item active'>"+$(".opt-preg .nonv").html()+"</div>");

$(".opt-preg .objcontent").each(function(ind){
  objh=$(this);
  $(".carousel-inner").append("<div class='item'>"+objh.html()+"</div>");
});

urlfine();

$(window).bind('hashchange', function(evento) {
  urlfine();
});

function urlfine(){
  if(location.hash!=""){
    pp=location.hash.split('|');
    if(pp[1]=="slide"){
      $('.carousel').carousel("pause");
      $('.carousel').carousel(optslide(pp[2]));
    }
  }
}

function optslide(str){
  ppstr="";
  $(".item ").each(function(index){
      objh=$("div:eq(0)",this);
      if(str==$(objh).attr("rel")){
        ppstr=index;
      }
  });

  return ppstr;
}


</script>



<?php get_footer(); ?>