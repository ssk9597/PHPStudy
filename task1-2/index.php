<?php
//条件
$fruits = array("apple", "orange", "strawberry");

//検索ワード
$searchWord = $_POST["fruit"];

//条件を満たすかどうか
foreach ($fruits as $fruit) {
    if ($searchWord === $fruit) {
        $isExist = $fruit;
    }
}

//条件によってメッセージを分岐
if ($_POST["search"]) {
    if ($isExist) {
        $answer = "{$searchWord}は、配列に含まれています。";
    } else {
        $answer = "{$searchWord}は、配列に含まれていません。";
    }
}
?>

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
        <input type="submit" name="search" value="検索">
    </form>
    <div>
        <?php echo $answer; ?>
    </div>
</body>

</html>