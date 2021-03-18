<?php
$playerHand="";
$pcHand="";
$result="";


// ここから処理を記述
// じゃんけんの手を配列に代入
$hands = ['グー', 'チョキ', 'パー'];

// プレイヤーの手がPOSTされたら
if (isset($_POST['playerHand'])) {
    // プレイヤーの手を代入
    $playerHand = $_POST['playerHand'];

    // PCの手をランダムで選択
    $key = array_rand($hands);
    $pcHand = $hands[$key];

    // 勝敗を判定
    if ($playerHand == $pcHand) {
        $result ='あいこ';
    } elseif ($playerHand == 'グー' && $pcHand == 'チョキ') {
        $result = '勝ち';
    } elseif ($playerHand == 'チョキ' && $pcHand == 'パー') {
        $result = '勝ち';
    } elseif ($playerHand == 'パー' && $pcHand == 'グー') {
        $result = '勝ち';
    } else {
        $result = '負け';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>じゃんけん</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <header>
        <h1>じゃんけん</h1>
    </header>
    <main>
    <h2>出す手を選んで勝負してください</h2>
        <form action="" method="post">
        <p>
        <input type="radio" name="playerHand" value="グー" <?php echo $playerHand=='グー' ? 'checked' : '' ; ?> > グー
        <input type="radio" name="playerHand" value="チョキ" <?php echo $playerHand=='チョキ' ? 'checked' : '' ; ?> > チョキ
        <input type="radio" name="playerHand" value="パー" <?php echo $playerHand=='パー' ? 'checked' : '' ; ?> > パー
        </p>
        <input type="submit" value="送信する">
        </form>
        <div>
            <p>勝敗：<?= $result ?></p>

            あなた：<?= $playerHand ?><br>
            コンピューター：<?= $pcHand ?><br>

            <p><a href="index.php">>>もう一回勝負する</a></p>
        </div>
    </main>
</div>
</body>
</html>