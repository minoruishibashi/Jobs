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

?>

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

<main>

<div class="pagetitle">
    <p>グレード申請内容確認</p>
</div>

<form action="Jobs_dbinsert.php" method="POST">
    <div class="grade">
        <table>
            <tr><th>申請グレード</th><td name="applygrade"><?=$applygrade?></td></tr>        
            <tr><th>開始日</th><td name="startdate"><?=$startdate?></td></tr>
            
        </table>
    </div>

    <div class="wrapper">
        <h1>A. 基本情報/ミッション</h1>
        <table class="first">
            <tr>
                <th>グループ/部門</th>
                <td name="mcgroup"><?=$mcgroup?></td>
            </tr>
            <tr>
                <th>本部</th>
                <td name="honbu"><?=$honbu?></td>
            </tr>
            <tr>
                <th>所属</th>
                <td name="shozoku"><?=$shozoku?></td>
            </tr>
            <tr>
                <th>役職</th>
                <td name="title"><?=$title?></td>
            </tr>    
        </table>
        <table class="first">
            <tr>
                <th>就任予定者</th>
                <td name="candidate"><?=$candidate?></td>
                <td name="candidatenumber"><?=$candidatenumber?></td>
            </tr>    
        </table>
        <table class="second">
            <tr>
                <th>当該職務の役割/ミッション</th>
                <td name="mission"><?=$mission?></td>
            </tr>    
        </table>
    </div>

    <div class="wrapper">
        <h1>B. 定量的情報</h1>
        <h2>①管下組織の定量的情報</h2>
        <div class="profit">
            <div>
                <h3>◆直近3年の利益実績（純利益）</h3>
                <table id="result">
                <tr>
                    <th>当年-3年</th>
                    <td name="profit_result3"><?=$profit_result3?>　億円</td>
                </tr>
                <tr>
                    <th>当年-2年</th>
                    <td name="profit_result2"><?=$profit_result2?>　億円</td>
                </tr>
                <tr>
                    <th>当年-1年</th>
                    <td name="profit_result1"><?=$profit_result1?>　億円</td>
                </tr>
                <tr>
                    <th>平均</th>
                    <td name="profit_resultave"><?=$profit_resultave?>　億円</td>
                </tr>
                </table>
            </div>
            <div>
                <h3>◆3年先迄の利益計画（純利益）</h3>
                <table id="plan">
                <tr>
                    <th>当年</th>
                    <td name="profit_plan1"><?=$profit_plan1?>　億円</td>
                </tr>
                <tr>
                    <th>当年+1年</th>
                    <td name="profit_plan2"><?=$profit_plan2?>　億円</td>
                </tr>
                <tr>
                    <th>当年+2年</th>
                    <td name="profit_plan3"><?=$profit_plan3?>　億円</td>
                </tr>
                <tr>
                    <th>平均</th>
                    <td name="profit_planave"><?=$profit_planave?>　億円</td>
                </tr>
                </table>
            </div>
        </div>
        <div>
            <table id="headcount">
            <tr>
                <th>管下組織の従業員数</th>
                <td name="headcount"><?=$headcount?>　名</td>
            </tr>
            </table>
        </div>
        <div>
            <table id="bikou">
            <tr>
                <th>備考</th>
                <td name="bikou_1"><?=$bikou_1?></td>
            </tr>
            </table>
        </div>
    </div>

    <div class="wrapper">
        <h2>②出向先会社の定量的情報</h2>
        <div class="profit">
            <div>
                <h3>◆直近3年の利益実績（純利益）</h3>
                <table id="result">
                <tr>
                    <th>当年-3年</th>
                    <td name="profitS_result3"><?=$profitS_result3?>　億円</td>
                </tr>
                <tr>
                    <th>当年-2年</th>
                    <td name="profitS_result2"><?=$profitS_result2?>　億円</td>
                </tr>
                <tr>
                    <th>当年-1年</th>
                    <td name="profitS_result1"><?=$profitS_result1?>　億円</td>
                </tr>
                <tr>
                    <th>平均</th>
                    <td name="profitS_resultave"><?=$profitS_resultave?>　億円</td>
                </tr>
                </table>
            </div>
            <div>
                <h3>◆3年先迄の利益計画（純利益）</h3>
                <table id="plan">
                <tr>
                    <th>当年</th>
                    <td name="profitS_plan1"><?=$profitS_plan1?>　億円</td>
                </tr>
                <tr>
                    <th>当年+1年</th>
                    <td name="profit_plan2"><?=$profitS_plan2?>　億円</td>
                </tr>
                <tr>
                    <th>当年+2年</th>
                    <td name="profit_plan3"><?=$profitS_plan3?>　億円</td>
                </tr>
                <tr>
                    <th>平均</th>
                    <td name="profitS_planave"><?=$profitS_planave?>　億円</td>
                </tr>
                </table>
            </div>
        </div>
        <div>
            <table id="headcount">
            <tr>
                <th>会社の従業員数（単体）</th>
                <td name="headcountS"><?=$headcountS?>　名</td>
            </tr>
            <tr>
                <th>会社の従業員数（連結）</th>
                <td name="headcountSR"><?=$headcountSR?>　名</td>
            </tr>
            </table>
        </div>
        <div>
            <table id="bikou">
            <tr>
                <th>備考</th>
                <td id="bikou_2"><?=$bikou_2?></td>
            </tr>
            </table>
        </div>
    </div>

    <div class="wrapper">
        <h1>C. 補足情報</h1>
        <table class="first">
            <tr>
                <th>類型</th>
                <td name="ruikei"><?=$ruikei?></td>
            </tr>
            <tr>
                <th>職務タイプ</th>
                <td name="jobtype"><?=$jobtype?></td>
            </tr>
            <tr>
                <th>事業ステージ</th>
                <td name="jobstage"><?=$jobstage?></td>
            </tr>
            <tr>
                <th>上位ポジション</th>
                <td name="boss"><?=$boss?></td>
            </tr>    
        </table>
        <table class="second">
            <tr>
                <th>申請理由/背景</th>
                <td name="reason"><?=$reason?></td>
            </tr>    
        </table>
    </div>


    <div class="sendbtn">
            <input type="submit" value="グレード申請送信">
    </div>
    <p>修正する場合は、ブラウザの戻る「←」で戻ってください</p>

</form>




<script>

</script>

</main>

</body>
</html>
