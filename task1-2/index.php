<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題①-2</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="fruit">
        <input type="submit" value="検索">
    </form>
    <?php
    $fruits = array("apple", "orange", "strawberry");

    $searchWord = $_POST["fruit"];

    foreach ($fruits as $fruit) {
        if ($searchWord === $fruit) {
            $isExist = $fruit;
        }
    }

    if ($searchWord) {
        if ($isExist) {
            echo "{$searchWord}は、配列に含まれています。";
        } else {
            echo "{$searchWord}は、配列に含まれていません。";
        }
    }
    ?>
</body>

</html>