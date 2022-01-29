<?php
// postデータ取得
$applygrade = $_POST["applygrade"];
$mcgroup = $_POST["mcgroup"];
$honbu = $_POST["honbu"];
$shozoku = $_POST["shozoku"];
$title = $_POST["title"];
$candidate = $_POST["candidate"];
$candidatenumber = $_POST["candidatenumber"];
$startdate = $_POST["startdate"];
$mission = $_POST["mission"];
$profit_result1 = $_POST["profit_result1"];
$profit_result2 = $_POST["profit_result2"];
$profit_result3 = $_POST["profit_result3"];
$profit_resultave = $_POST["profit_resultave"];
$profit_plan1 = $_POST["profit_plan1"];
$profit_plan2 = $_POST["profit_plan2"];
$profit_plan3 = $_POST["profit_plan3"];
$profit_planave = $_POST["profit_planave"];
$headcount = $_POST["headcount"];
$bikou_1 = $_POST["bikou_1"];
$profitS_result1 = $_POST["profitS_result1"];
$profitS_result2 = $_POST["profitS_result2"];
$profitS_result3 = $_POST["profitS_result3"];
$profitS_resultave = $_POST["profitS_resultave"];
$profitS_plan1 = $_POST["profitS_plan1"];
$profitS_plan2 = $_POST["profitS_plan2"];
$profitS_plan3 = $_POST["profitS_plan3"];
$profitS_planave = $_POST["profitS_planave"];
$headcountS = $_POST["headcountS"];
$headcountSR = $_POST["headcountSR"];
$bikou_2 = $_POST["bikou_2"];
$ruikei = $_POST["ruikei"];
$jobtype = $_POST["jobtype"];
$jobstage = $_POST["jobstage"];
$boss = $_POST["boss"];
$reason = $_POST["reason"];
$id = $_POST["id"];


// DB接続
require_once('Jobs_funcs.php'); 
$pdo = db_conn();


// データ更新SQL

$stmt = $pdo->prepare(
    "UPDATE job_table SET applygrade=:applygrade , mcgroup=:mcgroup , honbu=:honbu, 
    shozoku=:shozoku , title=:title , candidate=:candidate , candidatenumber=:candidatenumber ,
    startdate=:startdate , mission=:mission, profit_result1=:profit_result1 , 
    profit_result2=:profit_result2 , profit_result3=:profit_result3 , 
    profit_resultave=:profit_resultave , profit_plan1=:profit_plan1 , 
    profit_plan2=:profit_plan2, profit_plan3=:profit_plan3, profit_planave=:profit_planave, 
    headcount=:headcount, bikou_1=:bikou_1, profitS_result1=:profitS_result1, 
    profitS_result2=:profitS_result2, profitS_result3=:profitS_result3, 
    profitS_resultave=:profitS_resultave, profitS_plan1=:profitS_plan1, 
    profitS_plan2=:profitS_plan2, profitS_plan3=:profitS_plan3, 
    profitS_planave=:profitS_planave, headcountS=:headcountS, headcountSR=:headcountSR,
    bikou_2=:bikou_2, ruikei=:ruikei, jobtype=:jobtype, jobstage=:jobstage, 
    boss=:boss, reason=:reason, indate=sysdate() WHERE id=:id "
);


$stmt->bindValue(':applygrade', $applygrade, PDO::PARAM_STR);
$stmt->bindValue(':mcgroup', $mcgroup, PDO::PARAM_STR);
$stmt->bindValue(':honbu', $honbu, PDO::PARAM_STR);
$stmt->bindValue(':shozoku', $shozoku, PDO::PARAM_STR);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':candidate', $candidate, PDO::PARAM_STR);
$stmt->bindValue(':candidatenumber', $candidatenumber, PDO::PARAM_INT);
$stmt->bindValue(':startdate', $startdate, PDO::PARAM_STR);
$stmt->bindValue(':mission', $mission, PDO::PARAM_STR);
$stmt->bindValue(':profit_result1', $profit_result1, PDO::PARAM_INT);
$stmt->bindValue(':profit_result2', $profit_result2, PDO::PARAM_INT);
$stmt->bindValue(':profit_result3', $profit_result3, PDO::PARAM_INT);
$stmt->bindValue(':profit_resultave', $profit_resultave, PDO::PARAM_INT);
$stmt->bindValue(':profit_plan1', $profit_plan1, PDO::PARAM_INT);
$stmt->bindValue(':profit_plan2', $profit_plan2, PDO::PARAM_INT);
$stmt->bindValue(':profit_plan3', $profit_plan3, PDO::PARAM_INT);
$stmt->bindValue(':profit_planave', $profit_planave, PDO::PARAM_INT);
$stmt->bindValue(':headcount', $headcount, PDO::PARAM_INT);
$stmt->bindValue(':bikou_1', $bikou_1, PDO::PARAM_STR);
$stmt->bindValue(':profitS_result1', $profitS_result1, PDO::PARAM_INT);
$stmt->bindValue(':profitS_result2', $profitS_result2, PDO::PARAM_INT);
$stmt->bindValue(':profitS_result3', $profitS_result3, PDO::PARAM_INT);
$stmt->bindValue(':profitS_resultave', $profitS_resultave, PDO::PARAM_INT);
$stmt->bindValue(':profitS_plan1', $profitS_plan1, PDO::PARAM_INT);
$stmt->bindValue(':profitS_plan2', $profitS_plan2, PDO::PARAM_INT);
$stmt->bindValue(':profitS_plan3', $profitS_plan3, PDO::PARAM_INT);
$stmt->bindValue(':profitS_planave', $profitS_planave, PDO::PARAM_INT);
$stmt->bindValue(':headcountS', $headcountS, PDO::PARAM_INT);
$stmt->bindValue(':headcountSR', $headcountSR, PDO::PARAM_INT);
$stmt->bindValue(':bikou_2', $bikou_2, PDO::PARAM_STR);
$stmt->bindValue(':ruikei', $ruikei, PDO::PARAM_STR);
$stmt->bindValue(':jobtype', $jobtype, PDO::PARAM_STR);
$stmt->bindValue(':jobstage', $jobstage, PDO::PARAM_STR);
$stmt->bindValue(':boss', $boss, PDO::PARAM_STR);
$stmt->bindValue(':reason', $reason, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

$status = $stmt->execute();



// データ登録後処理
if($status == false) {
    sql_error($stmt);
}else {
    redirect('Jobs_select.php');
}



?>