<?php
//XSS対応（echoする場所で使用！）
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES);
}


// DB接続関数:db_conn()
function db_conn(){
    try {
        $db_name = "minoruishibashi_jobs";  //データベース名
        $db_id = "minoruishibashi";  //アカウント名
        $db_pw = "mino0303";  //パスワード
        $db_host = "mysql57.minoruishibashi.sakura.ne.jp";  //DBホスト
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
      exit('DBConnectError:'.$e->getMessage());
    }
}

// Localhost
// $db_name = "Jobs";  //データベース名
//         $db_id = "root";  //アカウント名
//         $db_pw = "root";  //パスワード
//         $db_host = "localhost";  //DBホスト
//         $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
//         return $pdo;

//sakura
// $db_name = "minoruishibashi_jobs";  //データベース名
// $db_id = "minoruishibashi";  //アカウント名
// $db_pw = "mino0303";  //パスワード
// $db_host = "mysql57.minoruishibashi.sakura.ne.jp";  //DBホスト
// $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);


// SQLエラー関数 : sql_error($stmt)
function sql_errot($stmt) {
    $error = $stmt->erroInfo();
    exit("SQLErrot:" . print_r($error, true));
}


// リダイレクト関数: redirect($file_name)
function redirect($file_name) {
    header("Location: ".$file_name);
    exit();
}

// ログインチェック
function loginCheck(){

    if($_SESSION["chk_ssid"] != session_id()){
        exit('LOGIN ERROR');
    }else{
        session_regenerate_id(true);
        $_SESSION['chk_ssid']=session_id();
    }

}

?>