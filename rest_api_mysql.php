<?php
    $emp_id= $_GET['id'];
    $emp_fname= $_GET['first_name'];
    $emp_lname= $_GET['last_name'];
    $emp_mail= $_GET['email'];
    $emp_phno= $_GET['number'];
    $emp_sal= $_GET['salary'];

    $servername = "localhost";
    $username = "root";
    $password = "student";
    $dbname = "employee";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `employee` VALUES ($emp_id,$emp_fname,$emp_lname,$emp_mail,$emp_phno,$emp_sal);";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

