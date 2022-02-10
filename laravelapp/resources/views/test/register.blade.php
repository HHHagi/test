
<html>
<head>
<title>ユーザー登録画面</title>
<style>
</style>
</head>
<body>
 <h1>ユーザー登録</h1>
 <form action="login" method="post">
     @csrf
<table>
    <tr><th>名前</th><td><input type="text"></td></tr>
    <tr><th>Eメール</th><td><input type="text"></td></tr>
    <tr><th>パスワード</th><td><input type="password"></td></tr>
    <tr><th>パスワード再入力</th><td><input type="password"></td></tr>
</table>
<button type="submit">ログイン</button>
 </form>
</boby>

</html>