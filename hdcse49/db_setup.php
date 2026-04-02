<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_db";

//create dbconnection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " , $conn->connect_error);    
}

//Create database
$sql = "CREATE DATABASE IF NOT EXITS $dbname" ;
 if($conn->query($sql) !== TRUE){
    die("Error creating database: " . $conn->error);
 }

//select database
$conn->select_db($dbname);

//create employess table
$sql = "CREATE TABLE IF NOT EXISTS employee(
         id INT AUTO_INCREMENT PRIMARY KEY,
         email VARCHAR(255) NOT NULL,
         joining_date DATE NOT NULL,
         shift_time TIME NOT NULL,
         employee_id INT NOT NULL,
         department VARCHAR(100) NOT NULL,
         skills VARCHAR(255),
         availability BOOLEAN NOT NULL,
         notes TEXT,
         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
         )";

?>