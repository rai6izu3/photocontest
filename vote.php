<?php
//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=01_03_kadai_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所
$stmt = $pdo->prepare("SELECT * FROM 01_03_kadai_table");
$status = $stmt->execute();

//３．データ表示
$view=""; //受け取るための変数を事前に作ります。
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>";
    $view .= "id:{$result['id']}<br>";
    $view .= "name:{$result['name']}<br>";
    $view .= "title:{$result['title']}<br>";
    $view .= "<img src='{$result['file']}'><br>";
    $view .= "</p>";
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>投票</title>
<link rel="stylesheet" href="css/range.css">
<link href="vote.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
  <header>
    <div class="menu">
      <a href="file:///Applications/XAMPP/xamppfiles/htdocs/01_03_kadai/top.html" class="top"><img src="logo.jpg" alt=""></a>
      <a href="file:///Applications/XAMPP/xamppfiles/htdocs/01_03_kadai/about.html" class="about">About</a>
      <a href="http://localhost/01_03_kadai/entry.php" class="entry">Entry</a>
      <a href="file:///Applications/XAMPP/xamppfiles/htdocs/01_03_kadai/vote.php" class="vote">Vote</a>
      <a href="file:///Applications/XAMPP/xamppfiles/htdocs/01_03_kadai/ranking.php" class="ranking">Ranking</a>
    </div>
  </header>

  <main>
    <span>エントリー写真の中から好きな写真に投票をしよう！</span>
  </main>
  <?=$view?>
<form class="voteform" action="vote2.php" method="post">
  <input type="" name="" value="">
  <input type="submit" name="" value="投票する！">
</form>


  <footer>
    <div class="footer">
      第 2 回   フ ォ ト コ ン テ ス ト
    </div>
  </footer>
</body>
</html>
