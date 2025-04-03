<?php
$servername = "localhost"; // MySQL server address (usually 'localhost')
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password (default is empty for XAMPP)
$dbname = "SRS"; // The name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$studentID = $_POST['studentID'];
$firstName = $_POST['firstName'];
$middleInitial = $_POST['middleInitial'];
$lastName = $_POST['lastName'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];

// Insert data into the database
$sql = "INSERT INTO basic_information (StudentID, FirstName, MiddleInitial, LastName, DateOfBirth, Gender, EmailAddress, PhoneNumber)
        VALUES ('$studentID', '$firstName', '$middleInitial', '$lastName', '$dob', '$gender', '$email', '$phoneNumber')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
