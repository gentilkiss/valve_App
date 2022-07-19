<?php
session_start();
$host = 'localhost';
$nomdb = 'velve';
$util = 'root';
$pass = '';
$option = array(
   PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'
);
$str = 'mysql:host='.$host.';dbname='.$nomdb;
try 
{
    $conn = new PDO($str,$util,$pass,$option);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_ERRMODE,pdo::ERRMODE_WARNING);
//    echo("ok");
} catch (Exception $ex) 
{
    echo 'erreure de connection à la bd'.$ex->getMessage();
}

?>