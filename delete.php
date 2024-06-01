<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "patient_management"; 

$data = mysqli_connect($host, $user, $password, $db);

if($_GET['patient_id']){

    $user_id=$_GET['patient_id'];

    $sql="DELETE FROM patients WHERE id='$user_id' ";
    $result=mysqli_query($data,$sql);


    if($result){
        $_SESSION['message']='Delete of patient is Successfull';
        header("location:admin.php");
    }

}






?>