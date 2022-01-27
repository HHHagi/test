<?php
 $user_choice = "";
 $random_choice = "";
 $choice = array("グー","チョキ","パー");

function jyanken($user,$computer){

switch($user){
    case $computer:
        $result = 'あいこ';
        break;
    case "グー":
        $result = ($computer === 'チョキ') ? 'あなたの勝利です！' : 'あなたの敗北です。。。';
        break;
    case "チョキ":
        $result = ($computer === 'パー') ? 'あなたの勝利です！' : 'あなたの敗北です。。。';
        break;
    case "パー":
        $result = ($computer === 'グー') ? 'あなたの勝利です！' : 'あなたの敗北です。。。';
        break;
}
return $result;
}

if(!empty($_POST['user_choice'])) {
    $user_choice = $_POST['user_choice'];
    $random = array_rand($choice);
    $random_choice = $choice[$random];
    $judgement = jyanken($user_choice,$random_choice);
}

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
    <?php if(!empty($judgement)) echo  $judgement; ?>
</body>
</html>