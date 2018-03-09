<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Entry</title>
  <link rel="stylesheet" href="entry.css">
</head>
<body>
  <!-- header -->
    <header>
      <div class="menu">
        <a href="file:///Applications/XAMPP/xamppfiles/htdocs/01_03_kadai/top.html" class="top"><img src="logo.jpg" alt=""></a>
        <a href="file:///Applications/XAMPP/xamppfiles/htdocs/01_03_kadai/about.html" class="about">About</a>
        <a href="http://localhost/01_03_kadai/entry.php" class="entry">Entry</a>
        <a href="file:///Applications/XAMPP/xamppfiles/htdocs/01_03_kadai/vote.php" class="vote">Vote</a>
        <a href="file:///Applications/XAMPP/xamppfiles/htdocs/01_03_kadai/ranking.php" class="ranking">Ranking</a>
      </div>
    </header>

    <!-- main -->
    <main>
      <span>スマホ・デジカメ・一眼レフ等で撮った写真など</span><br>
      <span>写真はどんなものでも構いません</span><br>
      <span>みなさまからの沢山のエントリーお待ちしております！</span>
    </main>
    <!-- form -->
    <!-- ここからvote.phpにデータを送ります -->
    <form class="form" method="post" action="entry2.php" enctype="multipart/form-data">
          <p><b>お名前：</b><input type="text" name="name" value="" class="name"  size="40" maxlength="20"></p>
          <p><b>写真タイトル：</b><input type="text" name="title" value="" class="title" size="40" maxlength="20"></p>
          <p><b>UPLOAD：</b><input type="file" name="file" value="" class="file" size="40" maxlength="20"></p>
          <p><input type="submit" name="" value="Entry"  class="submit" ></p>
          <p><input type="reset" name="" value="リセット"  class="reset"></p>
      </form>

  <!-- footer -->
  <footer>
    <div class="footer">
      第 2 回   フ ォ ト コ ン テ ス ト
    </div>
  </footer>
</body>
</html>
