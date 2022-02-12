<?php

$fruits = ['apple', 'orange', 'strawberry'];


if(!empty($_POST['input01'])) {

    $input01 = $_POST['input01'];

    $result = in_array($input01, $fruits);
    
    $ans01 = "{$input01}は、配列に含まれています。";
    
    $ans02 = "{$input01}は、配列に含まれていません。";
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form  method="post">
    <input type="text" name="input01">
    <input type="submit" value="検索"></br>
    <?php if($result) echo $ans01; ?>
    <?php if(!$result) echo $ans02; ?>
</form>
</body>
</html>