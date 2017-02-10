<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<?php
$code=array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f');
$color=$code[rand(0,15)].$code[rand(0,15)].$code[rand(0,15)].$code[rand(0,15)].$code[rand(0,15)].$code[rand(0,15)];
echo '<body bgcolor="'.$color.'">';
?>
</body>
</html>