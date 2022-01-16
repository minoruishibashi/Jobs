<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/contactinfo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <title>contactinfo</title>
</head>
<body>

<?php

$name = $_POST["name"];
$email = $_POST["email"];
$category = $_POST["category"];
$detail = $_POST["detail"];

?>

<header>
</header>
<main>

<form action="contact_register.php" method="POST">
    <table>
        <tr>
            <th>お名前</th>
            <th>email</th>
            <th>内容</th>
            <th>詳細</th>
        </tr>
        <tr>
            <td><?=$name?></td>
            <td><?=$email?></td>
            <td><?=$category?></td>
            <td><?=$detail?></td>
        </tr>
    </table>
    <div class="sendbtn">
        <input type="submit" value="お問い合わせ送信">
    </div>
</form>


</main>

<script>

</script>
</body>
</html>