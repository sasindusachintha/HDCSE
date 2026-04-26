<?php
include 'db.php';

// Get the employee ID from the URL parameter
$id = $_GET['id'];

// Execute the delete query to remove the employee from the database
$conn->query("DELETE FROM employees WHERE id=$id");

// Redirect back to the main page after deletion
header("Location: index.php");
?>
