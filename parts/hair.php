
<!--プレビュー画面の切り替え-->
<script>
jQuery(function($){
  $('.hairA').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#hairParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#hairParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#hairParts').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.hairB').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#hairParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#hairParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#hairParts').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.hairC').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#hairParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#hairParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#hairParts').attr('style', changeL);
    });
});
</script>


<script>
jQuery(function($){
  $('.hairD').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#hairParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#hairParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#hairParts').attr('style', changeL);
    });
});
</script>


<script>
jQuery(function($){
  $('.hairE').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#hairParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#hairParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#hairParts').attr('style', changeL);
    });
});
</script>


<script>
jQuery(function($){
  $('.hairF').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#hairParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#hairParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#hairParts').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.hairG').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#hairParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#hairParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#hairParts').attr('style', changeL);
    });
});
</script>



<div class="colorList hairColor">
<?php include "parts/hair_color.php"; ?>
</div>

<div class="partsList">
<?php include "parts/hair_list.php"; ?>
</div>
