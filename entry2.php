<?php
// entry.phpçデータ受け取り
$name   = $_POST["name"];
$title  = $_POST["title"];
$file = $_POST["file"];


//DB接続
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
try {
  $pdo = new PDO('mysql:dbname=01_03_kadai_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成 ここはDBに実際にsqlを実行して登録する箇所です
//xxx(テーブル名)はテーブル名を入力します\
$stmt = $pdo->prepare("INSERT INTO 01_03_kadai_table(id, name, title, file )VALUES(NULL, :a1, :a2, :a3)");
//$xxxxには上で受け取った変数名を入れます
$stmt->bindValue(':a1', $name);
$stmt->bindValue(':a2', $title);
$stmt->bindValue(':a3', $file);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクトとは処理が終わったら指定しているページに画面遷移させること
  header("Location: thx.html");
  exit;

}
?>
