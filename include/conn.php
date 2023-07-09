<?php
$severname='localhost';
$username='root';
$password='';
$dbname="rent it";
$conn=mysqli_connect($severname,$username,$password,$dbname);
if(!$conn)
{
    die("Connection Failed". mysqli_connect_error());
    }      
    
?>