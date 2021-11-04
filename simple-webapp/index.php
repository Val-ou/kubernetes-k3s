<?php
$connector = new PDO('mysql:host=mysql-service;dbname=k8s_demo_app;charset=utf8', 'root', 'root');
$connector->query('UPDATE `visit` SET `count`=`count`+1 WHERE 1;');
$req = $connector->query('SELECT * FROM `visit`;');
$visit = $req->fetchALL(PDO::FETCH_ASSOC)[0];
for ($i=0; $i < 1000; $i++) {
    $x = sqrt($i);
    $x = log($x);
    $x = pow($x,sqrt($i));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>index</title>
    <style>
        body {
            background-color: #444444;
        }

        body div {
            color: #adebad;
            text-align: center;
            margin: 0;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div>
        <h1>It work !</h1>
        <p><?= $visit['count'] ?> visite.</p>
        <p><?= gethostname() ?>
    </div>
</body>

</html>