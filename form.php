<!-- <?php include(connection.php) ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD operations</title>
</head>
<body>
    <div class="container">
        <form action="#" method = "POST">
        <div class="title">
            Registration Form
        </div>
        <div class="form">
            <div class="input_field">
                <label>First Name</label>
                <input type="text" class = "input" name ="fname">
            </div>

            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class = "input"name ="lname">
            </div>

            <div class="input_field">
                <label>Roll No</label>
                <input type="text" class = "input" name ="rollno">
            </div>

            <div class="input_field">
                <label>Reg Id</label>
                <input type="text" class = "input" name ="regid">
            </div>

            <!-- <div class="input_field terms">
                <label class="check"><input type="checkbox"></label>
                <span class= "checkmark"></span>
                <p>Terms and Conditions</p>
            </div> -->
            <div class="input_field">
                <input type="submit" value = "Submit" class="btn" name = "register">
            </div>
        </div>
    </form>
    </div>
</body>
</html>

<?php
    error_reporting(0);

    if($_POST['register'] ?? '')
    {
        $fname = $_POST['fanme'];
        $lname = $_POST['lanme'];
        $rollno = $_POST['rollno'];
        $regid = $_POST['regid'];

        $query = "INSERT INTO CRUD VALUES('$fname','$lname','$rollno','$regid')";

        $data = mysqli_query($mysql,$query);

        if($data){
            echo "Data inserted into table";
        }
        else{
            echo " Failed";
        }
    }
?>