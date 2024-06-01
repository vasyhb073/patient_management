<?php
error_reporting(0);
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

$sql= "SELECT * FROM patients ";

$result=mysqli_query($data,$sql);
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Management Form</title>
    <link rel="stylesheet" href="style.css">
	
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

    <center>
    <div class="container">
        <h2>Manage Patients :</h2>
    
    <?php
    if($_SESSION['message']){
        echo $_SESSION['message'];
    }
    unset($_SESSION['message']);


?>
    <br></br>


    <table border="1px">
        <tr>
            <th style="padding:20px; font-size:15px;" >Name</th>
            <th style="padding:20px; font-size:15px;">Age</th>
            <th style="padding:20px; font-size:15px;">Gender</th>
            <th style="padding:20px; font-size:15px;">Address</th>
            <th style="padding:20px; font-size:15px;">Delete</th>
            <th style="padding:20px; font-size:15px;">Update</th>
            
        </tr>

        <?php

while($info=$result->fetch_assoc())
{





?>
        <tr>
            <td style="padding:20px;">
            <?php echo "{$info['name']}"; ?>
            
        </td>
            <td style="padding:20px;">
            <?php echo "{$info['age']}"; ?>
            
        </td>
            <td style="padding:20px;">
            <?php echo "{$info['gender']}"; ?>

            <td style="padding:20px;">
            <?php echo "{$info['address']}"; ?>

            <td style="padding:20px;">

            <?php echo "<a class='btn btn-danger' onClick=\"javascript:return confirm('Are You Sure TO Delete This?');\" href='delete.php?patient_id={$info['id']}'> Delete </a>"; ?>
            
        </td>
        </td>
            <td style="padding:20px;">
            <?php echo "<a class='btn btn-primary' href='update.php?patient_id={$info['id']}' > Update </a>"; ?>

            

        </tr>
        <?php
    }
    ?>

    </table>
    </div>
    </center>





	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>


