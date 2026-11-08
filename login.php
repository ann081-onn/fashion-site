<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>会員登録</title>
<link rel="stylesheet" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&display=swap" rel="stylesheet">

<header class="site-header">
  <div class="site-header__inner">
    <div class="site-header__logo">
      <a href="#">A.noël.</a>
    </div>

    <nav class="site-header__nav">
      <ul class="site-header__nav-list">
        <li><a href="index.html#concept">CONCEPT</a></li>
        <li><a href="index.html#collection">COLLECTION</a></li>
        <li><a href="index.html#about">ABOUT</a></li>
        <li><a href="http://localhost/fashion/login.php">
    LOGINPAGE
</a></li>
      </ul>
    </nav>
  </div>
</header>

<style>
body{
    font-family: serif;
    background:#f8f8f8;
}

.form-box{
    width:800px;
    margin:200px auto;
    padding:100px;
    background:whitesmoke;
    box-shadow:100 100 100px rgba(0,0,0,0.1);
}

input{
    width:100%;
    padding:10px;
    margin-bottom:15px;
}

button{
    width:100%;
    padding:10px;
    background:#333;
    color:white;
    border:none;
}
</style>
</head>
<body>

<div class="form-box">
<h2>会員登録</h2>

<form action="register.php" method="post">

<label>お名前</label>
<input type="text" name="user_name">

<label>メールアドレス</label>
<input type="email" name="email">

<?php if(isset($_GET['email_error'])) { ?>
    <p style="color:red;">
        メールアドレスは既に登録されています。
    </p>
<?php } ?>

<label>パスワード</label>
<input type="password" name="password">

<button type="submit">登録する</button>

</form>
</div>

<!-- =========================
     ABOUT
========================= -->
<section class="section" id="about">
  <div class="section__inner">

    <header class="section__header">
      <p class="section__label">ABOUT</p>
      <h2 class="section__title">A.noël.について</h2>
    </header>

    <p>
      A.noël.は福岡を拠点にしたアパレルブランドです。<br>
      皆様の日々に少しでもトクベツをお届けできますように、、、
    </p>

  </div>
</section>

<section class="footer-visual"></section>

</body>
</html>