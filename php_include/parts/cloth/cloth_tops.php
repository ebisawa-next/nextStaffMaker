<div class="partsList">
<?php
//画像ファイル一覧を表示するパスを指定する
$none = "images/none_s.png";
$path = "images/parts/cloth/tops";
$path_one = "images/parts/cloth/onepiece";
 
//パスの表示
print("");
 
//文法  scandir( パス ,[ ソート順 ] )
//scandir
//ソート順が省略された場合は、アルファベットの昇順にソートする
//ソート順に"1"が指定された場合は、アルファベットの降順にソートする
//
//昇順にソートする場合はソート順を省略する
//$array = scandir($path);
 
//降順にソートする場合はソート順に"1"を指定する
$array = scandir($path,1);
$array_one = scandir($path_one,1);
 
//count命令により配列の個数を取得する
$num = count($array);
$num_one = count($array_one);
 
//HTML文を出力　テーブルの開始を指定
print("<table border=0><tr>");
?><td><div><a name="cTab1"><input type="image" name="mayu" onClick="bgImgChange('url(images/none.png)','clothParts');" img src= "images/none_s.png"></a></div></td><?php
//横に並べる画像の最大数を設定する
$max = 5;
 
//カウント数の初期化
$cnt = 0;
 
//配列の数だけ繰り返す
for ($i=0;$i<$num;$i++){
    //$filenameにファイル名を設定
    $filename = "images/parts/cloth/tops/" . $array[$i];
 	$filename2 = "images/parts/cloth/tops/cv/" . $array[$i];

    //ファイル名の拡張子が｢gif｣または｢GIF｣または｢jpg｣または｢JPG｣
    //または｢JPEG｣または｢png｣または｢PNG｣の場合は実寸表示の
    //リンク付きで画像を表示する
    if (Eregi('png$', $filename)) { //ファイル直下のpngファイルを持ってくる

        print("<td><div><input type=image name=body img src= " .$filename. " onClick=bgImgChange('url($filename2)','clothParts');></div></td>");
        //カウント数の初期化
        $cnt = $cnt + 1;

        // カウント数の判定 最大数以上の場合は改行し、カウントを初期化する
        if ($cnt >= $max) {
            print("</tr><tr>");
            $cnt = 0;
        }
    }
}
 ?></tr></table><?php
//HTML文を出力　テーブルの終了を指定
print("");
print("<table border=0><tr>");
?><td><div><input type="image" name="mayu" onClick="bgImgChange('url(images/none.png)','onepieceParts');" img src= "images/none_s.png"></div></td><?php
for ($i=0;$i<$num_one;$i++){
    //$filenameにファイル名を設定
    $filename3 = "images/parts/cloth/onepiece/" . $array_one[$i];
    $filename4 = "images/parts/cloth/onepiece/cv/" . $array_one[$i];

    if (Eregi('png$', $filename3)) {
        print("<td><div><input type=image name=body img src= " .$filename3. " onClick=bgImgChange('url($filename4)','onepieceParts');></div></td>");
    
        //カウント数の初期化
        $cnt = $cnt + 1;
         
        //カウント数の判定 最大数以上の場合は改行し、カウントを初期化する
        if ($cnt >= $max) {
            print("</tr><tr>");
            $cnt = 0;
        }
    }
}
print("");
?>
</tr>
</table>
</div>