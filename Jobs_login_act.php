<?php

// SESSION開始
session_start();

//POST値
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];

// DB接続
require_once('Jobs_funcs.php');
$pdo = db_conn();

// データ登録SQL
$stmt = $pdo->prepare('SELECT * FROM job_user_table WHERE lid=:lid');
$stmt->bindValue(':lid',$lid, PDO::PARAM_STR);
// $stmt->bindValue(':lpw',$lpw, PDO::PARAM_STR);
//$stmt->bindValue(':lpw',$lpw, PDO::PARAM_STR); //*hash化する場合はコメント化
$status = $stmt->execute();

// SQL実行時にエラーがある場合STOP
if($status==false){
    sql_error($stmt);
}

// 抽出データ数を取得
$val = $stmt->fetch();  //1レコードだけ取得する方法
//$count = $stmt->fetchColumn(); // SELECT COUNT(*)で使用可能()

//該当レコードがあればSESSIONに値を代入
if( password_verify($lpw,$val['lpw']) ){
    //login成功時
    $_SESSION['chk_ssid'] = session_id();
    $_SESSION['kanriflg'] = $val['kanriflg'];
    $_SESSION['name'] = $val['name'];
    redirect('Jobs_select.php');
}else{
    //login失敗時
    redirect('Jobs_login.php');
}

exit();


?>