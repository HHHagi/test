<?php

if(!empty($_POST['user_choice'])) {
 $user_choice = $_POST['user_choice'];
}

$choice = array("グー","チョキ","パー");
$random = array_rand($choice);
$random_choice = $choice[$random];

function jyanken($user,$computer){
if ($user === $computer) {
    $result = 'あいこ';
// 勝ち条件
} elseif (
    $user === 'グー' && $computer === 'チョキ' ||
    $user === 'チョキ' && $computer === 'パー' ||
    $user === 'パー' && $computer === 'グー'
    ) {
    $result = 'あなたの勝利です！';
// どの条件とも一致しない（負け）
} else {
    $result = 'あなたの敗北です。。。';
}
return $result;
}

$judgement = jyanken($user_choice,$random_choice);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>test1_4</title>
</head>
<body>
    <form  method="post">
        <select name="user_choice">
            <option value='グー'>グー</option>
            <option value='チョキ'>チョキ</option>
            <option value='パー'>パー</option>
        </select>
        <input type='submit' value='じゃんけん'>
    </form>
    <?php echo "自分：".$user_choice; ?><br>
    <?php echo "相手：".$random_choice; ?><br>
    <?php echo $judgement; ?>
</body>
</html>