<<?php

session_start();


$host = "localhost";
$user = "root";
$password = "";
$db = "patient_management"; 

$data = mysqli_connect($host, $user, $password, $db);

if($data == false) {
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "select * from user where username='".$name."' AND password='".$pass."' ";

    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);



     if($row["usertype"]=="admin"){
        
        $_SESSION['username']=$name;
        $_SESSION['usertype']="admin";

        header("Location: admin.php");
        


    }
    else{
        
        $message = "Username and Password not match";
        $_SESSION['loginMessage'] = $message;
        header("location: login.php");
        
    }

}

?>
