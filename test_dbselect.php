<?php

try {
    $pdo = new PDO('mysql:dbname=Jobs;charset=utf8;host=localhost', 'root','root');
} catch (PDOException $e) {
    exit('データベースに接続できませんでした' .$e->getMessage());
}

$stmt = $pdo->prepare("SELECT * FROM job_table");
$status = $stmt->execute();

$view = "";
if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
} else {
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .='<p>';
        $view .='<a href="u_view.php"?id='.$result["id"].'">';
        $view .= $result["applygrade"].":".$result["candidate"];
        $view .='</p>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <title>dbselect</title>
</head>
<body>

<header>

</header>

<main>
<div><?=$view?></div>


</main>

<script>

</script>

</body>
</html>