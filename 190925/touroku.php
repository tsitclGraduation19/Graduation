<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>登録画面</title>
<style>
  .Header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: auto;
    padding: 10px;
    background-color: blue;
    color: white;
    text-align: center;
    font-weight: 700;
    font-size: 100px;
  }
  body {
    margin: 20px;
    padding: 150px 10px 100px 10px;
    background-color: white;
  }
  h1 {
    font-size: 80px;
  }
  p {
    font-size: 70px;
  }
  input[type="text"] {
    height: 50px;
    width: 900px;
    font-size: 50px;
  }  
  input[type="submit"] {
    font-size: 80px;
  }
</style>
</head>
<header>
  <div class="Header">ログイン</div>
</header>
<body>
  <h1>名前を登録してください</h1><br>
  <form action=".php" method="post">
    <p>ID</p><input type="text" name="id"><br>
    <p>パスワード</p><input type="text" name="password"><br><br><br>
    <input type="submit" value="ログイン">
  </form>
</body>
</html>