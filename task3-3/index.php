<?php
//DB接続ファイル読み込み
require_once "pdo_connect.php";

//postsテーブル読み込み
$posts_read = $pdo->query("SELECT * FROM posts");

//id初期値
$counter = 1;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題③-2</title>
</head>

<body>
    <h1>掲示板</h1>
    <h2>新規投稿</h2>
    <form action="submit.php" method="POST">
        <div>
            <label for="name">name: </label>
            <input type="text" name="name">
        </div>
        <label for="content">投稿内容:</label>
        <div>
            <textarea name="content"></textarea>
        </div>
        <div>
            <button type="submit">投稿</button>
        </div>
    </form>

    <h2>投稿内容一覧</h2>
    <?php foreach ($posts_read as $read) : ?>
        <p>No:<?php echo $counter ?></p>
        <p>名前:<?php echo htmlspecialchars($read["name"], ENT_QUOTES, "UTF-8") ?></p>
        <p>投稿内容:<?php echo htmlspecialchars($read["content"], ENT_QUOTES, "UTF-8") ?></p>
        <form action="delete.php" method="POST">
            <input type="hidden" name="delete_id" value="<?php echo $read["id"] ?>">
            <input type="submit" name="delete" value="削除">
        </form>
        <?php $counter++; ?>
    <?php endforeach ?>
</body>

</html>