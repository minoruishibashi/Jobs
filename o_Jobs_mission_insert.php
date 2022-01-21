<?php

//1. POSTデータ取得

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

// 2. DB接続

try {
    $pdo = new PDO('mysql:dbname=Jobs;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit ('DBConnectError:'.$e->getMessage());
}

// 3. SQL文を用意（データ登録：INSERT）


$stmt = $pdo->prepare(
    "INSERT INTO job_table(id, applygrade, mcgroup, honbu, shozoku, title, candidate, 
    candidatenumber, startdate, mission, profit_result1, profit_result2, profit_result3, 
    profit_resultave, profit_plan1, profit_plan2, profit_plan3, profit_planave, headcount, 
    bikou_1, profitS_result1, profitS_result2, profitS_result3, profitS_resultave, 
    profitS_plan1, profitS_plan2, profitS_plan3, profitS_planave, headcountS, headcountSR,
    bikou_2, ruikei, jobtype, jobstage, boss, reason)
    VALUES( NULL, :applygrade, :mcgroup, :honbu, :shozoku, :title, :candidate, 
    :candidatenumber, :startdate, :mission, :profit_result1, :profit_result2, :profit_result3, 
    :profit_resultave, :profit_plan1, :profit_plan2, :profit_plan3, :profit_planave, :headcount, 
    :bikou_1, :profitS_result1, :profitS_result2, :profitS_result3, :profitS_resultave, 
    :profitS_plan1, :profitS_plan2, :profitS_plan3, :profitS_planave, :headcountS, :headcountSR,
    :bikou_2, :ruikei, :jobtype, :jobstage, :boss, :reason)"
);

// 4. バインド変数を用意
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

// 5. 実行
$status = $stmt->execute();

// 6. データ登録処理後
if($status==false) {
    $error = $stmt->errorInfo();
    exit("ErrorMassage:".$error[2]);
} else {
    header('Location: Jobs_mission.php');
}


?>
