<?php
$post_id = $_POST['post_id'];
$pdo = new PDO(
    "mysql:dbname=work;host=localhost",
    "root",
    "root",
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`")
);
$sql = " SELECT * FROM `post` WHERE id = $post_id ";
$post_array = $pdo->query($sql);
$post_array_fetch = $post_array->fetch();

$name = $post_array_fetch['name'];
$contents = $post_array_fetch['contents'];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <style>
        .contents {
            width: 400px;
            height: 300px;
        }
    </style>
</head>

<body>
    <h1>掲示板</h1>
    <section>
        <h2>新規投稿</h2>
        <form action="update.php" method="post">
            名前 : <input type="text" name="name" value="<?php echo $name ?>"><br>
            投稿内容:<br> <textarea type="text" name="contents" class="contents" value=""><?php echo $contents ?></textarea><br>
            <div><input type="hidden" name="post_id" value=<?php echo $post_id ?>></div>
            <button type="submit">更新</button>
            <button type="button" onclick="location.href='test3_2.php'">戻る</button>
        </form>
    </section>
</body>

</html>