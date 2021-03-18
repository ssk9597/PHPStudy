<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題①-3</title>
</head>

<body>
    <?php
    $questions = array("問題" => "日本の首都は？");
    $answers = array("回答1" => "大阪", "回答2" => "北海道", "回答3" => "箱根", "回答4" => "東京");

    foreach ($questions as $key => $value) :
    ?>
        <h2><?php echo "{$key} {$value}" ?></h2>
    <?php
    endforeach;

    foreach ($answers as $key => $value) :
    ?>
        <p><?php echo "{$key} {$value}" ?></p>
    <?php endforeach; ?>

</body>

</html>