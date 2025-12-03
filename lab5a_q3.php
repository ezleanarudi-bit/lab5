<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lab 5a Q3</title>
</head>
<body>

<?php
    function calculateArea($length, $width) {
        return $length * $width;
    }

    // Anda boleh ubah nilai $l dan $w
    $l = 8;
    $w = 5;

    $area = calculateArea($l, $w);
?>

<h2>Rectangle Area Calculator</h2>

<p>Length = <?php echo $l; ?></p>
<p>Width = <?php echo $w; ?></p>
<p><b>Area = <?php echo $area; ?></b></p>

</body>
</html>
