

<div class="mod-partsSelect">
    <!--パーツ選択のタブ部分-->
    <ul class="selectTabUl">
         <li class="selectTabLi"><a href="#tab1"><img src="images/default/tab1.png"></a></li><!--顔-->
         <li class="selectTabLi"><a href="#tab2"><img src="images/default/tab2.png"></a></li><!--前髪-->
         <li class="selectTabLi"><a href="#tab3"><img src="images/default/tab3.png"></a></li><!--後ろ髪-->
         <li class="selectTabLi"><a href="#tab4"><img src="images/default/tab4.png"></a></li><!--目-->
         <li class="selectTabLi"><a href="#tab5"><img src="images/default/tab5.png"></a></li><!--鼻-->
         <li class="selectTabLi"><a href="#tab6"><img src="images/default/tab6.png"></a></li><!--口-->
         <li class="selectTabLi"><a href="#tab7"><img src="images/default/tab7.png"></a></li><!--服-->
         <li class="selectTabLi"><a href="#tab8"><img src="images/default/tab8.png"></a></li><!--アクセ-->
         <li class="selectTabLi"><a href="#tab9"><img src="images/default/tab9.png"></a></li><!--フリー-->
         <li class="selectTabLi"><a href="#tab10"><img src="images/default/tab10.png"></a></li><!--背景-->
    </ul>

    <!--タブで選択したものが出てくるエリア-->
    <div class="partsListBox">
        <div class="area" id="tab1"><?php include "php_include/parts/face/face.php"; ?></div>
        <div class="area" id="tab2"><?php include "php_include/parts/hair/hair.php"; ?></div>
        <div class="area" id="tab3"><?php include "php_include/parts/bhair/bhair.php"; ?></div>
        <div class="area" id="tab4"><?php include "php_include/parts/eye/eye.php"; ?></div>
        <div class="area" id="tab5"><?php include "php_include/parts/nose/nose.php"; ?></div>
        <div class="area" id="tab6"><?php include "php_include/parts/mouth/mouth.php"; ?></div>
        <div class="area" id="tab7"><?php include "php_include/parts/cloth/cloth.php"; ?></div>
        <div class="area" id="tab8"><?php include "php_include/parts/accessories/accessories.php"; ?></div>
        <div class="area" id="tab9"><?php include "php_include/parts/free/free.php"; ?></div>
        <div class="area" id="tab10"><?php include "php_include/parts/bg_img/bg_img.php"; ?></div>
    </div>

</div><!--mod-partsSelect END -->