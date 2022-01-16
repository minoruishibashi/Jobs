<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/Jobs_contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <title>Jobs_contact</title>
</head>
<body>

<header>
    <div class="Muta-son">
        <img src="images/Jobs_contact.png" alt="Jobsの文字">
    </div> 
    <nav>        
        <a href="Jobs_home.html">HOME</a>  
    </nav>

</header>

<main>
    <form action="Jobs_contact_confirm.php" method="POST">
        <section id="contact">
                <dl>
                    <div class="contactflex">
                        <div class="contactleft">
                            <dt>お名前</dt>
                            <dd><input type="text" name="name"></dd>
                            <dt>emailアドレス</dt>
                            <dd><input type="email" name="email" id="email"></dd>
                            <dt>お問い合わせ内容</dt>
                            <dd>
                                <label for="method"><input type="radio" name="method" id="method" value="判定メソッド関係">判定メソッド関係</label>
                                <label for="schedule"><input type="radio" name="method" id="schedule" value="スケジュール関係">スケジュール関係</label>
                                <label for="other"><input type="radio" name="method" id="other" value="その他">その他</label>
                            </dd>
                        </div>
                        <div class="contactright">
                            <dt>お問い合わせ詳細</dt>
                            <dd>
                                <textarea name="detail" id="detail" cols="40" rows="6"></textarea>
                            </dd>
                        </div>
                        <div class="sendbtn">
                            <input type="submit" value="お問い合わせ送信">
                        </div>
                    </div>
                </dl>
        </section>
    </form>

</main>


<footer>
    <p><small>&copy; copyrights 2021-2023 Minoru Ishibashi All Rights Reserved.</small></p>
</footer>


<script>


</script>

</body>
</html>