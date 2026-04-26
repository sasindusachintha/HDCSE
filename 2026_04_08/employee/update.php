<?php
include 'db.php';

// Check if the update form is submitted
if (isset($_POST['update'])) {

// Get data from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    // Prepare and execute the update statement
    $stmt = $conn->prepare("UPDATE employees SET name=?, email=?, position=?, salary=? WHERE id=?");
    
    // Bind parameters (s for string, d for double, i for integer)
    $stmt->bind_param("sssdi", $name, $email, $position, $salary, $id);

    // Execute the statement and check for success
    if ($stmt->execute()) {
        header("Location: index.php?updated=1");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>


