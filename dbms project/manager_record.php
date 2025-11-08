<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Database credentials
    $servername = "localhost";
    $username = "root"; // Change if needed
    $password = "";     // Change if needed
    $dbname = "company";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $empid = $_POST['empid'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $age = $_POST['age'];

    // Insert data into the database
    $sql = "INSERT INTO manager VALUES ('$empid', '$name', '$dept', '$age')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>