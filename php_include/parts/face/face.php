
<!--プレビュー画面の切り替え-->
<script>
jQuery(function($){
  $('.faceA').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#faceLine').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#faceLine').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#faceLine').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.faceB').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#faceLine').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#faceLine').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#faceLine').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.faceC').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#faceLine').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#faceLine').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#faceLine').attr('style', changeL);
    });
});
</script>


<script>
jQuery(function($){
  $('.faceD').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#faceLine').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#faceLine').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#faceLine').attr('style', changeL);
    });
});
</script>


<script>
jQuery(function($){
  $('.bodyA').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#bodyLine').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#bodyLine').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#bodyLine').attr('style', changeL);
    });
});
</script>


<script>
jQuery(function($){
  $('.bodyB').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#bodyLine').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#bodyLine').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#bodyLine').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.bodyC').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#bodyLine').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#bodyLine').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#bodyLine').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.bodyD').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#bodyLine').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#bodyLine').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#bodyLine').attr('style', changeL);
    });
});
</script>


<?php include "php_include/parts/face/face_color.php"; ?>
<?php include "php_include/parts/face/face_list.php"; ?>