
<!--プレビュー画面の切り替え-->
<script>
jQuery(function($){
  $('.eyeA').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#eyeParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#eyeParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#eyeParts').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.eyeB').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#eyeParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#eyeParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#eyeParts').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.eyeC').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#eyeParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#eyeParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#eyeParts').attr('style', changeL);
    });
});
</script>


<div class="colorList eyeColor">
<?php include "parts/eye_color.php"; ?>
</div>

<div class="partsList">
<?php include "parts/eye_list.php"; ?>
</div>
