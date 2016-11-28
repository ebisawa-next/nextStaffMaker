
<!--プレビュー画面の切り替え-->
<script>
jQuery(function($){
  $('.bhairA').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#bhairParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#bhairParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#bhairParts').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.bhairB').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#bhairParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#bhairParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#bhairParts').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.bhairC').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#bhairParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#bhairParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#bhairParts').attr('style', changeL);
    });
});
</script>


<script>
jQuery(function($){
  $('.bhairD').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#bhairParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#bhairParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#bhairParts').attr('style', changeL);
    });
});
</script>


<script>
jQuery(function($){
  $('.bhairE').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#bhairParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#bhairParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#bhairParts').attr('style', changeL);
    });
});
</script>


<script>
jQuery(function($){
  $('.bhairF').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#bhairParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#bhairParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#bhairParts').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.bhairG').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#bhairParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#bhairParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#bhairParts').attr('style', changeL);
    });
});
</script>



<div class="colorList hairColor">
<?php include "php_include/parts/bhair/bhair_color.php"; ?>
</div>

<div class="partsList">
<?php include "php_include/parts/bhair/bhair_list.php"; ?>
</div>
