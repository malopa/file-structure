<?php 
$page = isset($_GET['page'])?trim($_GET['page']):"";

switch($page){
    case 'dashboard':
        $content = "dashboard.php";
        break;
    case 'login':
        $content = "login.php";
        break;
    case 'other':
        $content = "otherPage.php";
        break;
    default:
    $content =  "dashboard.php";
}