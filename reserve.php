<?php

session_start();

// Include the database connection file
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Video-2</title>
</head>

<body class="main_bg">
    <div class="form">
        <div class="form-text">
            <h1><span><img src="art-1.png" alt=""></span>Book Now <span><img src="art-1.png" alt=""></span></h1>
        </div>
        <div class="main-form">
            <form action="order.php" method="post">
                <div>
                    <span>Your full name ?</span>
                    <input type="text" name="name" id="name" placeholder="Write your name here..." required>
                </div>
                <div>
                    <span>Your email address ?</span>
                    <input type="email" name="email" id="email" placeholder="Write your email here..." required> 
                </div>
                <div>
                    <!-- <---this is the select option--->
                    <span>How many people ?</span>
                    <input type="number" class="form-control" name="people" id="people" placeholder="# of people" required>
                                        
                    <!-- <---this is the select option--->
                </div>
                <div>
                    <span>What time ?</span>
                    <input type="time" name="time" id="time" placeholder="Time" required>
                </div>
                <div>
                    <span>What is the date ?</span>
                    <input type="date" name="date" id="date" placeholder="date" required>
                </div>
                <div>
                    <span>Your phone number ?</span>
                    <input type="number" name="phone" id="phone" placeholder="Write your number here..." required>
                </div>
                <div id="submit">
                    <input type="submit" value="SUBMIT" id="submit">
                </div>


            </form>
        </div>
    </div>
</body>

</html>