<?php
//対象のIDを取得
$id = $_GET['id'];

// DB接続
require_once('Jobs_funcs.php');
$pdo = db_conn();

// 削除SQL
$stmt = $pdo->prepare('DELETE FROM job_table WHERE id=:id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// データ削除処理後
if($status==false){
    sql_error($stmt);
}else {
    redirect('Jobs_select.php');
}


?>