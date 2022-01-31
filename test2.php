<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>test2</title>
</head>

<body>
    FizzBuzz問題
    <form method="post">
        FIzzNum<input type="text" name="fizz_num"><br>
        BuzzNum<input type="text" name="buzz_num"><br>
        <input type='submit' value='実行'><br>
    </form>
    【出力】<br>
</body>

</html>

<?php
error_reporting(0);

$fizz_num = $_POST["fizz_num"];
$buzz_num = $_POST["buzz_num"];
$fizzbuzz_num = $fizz_num * $buzz_num;

if (!empty($fizz_num) &&  !empty($buzz_num) && ctype_digit($fizz_num) && ctype_digit($buzz_num)) {
    $error_check = true;
} else {
    $error_check = false;
};

if (!$error_check) {
    echo "整数値を入力してください。";
} else {
    for ($i = 1; $i < 100; $i++) {
        if ($i %  $fizzbuzz_num == 0) {
            echo "FizzBuzz" . " $i" . "<br>";
        } elseif ($i %  $fizz_num == 0) {
            echo "Fizz" . " $i" . "<br>";
        } elseif ($i %  $buzz_num == 0) {
            echo "Buzz" . " $i" . "<br>";
        }
    }
}
?>