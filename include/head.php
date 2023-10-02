<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Include CSS styles -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Include Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Set the page title dynamically -->
    <title>
        <?php 
        if (isset($title)) {
            echo $title; // Output the title if it's set in the main file
        } else {
            echo "toShopy"; // Set a default title if $title is not set
        }
        ?>
    </title>
</head>
