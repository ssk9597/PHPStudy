<?php
//DB接続ファイル読み込み
require_once "pdo_connect.php";

//削除した投稿のID
$delete_id = $_POST["delete_id"];

//postsテーブルから削除
$posts_delete = "DELETE FROM posts where id = :delete_id";
$delete = $pdo->prepare($posts_delete);
$delete->bindParam(":delete_id", $delete_id, PDO::PARAM_INT);
$delete->execute();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題③-2</title>
</head>

<body>
    <h2>投稿の削除が完了しました</h2>
    <button>
        <a href="/task3-2/index.php">投稿一覧へ戻る</a>
    </button>
</body>

</html>