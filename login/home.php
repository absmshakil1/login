<?php
$username ="admin";
$pass="admin";
session_start();
if(isset($_SESSION['username'])){
    echo "<h1>Hello".$_SESSION['username']."</h1>";
    echo"<a href='product.html'>Products</a><br>";
    echo "<a href='logout.php'><input type='button' value='logout'name='logout'>
    </a><br>"
}
 else{

    if($_POST['username']==$username && $_POST['pass']==$pass ){
        $_SESSION['username'] =$username;
        echo "<script> location.href='home.php'</script>";
        
    }else{
        echo "<script>alert('username  and password is not matching')'</script>";
        echo "<script> location.href='login.php'</script>";
    
   
    }


}
