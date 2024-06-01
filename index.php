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
                    <li><a href="index.php">Add Patients</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>

        </div>
    </header>


    <div class="container">
        <h2>Patient Management Form</h2>
        <form action="submit_patient.php" class="product_id" method="POST">
            <label for="name">Patient Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
                <option value="hdffhdh">khusra ay benchoo</option>
            </select>
            
            <label for="address">Address:</label>
            <input type="text" placeholder="Enter Your Address" name="address">
            
            <button type="submit">Submit</button>
        </form>
    </div>





	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>


