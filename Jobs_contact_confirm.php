<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/Jobs_contact_confirm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <title>Jobs_contact</title>
</head>
<body>

<?php

$name = $_POST["name"];
$email = $_POST["email"];
$method = $_POST["method"];
$detail = $_POST["detail"];

?>

<header>


</header>

<main>

<table class="table">
    <tr>
        <th>お名前</th>
        <th>email</th>
        <th>内容</th>
    </tr>
    <tr>
        <td><?=$name?></td>
        <td><?=$email?></td>
        <td><?=$method?></td>
    </tr>
</table>

</main>

<script>


</script>

</body>
</html>