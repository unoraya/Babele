
  </div><!-- /#wrap -->

  <?php roots_footer_before(); ?>
  <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
    <?php //roots_footer_inside(); ?>
    <?php //dynamic_sidebar('roots-footer'); ?>
    <p class="copy"><small>Copyright &copy; babele.com.co - info@babele.com.co - Cali, Colombia - PBX: (572) 894 3390 - cel: (57) 318 386 5314 - Powered by <a href="http://www.unoraya.com" target="_blank" class="yell">unoraya.com</a>
</small></p>
  </footer>
  <?php roots_footer_after(); ?>

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>
  <script type="text/javascript">


  pp=$(window).height()/3;
  $(".it-menu").each(function(){
    pp2=$(this).height();
    if(pp>pp2){
      pp3=(pp-pp2)/3;
    }else{
      pp3=(pp2-pp)/3;
    }
    $("img",this).css("top",-pp3+"px");
    $(this).height(pp);
  });

  $(".side:eq(2)").css("border-right","0px solid #FFFFFF");

  $(".item-idi").click(function(){
    $(".preg").removeClass("preg");
    $(this).parents("li").addClass("preg");
  });

$('#myCarousel').carousel();
      
setInterval(function(){
  if($(".carousel-inner .active").index()==($(".carousel-inner .item").length-1)){
    $('#myCarousel').carousel(0);
  }
},3000);

$(window).resize(function(){
  pp=$(window).height()/3;
  $(".it-menu").each(function(){
    pp2=$(this).height();
    if(pp>pp2){
      pp3=(pp-pp2)/3;
    }else{
      pp3=(pp2-pp)/3;
    }
    $("img",this).css("top",-pp3+"px");
    $(this).height(pp);
  });
});


$(".radiop a").click(function(e){
  e.preventDefault();
  ppvar=$(this).attr("href");
  $("#fiforadio").remove();
  $(this).parent().append("<div id='fiforadio' ><span class='closeradio'>Cerrar</span><div class='fiforadiocont'><iframe scrolling='no' src="+ppvar+"></iframe></div></div>");
});

$(".closeradio").live("click",function(){
  $("#fiforadio").remove();
});


  </script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30855504-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  
</body>
</html>