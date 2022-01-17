<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel = "stylesheet" href="css/missionsheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <title>Jobs_missionsheet_confirm</title>
</head>
<body>

<header>

</header>

<main>
<?php

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
$profit_plan1 = $_POST["profit_plan1"];
$profit_plan2 = $_POST["profit_plan2"];
$profit_plan3 = $_POST["profit_plan3"];
$headcount = $_POST["headcount"];
$bikou_1 = $_POST["bikou_1"];
$profitS_result1 = $_POST["profitS_result1"];
$profitS_result2 = $_POST["profitS_result2"];
$profitS_result3 = $_POST["profitS_result3"];
$profitS_plan1 = $_POST["profitS_plan1"];
$profitS_plan2 = $_POST["profitS_plan2"];
$profitS_plan3 = $_POST["profitS_plan3"];
$headcountS = $_POST["headcountS"];
$headcountSR = $_POST["headcountSR"];
$bikou_2 = $_POST["bikou_2"];
$ruikei = $_POST["ruikei"];
$jobtype = $_POST["jobtype"];
$jobstage = $_POST["jobstage"];
$boss = $_POST["boss"];
$reason = $_POST["reason"];


?>

<div class="wrapper">
    <h1>基本情報</h1>
    <table class="first">
        <tr>
            <td>申請グレード</td>
            <td><?=$applygrade?></td>
            <td>所属・役職</td>
            <td><?=$mcgroup?></td>    
            <td><?=$honbu?></td>
            <td><?=$shozoku?></td>
            <td><?=$title?></td>
            <td>就任予定者</td>
            <td><?=$candidate?>（<?=$candidatenumber?>）</td>
            <td>開始日</td>
            <td><?=$startdate?></td>
        </tr>
    </table>
</div>

<div class="wrapper">
    <h1>当該職務の役割</h1>
    <table class="third">
        <tr>
            <td><?=$mission?></td>
        </tr>
    </table>
</div>

<div class="wrapper">
    <h1>管下組織の事業規模</h1>
    <table class="fourth">
        <tr>
            <th>利益実績2018</th><th>利益実績2019</th><th>利益実績2020</th>
            <th>利益計画2021</th><th>利益計画2022</th><th>利益実績20計画</th>
        </tr> 
        <tr>
            <td><?=$profit_result1?>億円</td><td><?=$profit_result2?>億円</td><td><?=$profit_result3?>億円</td>
            <td><?=$profit_plan1?>億円</td><td><?=$profit_plan2?>億円</td><td><?=$profit_plan3?>億円</td>
        </tr>       
    </table>
    <table class="fifth">
        <tr>
            <td>管下組織の従業員数</td><td><?=$headcount?></td>
            <td>備考</td><td><?=$bikou_1?></td>
        </tr>

    </table>

    <h1>出向会社の定量情報</h1>
    <table class="sixth">
        <tr>
            <th>利益実績2018</th><th>利益実績2019</th><th>利益実績2020</th>
            <th>利益計画2021</th><th>利益計画2022</th><th>利益実績20計画</th>
        </tr> 
        <tr>
            <td><?=$profitS_result1?>億円</td><td><?=$profitS_result2?>億円</td><td><?=$profitS_result3?>億円</td>
            <td><?=$profitS_plan1?>億円</td><td><?=$profitS_plan2?>億円</td><td><?=$profitS_plan3?>億円</td>
        </tr>       
    </table>
    <table class="seventh">
        <tr>
            <td>出向会社の従業員数（単体）</td><td><?=$headcountS?></td>
            <td>出向会社の従業員数（連結）</td><td><?=$headcountSR?></td>
            <td>備考</td><td><?=$bikou_2?></td>
        </tr>

    </table>


    <table class="eighth">
        <tr>  
            <td>類型</td><td><?=$ruikei?></td>    
            <td>職務タイプ</td><td><?=$jobtype?></td>
            <td>事業ステージ</td><td><?=$jobstage?></td>
            <td>上位ポジション</td><td><?=$boss?></td>
        </tr>
    </table>
</div>

<div class="wrapper">
    <h1>申請理由</h1>
    <table class="ninth">
        <tr>
            <td>申請理由</td>
        </tr>
        <tr>
            <td><?=$reason?></td>
        </tr>
    </table>
</div>






<script>

</script>

</body>
</html>

