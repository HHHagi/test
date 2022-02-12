<?php
$pdo = new PDO(
    "mysql:dbname=work;host=localhost",
    "root",
    "root",
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`")
);
$getPost = $pdo->prepare("SELECT * FROM post");
$getPost->execute();
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

        .post {
            border: 4px double #8EF1FF;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <h1>掲示板</h1>
    <section>
        <h2>新規投稿</h2>
        <form action="send.php" method="post">
            名前 : <input type="text" name="name" value=""><br>
            投稿内容:<br> <textarea type="text" name="contents" class="contents" value=""></textarea><br>
            <button type="submit">投稿</button>
        </form>
    </section>

    <section>
        <h2>投稿内容一覧</h2>
        <?php $post_number = 1; ?>
        <?php foreach ($getPost as $loop) : ?>
            <article class="post">
                <form action="edit.php" method="post">
                    <div>No：<?php echo $post_number;
                            $post_number++; ?></div>
                    <div>名前：<?php echo $loop['name'] ?></div>
                    <div>投稿内容：<?php echo $loop['contents'] ?></div>
                    <div><input type="hidden" name="post_id" value=<?php echo $loop['id'] ?>></div>
                    <div><button type="submit">編集</button></div>
                </form>
                <form action="delete.php" method="post">
                    <div><input type="hidden" name="post_id" value=<?php echo $loop['id'] ?>></div>
                    <div><button type="submit">削除</button></div>
                </form>
            </article>
        <?php endforeach; ?>
    </section>

</body>

</html>