<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lab 5a Q2</title>
</head>
<body>

<?php
$students = [
    "Ali" => "BITA",
    "Siti" => "BITB",
    "Amir" => "BITC",
    "Aina" => "BITD",
    "Farah" => "BITE"
];
?>

<h2>Student List</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Student Name</th>
        <th>Course</th>
    </tr>

    <?php
        foreach ($students as $name => $course) {
            echo "<tr>
                    <td>$name</td>
                    <td>$course</td>
                  </tr>";
        }
    ?>
</table>

</body>
</html>
