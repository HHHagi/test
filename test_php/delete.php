<?php
$post_id = $_POST['post_id'];

$pdo = new PDO(
    "mysql:dbname=work;host=localhost",
    "root",
    "root",
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`")
);
$getPost = $pdo->prepare("DELETE FROM post WHERE id = $post_id");
$getPost->execute();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
</head>

<body>
    <h1>掲示板</h1>
    <section>
        <h2>投稿の削除が完了しました。</h2>
        <button onclick="location.href='test3_2.php'">投稿一覧へ戻る</button>
    </section>
</body>

</html>