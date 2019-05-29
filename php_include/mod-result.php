<div class="mod-result">
    <!--全身-->
    <ul class="buttons">
        <li class="button">
            <p class="prg-resultButton btn is-body" href="#" onclick="screenshot('#bgColorParts')">全身を出力する</p>
        </li>
        <li class="button">
            <p class="prg-resultButton btn is-face" href="#" onclick="screenshot('#kiritori_screen')">顔のみ出力する</p>
        </li>
    </ul>

    <div class="modal prg-lightbox">
        <div id="lightbox-panel2">
            <h1><img src="images/default/complete.png"></h1>
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
        <div id="BlackWindow2" class="prg-lightboxBg"></div>
    </div>
</div>

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


