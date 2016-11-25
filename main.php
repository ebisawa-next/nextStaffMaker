<?php

// ライブラリ読み込み
require_once('UltimateOAuth.php');

// セッション開始
session_start();

// セッションタイムアウトチェック
if (!isset($_SESSION['uo'])) {
    die('Error[-1]: Session timeout.');
}
$uo = $_SESSION['uo'];

// ツイートしてみましょう
$uo->post('statuses/update', 'status=テストツイート！');
