
//start php code block
<?php

//shows all errors for debugging purposes
error_reporting(E_ALL);

//display errors on the page
ini_set('display_errors', 1);

include 'db.php';    // Include the database connection file

if(isset($_POST['submit'])){  // Check if the form is submitted

// Get data from the HTML form using POST method
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    //creates a prepared SQL statement to insert the data into the employees table
    $stmt = $conn->prepare("INSERT INTO employees (name,email,position,salary) VALUES (?,?,?,?)");

    //attaches real values to the placeholders in the prepared statement, specifying that all values are strings (s)
    $stmt->bind_param("ssss", $name, $email, $position, $salary);

    //runs the prepared statement and checks if it was successful. If successful, it redirects to index.php with a success message; otherwise, it displays an error message.
    if ($stmt->execute()) {
        header("Location: index.php?success=1");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    //closes the prepared statement and the database connection
}
?>