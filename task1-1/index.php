<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題①-1</title>
</head>

<body>
    <h2>日本の首都は？</h2>
    <form action="index.php" method="POST">
        <input type="text" name="capital">
        <input type="submit" value="OK">
    </form>
    <?php
    $answer = $_POST["capital"];
    if ($answer) {
        if ($answer == "東京") {
            echo "正解";
        } else {
            echo "不正解";
        }
    }
    ?>
</body>

</html>