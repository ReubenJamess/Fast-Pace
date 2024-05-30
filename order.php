<?php
session_start();

// Include the database connection file
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Date = $_POST['date'];
    $Time = $_POST['time'];
    $People = $_POST['people'];
    $Phone = $_POST['phone'];

    // Insert the form data into the database
    $query = "INSERT INTO reservation (name, email, date, time, people, phone) VALUES ('$Name', '$Email', '$Date', '$Time', '$People', '$Phone')";
    $result = mysqli_query($con, $query); // Adding $con as the first argument

    if ($result) {

        echo "<script type= 'text/javascript'>alert('Successfully Booked')
        window.location.href = 'home.php'</script>";
        
        // Redirect to a new page after successful submission
       
        exit(); // Stop further execution of the script
    } else {
        echo "Error: " . mysqli_error($con); // Use $con for the connection object
    }
}
?>
