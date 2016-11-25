
<!--プレビュー画面の切り替え-->
<script>
jQuery(function($){
  $('.clothM').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#clothParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#clothParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#clothParts').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.clothL').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#clothParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#clothParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#clothParts').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.bottomM').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#bottomParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#bottomParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#bottomParts').attr('style', changeL);
    });
});
</script>


<script>
jQuery(function($){
  $('.bottomL').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#bottomParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#bottomParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#bottomParts').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.onepieceM').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#onepieceParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#onepieceParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#onepieceParts').attr('style', changeL);
    });
});
</script>

<script>
jQuery(function($){
  $('.onepieceL').click(function(){
      var buttanAttr = $(this).attr('title');
      var imgSrc = $('#onepieceParts').attr('style').split('_');
      var imgJpg = imgSrc[1].split('.');
      var changeL = $('#onepieceParts').attr('style').replace(imgJpg[0] , buttanAttr);
      $('#onepieceParts').attr('style', changeL);
    });
});
</script>



<!--プレビュー画面の切り替え-->


<div class="colorList">
<?php include "parts/cloth_category.php"; ?>
</div>

<div class="partsList">
    <div class="clothArea" id="cTab1"> 
        <?php include "parts/cloth_tops.php"; ?>
    </div>

    <div class="clothArea" id="cTab2"> 
        <?php include "parts/cloth_bottoms.php"; ?>
    </div>

    <div class="clothArea" id="cTab3"> 
        <?php include "parts/cloth_shoes.php"; ?>
    </div>

    <div class="clothArea" id="cTab4"> 
        <?php include "parts/cloth_socks.php"; ?>
    </div>

    <div class="clothArea" id="cTab5"> 
        <?php include "parts/cloth_onepiece.php"; ?>
    </div>

</div>
