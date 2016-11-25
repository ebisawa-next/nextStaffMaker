<!--全身-->
<div class="allBody">
<button class="btn" onclick="screenshot('#bgColorParts')"><a href="#" id="show-panel2">全身を出力する</a></button>

    <div id="lightbox-panel2">
        <h1><img src="images/complete.png"></h1>
        <div class="screenLeft">
            <img class="screen_image">
        </div>
        <div class="screenRight">
            <a id="download" href="#" download="uniq_icon.png"></a>
             <p align="center">
            <a id="close-panel2" href="#" class="margintop"></a>
                  </p>
        </div>
        <div class="clear"></div>
    </div>
	<div id="BlackWindow2"></div><!--黒背景-->
</div>


<!-- 一部切り取り-->
<div class="onlyFace">
<button class="btn" onclick="screenshot('#kiritori_screen')"><a href="#" id="show-panel2">顔のみ出力する</a></button><!--アイコン生成ボタン-->
</div><!--box2-->


<!-- canvas上の画像をスクリーンショット＆ダウンロード-->
<script>
function screenshot( selector) {
    var element = $(selector)[0];
    html2canvas(element, { onrendered: function(canvas) {
        var imgData = canvas.toDataURL();
        $('.screen_image')[0].src = imgData;
        $('#download')[0].href = imgData;
        $('#download')[0].innerHTML = "　　　　　　　　　　";
    }});
}

function erase_screenshot() {
    $('.screen_image')[0].src = "";
    $('#download')[0].href = "#";
    $('#download')[0].innerHTML = "";
}
</script>


