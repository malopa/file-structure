<?php
$_SESSION['login']=true;
if(!isset($_SESSION['login'])){
    header("location:./index.php?page=login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Dashbaord Page</h2>

    <ul>
        <li><a href="index.php?page=other">Other Pages</li>
    </ul>
</body>
</html>