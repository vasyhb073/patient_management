<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
} elseif ($_SESSION['usertype'] != 'admin') {
    header("Location: login.php");
    exit();
}

// Your adminhome.php content here
$host = "localhost";
$user = "root";
$password = "";
$db = "patient_management"; 

$data = mysqli_connect($host, $user, $password, $db);

$id=$_GET['patient_id'];

$sql="SELECT * FROM patients WHERE id='$id' ";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();

if(isset($_POST['update'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];

    $query="UPDATE patients SET name='$name', age='$age' , gender='$gender' , address='$address' WHERE id='$id' ";

    $result2=mysqli_query($data,$query);

    if($result2){
        header("location:admin.php");
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbaord</title>



    <style type="text/css">
        label{
            display:inline-block;
            width:100px;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;

        }
        .div-deg{

        background-color: skyblue;
        padding-top: 70px;
        padding-bottom: 70px;
        width: 400px;
        }
        .header {
    background-color: #333;
    color: white;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    }
    .header_body {
    display: flex;
    align-items: center;
    width: 100%;
    }
    .logo {
    font-size: 24px;
    font-weight: bold;
    color: white;
    text-decoration: none;
    margin-right: 20px;
    }
    .navbar {
    flex-grow: 1;
}
.navbar ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    gap: 20px;
}
.navbar ul li {
    display: inline;
}
.navbar a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    padding: 8px 12px;
    transition: background-color 0.3s;
}
.navbar a:hover {
    background-color: #575757;
    border-radius: 4px;
}

        </style>
</head>
<body>

<header class="header">
        <div class="header_body">
            <a href="index.php" class="logo">Treatment Hub</a>
            <nav class="navbar">
                <ul>
                    <li><a href="admin.php">Manage Patients</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </nav>

        </div>
    </header>




<div class="content">

<center>
    <h1>Updated Patients :</h1>


<div class="div-deg">
    <form action="#" method="POST">

    <div>
        <label for="">Name :</label>
        <input type="text" name="name" value="<?php echo "{$info['name']}"; ?>">

    </div>
    <div>
        <label for="">Age :</label>
        <input type="text" name="age" value="<?php echo "{$info['age']}"; ?>">
        
    </div>

    <div>
        <label for="">Gender :</label>
        <input type="text" name="gender" value="<?php echo "{$info['gender']}"; ?>">
        
    </div>
    <div>
        <label for="">Address :</label>
        <input type="password" name="address" value="<?php echo "{$info['address']}"; ?>">
        
    </div>
    <div>

        <input class="btn btn-primary" type="submit" name="update" value="Update">
        
    </div>












    </form>
    </center>








</div>








</div>

</body>
</html>