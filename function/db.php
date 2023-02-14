<?php 
$host ='localhost';
$user='root';
$pass='';
$db= 'union';
$con= mysqli_connect($host , $user , $pass , $db);
//echo $con;
if(!$con){
    echo "Connction Filed";
    exit();
}