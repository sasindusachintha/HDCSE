<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    $stmt = $conn->prepare("INSERT INTO employees (name,email,position,salary) VALUES (?,?,?,?)");

    $stmt->bind_param("ssss", $name, $email, $position, $salary);

    if ($stmt->execute()) {
        header("Location: index.php?success=1");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>