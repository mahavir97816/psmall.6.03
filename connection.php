<?php

$servername = "remotemysql.com";
$username = "swslThp2sk";
$password = "U6bB3BmxTc";
$dbname = "swslThp2sk";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{

}

else
{
die("connection failed because".mysqli_connect_error());
}




?>
