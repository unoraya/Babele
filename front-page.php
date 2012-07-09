<?php get_header('front'); ?>
  <?php /*roots_content_before(); ?>
    <div id="content" class="row-fluid">
    <?php roots_main_before(); ?>
      <div id="main" class="row-fluid" role="main">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page'); ?>
        <?php roots_loop_after(); ?>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    <?php roots_sidebar_before(); ?>
      <aside id="sidebar" class="<?php echo SIDEBAR_CLASSES; ?>" role="complementary">
      <?php roots_sidebar_inside_before(); ?>
        <?php get_sidebar(); ?>
      <?php roots_sidebar_inside_after(); ?>
      </aside><!-- /#sidebar -->
    <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); */?>

      <div id="it-01" class="it-menu db">
        <a href="babele/?idi=ita">
          <img class="letre" src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/ita-l.png" />
          <img src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/ita.jpg" />
        </a>
      </div>
      <div id="it-02" class="it-menu db">
        <a href="babele/?idi=port">
          <img class="letre" src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/port-l.png" />
          <img src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/port.jpg" />
        </a>
      </div>
      <div id="it-03" class="it-menu db">
        <a href="babele/?idi=fra">
          <img class="letre" src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/fra-l.png" />
          <img src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/fra.jpg" />
        </a>
      </div>
      <div id="it-04" class="it-menu db">
        <a href="babele/?idi=rus">
          <img class="letre" src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/rus-l.png" />
          <img src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/rus.jpg" />
        </a>
      </div>
      <div id="it-05" class="it-menu db2">
        <img src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/babele.png" />
      </div>
      <div id="it-06" class="it-menu db">
        <a href="babele/?idi=ger">
          <img class="letre" src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/ger-l.png" />
          <img src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/ger.jpg" />
        </a>

      </div>
      <div id="it-07" class="it-menu db">
        <a href="babele/?idi=eng">
          <img class="letre" src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/eng-l.png" />
          <img src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/eng.jpg" />
        </a>
      </div>
      <div id="it-08" class="it-menu db">
        <a href="babele/?idi=esp">
          <img class="letre"src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/esp-l.png" />
          <img src="http://babele.com.co/portal/wp-content/themes/retlehs-roots-c526a84/img/esp.jpg" />
        </a>
      </div>


  </div><!-- /#wrap -->

  <script>

$("#wrap").height($(window).height());
$(".db img:not(.letre)").fadeTo('slow', 0.5);

$(".db").mouseenter(function() {
  $("img:not(.letre)",this).stop();
  $("img:not(.letre)",this).fadeTo('slow', 1);
}).mouseleave(function() {
  $("img:not(.letre)",this).stop();
  $("img:not(.letre)",this).fadeTo('slow', 0.5);
});



$(window).resize(function(){
  $("#wrap").height($(window).height());
});


  </script>
</body>
</html>