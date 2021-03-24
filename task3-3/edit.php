<?php
//DB接続ファイル読み込み
require_once "pdo_connect.php";

//クリックされた投稿のID
$id =  $_GET["edit_id"];

//postsテーブルで$idが同じものを取得
$post_read = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
$post_read->bindValue(":id", $id, PDO::PARAM_INT);
$post_read->execute();

//テキストエリアに値を設定
foreach ($post_read as $read) {
    $name = $read["name"];
    $content = $read["content"];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題③-3</title>
</head>

<body>
    <h2>編集ページ</h2>
    <form action="edit-complete.php" method="POST">
        <div>
            <label for="name">name: </label>
            <input type="text" name="name" value="<?php echo $name ?>">
        </div>
        <label for="content">投稿内容:</label>
        <div>
            <textarea name="content"><?php echo $content ?></textarea>
        </div>
        <div>
            <input type="hidden" name="edit_id" value="<?php echo $id ?>">
            <button type="submit" name="update">更新</button>
            <button><a href="/task3-3/index.php">戻る</a></button>
        </div>
    </form>
</body>

</html>