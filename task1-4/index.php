<?php
//じゃんけん勝敗
function setResult($player, $com)
{
    //じゃんけん
    if ($player === "グー") {
        switch ($com) {
            case "グー":
                $result = "あいこです！";
                break;
            case "チョキ":
                $result = "あなたの勝ちです！";
                break;
            case "パー":
                $result = "あなたの負けです！";
                break;
        }
    } elseif ($player === "チョキ") {
        switch ($com) {
            case "グー":
                $result = "あなたの負けです！";
                break;
            case "チョキ":
                $result = "あいこです！";
                break;
            case "パー":
                $result = "あなたの勝ちです！";
                break;
        }
    } elseif ($player === "パー") {
        switch ($com) {
            case "グー":
                $result = "あなたの勝ちです！";
                break;
            case "チョキ":
                $result = "あなたの負けです！";
                break;
            case "パー":
                $result = "あいこです！";
                break;
        }
    }
    return $result;
};

//じゃんけんをクリック
if ($_POST["submit"]) {
    //相手のじゃんけんの手
    $array = array("グー", "チョキ", "パー");
    $com = $array[array_rand($array, 1)];

    //自分のじゃんけんの手
    $player = $_POST["select"];

    //関数の実行
    setResult($player, $com);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題①-4</title>
</head>

<body>
    <form method="POST">
        <select name="select">
            <option value="グー">グー</option>
            <option value="チョキ">チョキ</option>
            <option value="パー">パー</option>
        </select>
        <div>
            <input type="submit" name="submit" value="じゃんけん！">
        </div>
    </form>
    <div><?php echo "自分：{$player}"; ?></div>
    <div><?php echo "相手：{$com}"; ?></div>
    <div><?php echo setResult($player, $com); ?></div>
</body>

</html>