<?php
$post_id = $_POST['post_id'];;
$name = $_POST["name"];
$contents = $_POST["contents"];

//DB接続情報を設定。
$pdo = new PDO(
    "mysql:dbname=work;host=localhost",
    "root",
    "root",
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`")
);
//SQLを実行。
$regist = $pdo->prepare("UPDATE `post` SET name=:name,contents=:contents WHERE id=:id");
$regist->bindValue(":name", $name);
$regist->bindValue(":contents", $contents);
$regist->bindValue(":id", $post_id);
$regist->execute();
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
        <h2>編集が完了しました。</h2>
        <button onclick="location.href='test3_2.php'">投稿一覧へ戻る</button>
    </section>
</body>

</html>