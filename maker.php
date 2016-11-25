<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="parts.css">
<script type="text/javascript" src="js/jquery-2.0.2.min.js"></script>
<script type="text/javascript" src="js/jqueryupload.js"></script>
<script type="text/javascript" src="js/jquery.balloon.js"></script>
<script type="text/javascript" src="js/html2canvas.js"></script>
<script type="text/javascript" src="js/jscolor.js"></script>

<title>HOME'S MAKER α版</title>



<!--画像切り替えJS-->
<script type="text/javascript">
function bgImgChange(path,id_name) {document.getElementById(id_name).style.backgroundImage=path; }
</script>


<!-- 背景色切り替え -->
<script type="text/javascript">
$(function(){
    $('#color').change(function() {
        $('#bgColorParts').css('background-color', $('#color').val());
    });
});
</script>

<script type="text/javascript">
$(function(){
    $('#color').change(function() {
        $('#background').css('border-color', $('#color').val());
    });
});
</script>

<!--アイコン生成用のlightbox-->
    <script>
    $(document).ready(function(){
//show-panelボタンをクリックしたらLightBoxを表示する
$("a#show-panel2").click(function(){
$("#BlackWindow2, #lightbox-panel2").fadeIn(300);/*表示速度は数値を調整*/
})
//CloseボタンをクリックしたらLightBoxを閉じる
$("a#close-panel2").click(function(){
$("#BlackWindow2, #lightbox-panel2").fadeOut(300);/*フォードアウトの速度は数値を調整*/
})
//背景の黒地をクリックしたらLightBoxを閉じる
$("#BlackWindow2").click(function(){
$("#BlackWindow2, #lightbox-panel2").fadeOut(300);/*フォードアウトの速度は数値を調整*/
})
})

</script>

<!--アイコン生成用のlightbox-->
    <script>
    $(document).ready(function(){
//show-panelボタンをクリックしたらLightBoxを表示する
$("a#show-panel3").click(function(){
$("#BlackWindow3, #lightbox-panel3").fadeIn(300);/*表示速度は数値を調整*/
})
//CloseボタンをクリックしたらLightBoxを閉じる
$("a#close-panel3").click(function(){
$("#BlackWindow3, #lightbox-panel3").fadeOut(300);/*フォードアウトの速度は数値を調整*/
})
//背景の黒地をクリックしたらLightBoxを閉じる
$("#BlackWindow3").click(function(){
$("#BlackWindow3, #lightbox-panel3").fadeOut(300);/*フォードアウトの速度は数値を調整*/
})
})

</script>

<!--タブ表示非表示切り替え-->
<script>
$(document).ready(function() {
 
        $('.area:first').show();
    $('.tab li:first').addClass('active');


    $('.tab li').click(function() {

        $('.tab li').removeClass('active');
        $(this).addClass('active');
        $('.area').hide();

    
        $($(this).find('a').attr('href')).fadeIn();
        return false;
    });
});
</script>


<script>
$(document).ready(function() {
 
    $('.clothArea:first').show();
    $('#clothTab button:first').addClass('active');


    $('#clothTab button').click(function() {

        $('#clothTab button').removeClass('active');
        $(this).addClass('active');
        $('.clothArea').hide();

    
        $($(this).find('a').attr('href')).fadeIn();
        return false;
    });
});
</script>

<script>
$(document).ready(function() {
 
        $('.aceArea:first').show();
    $('.aceCategory button:first').addClass('active');


    $('.aceCategory button').click(function() {

        $('.aceCategory button').removeClass('active');
        $(this).addClass('active');
        $('.aceArea').hide();

    
        $($(this).find('a').attr('href')).fadeIn();
        return false;
    });
});
</script>


<script>
$(document).ready(function() {
 
        $('.freeArea:first').show();
    $('.freeCategory button:first').addClass('active');


    $('.freeCategory button').click(function() {

        $('.freeCategory button').removeClass('active');
        $(this).addClass('active');
        $('.freeArea').hide();

    
        $($(this).find('a').attr('href')).fadeIn();
        return false;
    });
});
</script>




<!-- 選択のやつ-->
<script>
$(document).ready(function() {

    $('td div').click(function() {

        $('td div').removeClass('selected');
        $(this).addClass('selected');
    });
});
</script>

</head>
<body>
    <div id="container">
        <div class="makerInner">  
          <a href="index.html"><img src="images/logo.png" class="logo"></a>
            <!--canvas部分-->
            <div class="box2">
            <?php include "canvas.php"; ?>
            <?php include "result.php"; ?>
            </div>

            <!--タブとパーツ一覧-->
            <?php include "parts.php"; ?>
            
            <div class="clear"></div>
          
        </div><!--.inner end-->
</div><!--#container end-->



</body>
</html>