<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>

<?php 
    $name = "Ezleana Binti XXXX"; 
    $matric = "DI230076";
    $course = "Bachelor of Information Technology";
    $year = "Year 3";
    $address = "Kuala Lumpur, Malaysia";
?>

<h2>My Details</h2>

<table border="1" cellpadding="8">
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo $matric; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $year; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>
