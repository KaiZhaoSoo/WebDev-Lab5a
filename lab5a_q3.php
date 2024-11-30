<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    // Function to calculate the area of a rectangle
    function calculateArea($length, $width) {
        return $length * $width;
    }

    // Example values
    $length = 4; // Replace with your desired length
    $width = 2;   // Replace with your desired width

    // Call the function and store the result
    $area = calculateArea($length, $width);

    // Display the result
    echo "<h2>The area of a rectange with a width of $length and $width is $area</h2>"
    ?>
</body>
</html>
