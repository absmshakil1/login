<?php
include 'config.php';
$r_username =$_POST['username'];
$r_email =$_POST['email'];
$r_mobile=$_POST['mobile'];
$r_pass=$_POST['pass'];
$r_conpass=$_POST['conpass'];
$r_address=$_POST['address'];

$insert_query ="INSERT INTO `register`(`username`, `email`, `mobile`, `pass`, `address`) VALUES ($r_username,$r_email,$r_mobile,'$r_pass','$r_address')";
if(!mysqli_query($conn,$insert_query)){
    die("Not inserted!!");

}
else{
    echo"<srcipt>alert('Registered !!')</srcipt>";
    echo"<srcipt>location.href='login.html'</srcipt>"; 
}



