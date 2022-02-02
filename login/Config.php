<?php
$serverName="localhost";
$username="root";
$password="";
$dbName="register";
$conn=mysqli_connect($serverName,$username,$password,$dbName);
if(!$conn){
    die("Connection Failed :".mysqli_connect_error());

}
 else{
     echo"<srcipt>alert('DB Connected!!')</srcipt>";
 }
 