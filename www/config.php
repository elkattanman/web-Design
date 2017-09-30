<?php
/**
 * User: Mustafa El-Kattan
 * Date: 14/05/2017
 * Time: 04:37 م
 */
$dsn='mysql:host=localhost;dbname=library';
$user='root';
$pass='';
$option=array(
  PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',

);
try{
    $conn=new PDO($dsn,$user,$pass,$option);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

}catch(PDOException $e){
    die("Connection error :: ".$e->getMessage()."<\br>");
}