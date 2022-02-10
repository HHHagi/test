<html>
<head>
<title>ログイン登録画面</title>
<style>
</style>
</head>
<body>
 <h1>ログイン登録</h1>
 <form action="register" method="post">
     @csrf
 Eメール<input type="text"><br>
 パスワード<input type="password"><br>
 <button type="submit">ログイン</button>
 </form>
</boby>
</html>