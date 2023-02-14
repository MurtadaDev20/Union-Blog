<?php
ob_start();
session_start();
include 'db.php';


?>
<?php

// if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
//     header("location:index.php");
//     exit();
// }

$auth["status"]=false;
$auth["user"]=[];

if(isset($_SESSION["auth"]))
{
    $auth["status"] = true;
    $auth["user"] = $_SESSION["auth"];
}
if(isset($_COOKIE["auth"]))
{
    $auth["status"] = true;
    $auth["user"] = json_decode($_COOKIE['auth'],true);
}

?>