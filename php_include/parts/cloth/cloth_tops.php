<<<<<<< HEAD

<div class="partsList">


<table border=0><tr><td><div><input type="image" name="mayu" onClick="bgImgChange('url(images/none.png)','clothParts');" img src= "images/none_s.png"></div></td>
=======
<div class="partsList cTab1">
>>>>>>> 8708fc90eb195bd573a38bd303fd5b369777bb67
<?php
//画像ファイル一覧を表示するパスを指定する
$path = "images/parts/cloth/tops";
 
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
 
//count命令により配列の個数を取得する
$num = count($array);

//HTML文を出力　テーブルの開始を指定
<<<<<<< HEAD
print("");
 
=======
print("<table border=0><tr>");
>>>>>>> 8708fc90eb195bd573a38bd303fd5b369777bb67
//横に並べる画像の最大数を設定する
$max = 6;
 
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
//HTML文を出力　テーブルの終了を指定
print("");
?>
<<<<<<< HEAD
</tr></table>

<?php
//画像ファイル一覧を表示するパスを指定する
$path = "images/parts/cloth/onepiece";
 
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
 
//count命令により配列の個数を取得する
$num = count($array);
 
//HTML文を出力　テーブルの開始を指定
print("<table border=0><tr>");
 
//横に並べる画像の最大数を設定する
$max = 5;
 
//カウント数の初期化
$cnt = 0;
 
//配列の数だけ繰り返す
for ($i=0;$i<$num;$i++){
    //$filenameにファイル名を設定
    $filename = "images/parts/cloth/onepiece/" . $array[$i];
    $filename2 = "images/parts/cloth/onepiece/cv/" . $array[$i];
 
    //ファイル名の拡張子が｢gif｣または｢GIF｣または｢jpg｣または｢JPG｣
    //または｢JPEG｣または｢png｣または｢PNG｣の場合は実寸表示の
    //リンク付きで画像を表示する
     
    if  (
         Eregi('png$', $filename)) {
        print("<td><div><input type=image name=body img src= " .$filename. " onClick=bgImgChange('url($filename2)','clothParts');></div></td>");
    
    
        
    
    //print("<td><img src = ".$filename." ></td>");
         
         //print '<input type="button" value="るな" onClick="location.href=\''.$hoge.'\'">';
         
         
         //print("<td><input type=" image " img src= " .$filename." onClick = " bgImgChange('url( .$filename. )','bgImg_hoge1'); " >';

         //<input type="image" name="hoge" onClick="bgImgChange('url( .$filename. )','bgImg_hoge1');"  src="img/face01.png" class="ava">
         
         
        //カウント数の初期化
        $cnt = $cnt + 1;
         
        //カウント数の判定 最大数以上の場合は改行し、カウントを初期化する
        if ($cnt >= $max) {
            print("</tr><tr>");
            $cnt = 0;
        }
    }
}
//HTML文を出力　テーブルの終了を指定
print("");
 
?>
</td></tr></table>

=======
</tr>
</table>
>>>>>>> 8708fc90eb195bd573a38bd303fd5b369777bb67
</div>