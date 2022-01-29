<?php
// 更新用
// Jobs_select.phpから処理を持ってくる。
// 外部ファイル読み込みしてDB接続（Jobs_funcs.php)
require_once('Jobs_funcs.php');
$pdo = db_conn();

// 対象のIDを取得
$id = $_GET['id'];

// データ取得SQL
$stmt = $pdo->prepare('SELECT * FROM job_table WHERE id=:id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// データ表示
$view = '';

if($status == false) {
    sql_error($stmt);
}else {
    $result = $stmt->fetch();
}

?>
<!--以下はJobs_application.phpをまるっと. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/Jobs_application.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <title>Jobs_detail</title>
</head>
<body>

<header>
    <p>グレード申請画面</p>
    <nav>        
        <a href="Jobs_contact.php">お問い合わせ</a>
        <a href="Jobs_gradesystem.html">職務評価について</a>
        <a href="Jobs_home.html">HOME</a>
        <a href="Jobs_select.php">データ一覧</a></div>  
    </nav>
</header>

<main>

<form action="Jobs_update.php" method="POST">
    <h1>（１）基本情報</h1>
    <div class="baseinfo">
        <div class="base1">
            <dl>
                <dt>申請グレード</dt>
                <dd>
                    <select name="applygrade" id="" value="<?=$result['applygrade']?>">
                        <option value="-">-</option>
                        <option value="G3">G3</option>
                        <option value="G4">G4</option>
                        <option value="G5">G5</option>
                    </select>
                </dd>

                <dt>グループ/部門</dt>
                <dd>
                    <select name="mcgroup" id="" value="<?=$result['mcgroup']?>">
                        <option value="-">-</option>
                        <option value="コーポレートスタッフ">コーポレートスタッフ</option>
                        <option value="天然ガス">天然ガス</option>
                        <option value="総合素材">総合素材</option>
                        <option value="石油・化学ソリューション">石油・化学ソリューション</option>
                        <option value="金属資源">金属資源</option>
                        <option value="産業インフラ">産業インフラ</option>
                        <option value="自動車・モビリティ">自動車・モビリティ</option>
                        <option value="食品産業">食品産業</option>
                        <option value="コンシューマー産業">コンシューマー産業</option>
                        <option value="電力ソリューション">電力ソリューション</option>
                        <option value="複合都市開発">複合都市開発</option>
                        <option value="全社拠点（国内）">全社拠点（国内）</option>
                        <option value="全社組織">全社組織</option>
                    </select>
                </dd>
                <dt>本部</dt>
                <dd><input type="text" name="honbu" value="<?=$result['honbu']?>"></dd>
                <dt>所属</dt>
                <dd><input type="text" name="shozoku" value="<?=$result['shozoku']?>"></dd>
                <dt>役職</dt>
                <dd><input type="text" name="title" value="<?=$result['title']?>"></dd>
            </dl>
        </div>

        <div class="base2">
            <dl>
                <dt>就任予定者</dt>
                <dd><input type="text" name="candidate" value="<?=$result['candidate']?>"></dd>
                <dt>従業員番号</dt>
                <dd><input type="text" name="candidatenumber" value="<?=$result['candidatenumber']?>"></dd>
                <dt>開始予定日</dt>
                <dd><input type="date" name="startdate" value="<?=$result['startdate']?>"></dd>
            </dl>
        </div>

        <div class="base3">
            <dt>当該職務の役割</dt>
            <p>（当該職務に求められる役割を具体的に記載願います）</p>
            <dd><textarea name="mission" id="" cols="90" rows="8"><?=$result['mission']?></textarea></dd>
        </div>
    </div>

    <h1>（２）定量的情報</h1>
    <div>
        <h2>①管下組織の定量的情報</h2>
        <p class="qtitle">管下組織の事業規模（本店営業部及び事業会社経営執行責任者は必須。その他ポジションはデータが取得可能であれば記入願います）</p>
        <div class="qdata1">
            <div class="profit_result">
                <p class="ptitle">直近3年の利益実績（純利益）※</p>
                <dl>
                    <dt>当年-3年</dt>
                    <dd><input type="number" name="profit_result1" value="<?=$result['profit_result1']?>">億円</dd>
                    <dt>当年-2年<</dt>
                    <dd><input type="number" name="profit_result2" value="<?=$result['profit_result2']?>">億円</dd>
                    <dt>当年-1年</dt>
                    <dd><input type="number" name="profit_result3" value="<?=$result['profit_result3']?>">億円</dd>
                    <dt>直近3年の平均</dt>
                    <dd><input type="number" name="profit_resultave" value="<?=$result['profit_resultave']?>">億円</dd>
                </dl>
            </div>

            <div class="profit_plan">
                <p class="ptitle">3年先迄の利益計画（純利益）※</p>
                <dl>
                    <dt>当年</dt>
                    <dd><input type="number" name="profit_plan1" value="<?=$result['profit_plan1']?>">億円</dd>
                    <dt>当年+1年</dt>
                    <dd><input type="number" name="profit_plan2" value="<?=$result['profit_plan2']?>">億円</dd>
                    <dt>当年+2年</dt>
                    <dd><input type="number" name="profit_plan3" value="<?=$result['profit_plan3']?>">億円</dd>
                    <dt>今後3年の平均</dt>
                    <dd><input type="number" name="profit_planave" value="<?=$result['profit_planave']?>">億円</dd>
                </dl>
            
            </div>      
            <div class="headcount1">
                <p class="ptitle">その他</p>    
                <dl>
                <dt>管下組織の従業員数</dt>
                <dd><input type="number" name="headcount" value="<?=$result['headcount']?>">人</dd>
                </dl>
                <dt>備考</dt>
                <p>（上記定量的情報について補足があれば記載願います）</p>
                <dd><textarea name="bikou_1" id="" cols="70" rows="2"><?=$result['bikou_1']?></textarea></dd>
            </div>    
    
        </div>
        <p class="kome">※純利益データが入手できない場合は、入手可能な適当な財務指標を記入の上、その旨「備考」欄に記入願います。</p>
    </div>

        <h2>②出向先会社の定量的情報</h2>
        <p class="qtitle">出向先会社の事業規模（出向者のみ、データ取得が可能な範囲で記入願います。上記①と同じ場合は記入不要です）</p>
        
        <div class="qdata1">
            <div class="profit_result">
                <p class="ptitle">直近3年の利益実績（純利益）</p>
                <dl>
                    <dt>当年-3年</dt>
                    <dd><input type="number" name="profitS_result1" value="<?=$result['profitS_result1']?>">億円</dd>
                    <dt>当年-2年</dt>
                    <dd><input type="number" name="profitS_result2" value="<?=$result['profitS_result2']?>">億円</dd>
                    <dt>当年-3年</dt>
                    <dd><input type="number" name="profitS_result3" value="<?=$result['profitS_result3']?>">億円</dd>
                    <dt>直近3年の平均</dt>
                    <dd><input type="number" name="profitS_resultave" value="<?=$result['profitS_resultave']?>">億円</dd>
                </dl>
            </div>

            <div class="profit_plan">
                <p class="ptitle">3年先迄の利益計画（純利益）</p>
                <dl>
                    <dt>当年</dt>
                    <dd><input type="number" name="profitS_plan1" value="<?=$result['profitS_plan1']?>">億円</dd>
                    <dt>当年+1年</dt>
                    <dd><input type="number" name="profitS_plan2" value="<?=$result['profitS_plan2']?>">億円</dd>
                    <dt>当年+2年</dt>
                    <dd><input type="number" name="profitS_plan3" value="<?=$result['profitS_plan3']?>">億円</dd>
                    <dt>今後3年の平均</dt>
                    <dd><input type="number" name="profitS_planave" value="<?=$result['profitS_planave']?>">億円</dd>
                </dl>
            </div>
                
            <div class="headcount1">
                <p class="ptitle">その他</p>
                <dl>
                    <dt>会社の従業員数</dt>
                    <dd>単体:<input type="number" name="headcountS" value="<?=$result['headcountS']?>">人</dd>
                    <dd>連結:<input type="number" name="headcountSR" value="<?=$result['headcountSR']?>">人</dd>
                </dl>
                <dt>備考</dt>
                <p>（上記定量的情報について補足があれば記載願います）</p>
                <dd><textarea name="bikou_2" id="" cols="70" rows="2"><?=$result['bikou_2']?></textarea></dd>
            </div> 

        </div>



    </div>

    <h1>（３）補足情報</h1>
    <div class="additional">
        <div class="additional1">
            <dl>
                <dt>事業類型</dt>
                <dt>
                    <select name="ruikei" id="ruikei" value="<?=$result['ruikei']?>">
                        <option value="-">-</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                </dt>
                <a href="Jobs_ruikei.html">事業類型について</a> 
        
            <dt>職務タイプ</dt>
            <dd>
                <select name="jobtype" id="" value="<?=$result['jobtype']?>">
                    <option value="-">-</option>
                    <option value="事業会社トップ">事業会社トップ</option>
                    <option value="事業会社ラインポジション">事業会社ラインポジション</option>
                    <option value="本店営業部長">本店営業部長</option>
                    <option value="営業グループ機能別担当">営業グループ機能別担当</option>
                    <option value="コーポレート部長">コーポレート部長</option>
                    <option value="コーポレート部長代行">コーポレート部長代行</option>
                    <option value="全社拠点長">全社拠点長</option>
                    <option value="全社拠点ラインポジション">全社拠点ラインポジション</option>
                    <option value="その他">その他</option>
                </select>
            </dd>

            <dt>事業ステージ</dt>
            <dd>
                <select name="jobstage" id="jobstage" value="<?=$result['jobstage']?>">
                    <option value="-">-</option>
                    <option value="立ち上げ/導入期">立ち上げ/導入期</option>
                    <option value="成長期">成長期</option>
                    <option value="安定期">安定期</option>
                    <option value="改革局面">改革局面</option>
                    <option value="撤退">撤退</option><option value="立ち上げ/導入期">立ち上げ/導入期</option>
                </select>
            </dd>

            <dt>上位ポジション（レポートTO）</dt>
            <dd><input type="text" name="boss" value="<?=$result['boss']?>"></dd>
            </dl>
        </div>
        
        <div class="additional2">
            <dt>申請の理由/背景</dt>
                <dd><textarea name="reason" id="reason" cols="80" rows="7"><?=$result['reason']?></textarea></dd>
        </div>

    </div>

    <div class="sendbtn">
        <input type="hidden" name="id" value="<?= $result['id']?>">
        <input type="submit" value="グレード申請">
    </div> 

</form>


</main>

<script>


</script>

</body>

</html>
