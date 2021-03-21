<?php
//初期化
$fizzNum = "";
$buzzNum = "";

//整数の値が入った時
function setInt($fizzNum, $buzzNum)
{
    return ctype_digit($fizzNum) && ctype_digit($buzzNum);
}

//FizzBuzzを表示
function setFizzBuzz($i, $fizzNum, $buzzNum)
{
    if ($i % $fizzNum === 0 && $i % $buzzNum === 0) {
        return "FizzBuzz {$i}";
    } elseif ($i % $fizzNum === 0) {
        return "Fizz {$i}";
    } elseif ($i % $buzzNum === 0) {
        return "Buzz {$i}";
    }
}

//実行をクリック
if (isset($_POST["run"])) {
    //fizz
    $fizzNum = $_POST["fizz"];
    //buzz
    $buzzNum = $_POST["buzz"];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題②-1</title>
</head>

<body>
    <h2>FizzBuzz問題</h2>
    <form method="POST">
        <div>
            <span>FizzNum:</span>
            <input type="text" name="fizz" placeholder="整数値を入力してください">
        </div>
        <div>
            <span>BuzzNum:</span>
            <input type="text" name="buzz" placeholder="整数値を入力してください">
        </div>
        <input type="submit" name="run" value="実行">
    </form>

    <div>
        <p>【出力】</p>
        <?php if (isset($_POST["run"])) : ?>
            <!-- 整数 -->
            <?php if (setInt($fizzNum, $buzzNum)) : ?>
                <?php for ($i = 1; $i < 100; $i++) : ?>
                    <div><?php echo setFizzBuzz($i, $fizzNum, $buzzNum) ?></div>
                <?php endfor ?>
                <!-- 整数以外 -->
            <?php else : ?>
                <p>整数値を入力してください</p>
            <?php endif ?>
        <?php endif ?>
    </div>
</body>

</html>