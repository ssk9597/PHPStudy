<?php
//DB接続ファイル読み込み
require_once "pdo_connect.php";

//フォーム入力値
//名前
$name = $_POST["name"];
//投稿内容
$content = $_POST["content"];

//postsテーブルに追加
$posts_create = $pdo->prepare("INSERT INTO posts (name, content) VALUES (:name, :content)");
$posts_create->bindParam(":name", $name, PDO::PARAM_STR);
$posts_create->bindParam(":content", $content, PDO::PARAM_STR);
$posts_create->execute();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題③-3</title>
</head>

<body>
    <h2>投稿が完了しました。</h2>
    <button>
        <a href="/task3-3/index.php">投稿一覧へ戻る</a>
    </button>
</body>

</html>