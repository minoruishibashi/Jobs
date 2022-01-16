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
    <title>Jobs_missionsheet</title>
</head>
<body>

<header>

</header>

<main>
<?php

$applygrade = $_POST["applygrade"];
$candidate = $_POST["candidate"];
$candidatenumber = $_POST["candidatenumber"];
$mcgroup = $_POST["mcgroup"];
$honbu = $_POST["honbu"];
$shozoku = $_POST["shozoku"];
$title = $_POST["title"];
$mission = $_POST["mission"];
$profit_result1 = $_POST["profit_result1"];
$profit_result2 = $_POST["profit_result2"];
$profit_result3 = $_POST["profit_result3"];
$profit_plan1 = $_POST["profit_plan1"];
$profit_plan2 = $_POST["profit_plan2"];
$profit_plan3 = $_POST["profit_plan3"];
$ruikei = $_POST["ruikei"];
$jobtype = $_POST["jobtype"];
$jobstage = $_POST["jobstage"];
$apply_reason = $_POST["apply_reason"];
$startdate = $_POST["startdate"];

?>

<div class="wrapper">
    <h1>基本情報</h1>
    <table class="first">
        <tr>
            <td>申請グレード</td>
            <td><?=$applygrade?></td>
            <td>就任予定者</td>
            <td><?=$candidate?>（<?=$candidatenumber?>）</td>
            <td>開始日</td>
            <td><?=$startdate?></td>
        </tr>
    </table>
    <table class="second">
        <tr>
            <td>所属・役職</td>
            <td><?=$mcgroup?></td>    
            <td><?=$honbu?></td>
            <td><?=$shozoku?></td>
            <td><?=$title?></td>
        </tr>
    </table>
</div>

<div class="wrapper">
    <h1>ミッション</h1>
    <table class="third">
        <tr>
            <td>当該職務の役割</td>
            <td><?=$mission?></td>
        </tr>
    </table>
</div>

<div class="wrapper">
    <h1>補足情報</h1>
    <table class="fourth">
        <tr>
            <th>利益実績2018</th><th>利益実績2019</th><th>利益実績2020</th>
            <th>利益計画2021</th><th>利益計画2022</th><th>利益実績20計画</th>
        </tr> 
        <tr>
            <td><?=$profit_result1?></td><td><?=$profit_result2?></td><td><?=$profit_result3?></td>
            <td><?=$profit_plan1?></td><td><?=$profit_plan2?></td><td><?=$profit_plan3?></td>
        </tr>       
    </table>
    <table class="fifth">
        <tr>  
            <td>類型</td><td><?=$ruikei?></td>    
            <td>職務タイプ</td><td><?=$jobtype?></td>
            <td>事業ステージ</td><td><?=$jobstage?></td>
        </tr>
    </table>
</div>

<div class="wrapper">
    <h1>申請理由</h1>
    <table class="sixth">
        <tr>
            <td>申請理由</td>
        </tr>
        <tr>
            <td><?=$apply_reason?></td>
        </tr>
    </table>
</div>






<script>

</script>

</body>
</html>

