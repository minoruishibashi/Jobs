<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/Jobs_apply.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <title>Jobs_apply</title>
</head>
<body>

<header>
    <div class="Muta-son">
        <img src="images/Jobs_apply.png" alt="Jobsの文字">
    </div>
    <nav>        
        <a href="Jobs_contact.html">お問い合わせ</a>
        <a href="Jobs_gradesystem.html">職務評価について</a>
        <a href="Jobs_home.html">HOME</a>  
    </nav>
</header>

<main>
<form action="Jobs_apply_confirm.php" method="POST">
    <section>基本情報・ミッション</section>
    <div class="basicinfo">
        <div class="basic1">
        <dl>
            <dt>申請グレード</dt>
            <dd>
                <select name="applygrade">
                    <option value="-">-</option>
                    <option value="G3">G3</option>
                    <option value="G4">G4</option>
                    <option value="G5">G5</option>
                </select>
            </dd>
            <dt>就任予定者</dt>
            <dd><input type="text" name="candidate"></dd>
            <dt>従業員番号</dt>
            <dd><input type="text" name="candidatenumber"></dd>
            <dt>開始日</dt>
            <dd><input type="date" name="startdate"></dd>
            <div class="startdate">
        </div>
        </dl>
        </div>
        <div class="basic2">
            <dt>所属グループ/部門</dt>
            <dd>
                <select name="mcgroup" id="">
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
            <dd><input type="text" name="honbu"></dd>
            <dt>所属</dt>
            <dd><input type="text" name="shozoku"></dd>
            <dt>職位</dt>
            <dd><input type="text" name="title"></dd>
        </div>
        <div class="basic3">
            <dt>当該職務の役割（当該職務に求められる役割を具体的に記載願います）</dt>
            <dd><textarea name="mission" id="mission" cols="100" rows="8"></textarea></dd>
        </div>
    </div>
    <section>定量情報/類型/事業ステージ</section>
    <p id="hosoku">管下組織の事業規模（本店営業部長・事業会社経営執行責任者は必須。その他ポジションの場合でもデータ取得可能な範囲でご記入願います）</p>
    <div class="magnitude">
        <div class="past3">
            <p>直近3年間の利益実績（純利益）</p>
            <dl>
                <dt>2018年</dt>
                <dd><input type="number" name="profit_result1">億円</dd>
                <dt>2019年</dt>
                <dd><input type="number" name="profit_result2">億円</dd>
                <dt>2020年</dt>
                <dd><input type="number" name="profit_result3">億円</dd>
            </dl>
        </div>
        <div class="future3">
            <p>3年先迄の利益計画（純利益）</p>
            <dl>
                <dt>2021年</dt>
                <dd><input type="number" name="profit_plan1">億円</dd>
                <dt>2022年</dt>
                <dd><input type="number" name="profit_plan2">億円</dd>
                <dt>2023年</dt>
                <dd><input type="number" name="profit_plan3">億円</dd>
            </dl>
        </div>
        <div class="bikou">
            <p>参考情報</p>
            <dl>
                <dt>管下組織の従業員数</dt>
                <dd><input type="number" name="employee"></dd>
            </dl>
        </div>
        <div class="type">
            <dl>
                <dt>事業類型</dt>
                <dd><select name="ruikei" id="">
                    <option value="-">-</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select></dd>
                <dt>職務タイプ</dt>
                <dd><select name="jobtype" id="jobtype">
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
                </select></dd>
                <dt>事業ステージ</dt>
                <dd><select name="jobstage" id="jobstage">
                    <option value="-">-</option>
                    <option value="立ち上げ/導入期">立ち上げ/導入期</option>
                    <option value="成長期">成長期</option>
                    <option value="安定期">安定期</option>
                    <option value="改革局面">改革局面</option>
                    <option value="撤退">撤退</option>
                </select></dd>
            </dl>
        </div>
        <div class="oldmethod">
            <nav>        
                <a href="Muta_oldmethod.html">旧メソッド定量基準</a> 
            </nav>
        </div>
            
        </div>
    </div>

    <section>補足情報</section>
    <div class="additional">
        <div class="reason">
            <dl>
                <dt>申請の理由/背景</dt>
                <dd><textarea name="apply_reason" id="reason" cols="100" rows="6"></textarea></dd>
            </dl>
        </div>
    </div>

    <section></section>
    <div class="sendbtn">
        <input type="submit" value="グレード申請送信">
    </div> 

</form>


</main>

<script>


</script>

</body>

</html>