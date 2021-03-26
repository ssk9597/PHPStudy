<?php
//DB接続ファイル読み込み
require_once "pdo_connect.php";

//クリックされた投稿のID
$id =  $_POST["edit_id"];

//更新内容
$name = $_POST["name"];
$content = $_POST["content"];

//postsテーブルで$idが一致したrowを更新
$post_update = $pdo->prepare("UPDATE posts SET name = :name, content = :content WHERE id = :id");
$post_update->bindParam(":name", $name, PDO::PARAM_STR);
$post_update->bindParam(":content", $content, PDO::PARAM_STR);
$post_update->bindValue(":id", $id, PDO::PARAM_INT);
$post_update->execute();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題③-3</title>
</head>

<body>
    <h2>編集が完了しました</h2>
    <button>
        <a href="/task3-3/index.php">投稿一覧へ戻る</a>
    </button>
</body>

</html>