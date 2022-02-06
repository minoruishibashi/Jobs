<?php
session_start();

// 関数呼び出し
require_once('Jobs_funcs.php');

// ログインチェック
loginCheck();

$user_name = $_SESSION['name'];
$kanriflg = $_SESSION['kanriflg'];

// DB接続
$pdo = db_conn();

// データ SQL
$stmt = $pdo->prepare("SELECT * FROM job_table");
$status = $stmt->execute();

// データ表示
$view = "";
if ($status == false) {
    sql_error($status);
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= '<p>';
        $view .= '<a href="Jobs_detail.php?id='.$result['id'].'">';
        $view .= $result["indate"] . ":" . $result["shozoku"];
        $view .= '</a>';
        $view .= '<a href="Jobs_delete.php?id='.$result['id'].'">';
        $view .= '[ 削除 ]';
        $view .= '</a>';
        $view .= '</p>';

    }
}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>一覧表示</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body id="main">
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="Jobs_select.php">データ一覧</a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="Jobs_login.php">ログイン</a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="Jobs_logout.php">ログアウト</a>
                </div>
            </div>
            <p><?=$user_name?></p>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron">
            <a href="Jobs_detail.php"></a>
            <?= $view ?>
        </div>
        <div class="container jumbotron">
            <a href=""></a>

        </div>
    </div>

    <!-- Main[End] -->

</body>

</html>
