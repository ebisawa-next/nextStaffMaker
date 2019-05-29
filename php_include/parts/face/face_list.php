<div class="mod-partsList">
    <ul class="partsList">
        <?php
            //画像ファイル一覧を表示するパスを指定する
            // $path = "images/parts/face/";
            $array = scandir($path,1);
            $num = count($array);

            for ($i=0;$i<$num;$i++){
                //$filenameにファイル名を設定
                $filename = $path . "cv/" . $array[$i];
                $filenameThumb = $path . $array[$i];
                if  (Eregi('png$', $filename)) {
                    print("<li class=parts><div><input type=image name=face img src= " .$filenameThumb. " onClick=bgImgChange('url($filename)','$genre');></div></li>");
                }
            }
        ?>
        <li class="parts">
            <div><input type="image" name="mayu" onClick="bgImgChange('url(images/parts/face/cv/body01_sk01.png)','bodyLine');" img src= "images/parts/face/cv/body01_sk00.png"></div>
        </li>
        <li class="parts">
            <div><input type="image" name="mayu" onClick="bgImgChange('url(images/parts/face/cv/body02_sk01.png)','bodyLine');" img src= "images/parts/face/cv/body02_sk00.png"></div>
        </li>
    </ul>
</div>
