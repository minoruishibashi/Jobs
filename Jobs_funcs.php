<?php
//XSS対応（echoする場所で使用！）
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES);
}


// DB接続関数:db_conn()
function db_conn(){
    try {
        $db_name = "minoruishibashi_jobs";  //データベース名
        $db_id = "minoruishibashi'";  //アカウント名
        $db_pw = "mino0303";  //パスワード
        $db_host = "mysql57.minoruishibashi.sakura.ne.jp";  //DBホスト
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
      exit('DBConnectError:'.$e->getMessage());
    }
}

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


?>