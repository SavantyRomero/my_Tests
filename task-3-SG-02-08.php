<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="get">
    <input type="text" name="horisontal">
    <input type="text" name="vertical">
    <input type="submit">
</form>
<?php
$horisontal = $_GET['horisontal'];
$vertical = $_GET['vertical'];
$two_dimensional_array = array();
for ($c = 0; $c < $horisontal; $c++):
    for ($r = 0; $r < $vertical; $r++):
        $two_dimensional_array[$c][$r] = rand(0,PHP_INT_MAX);
    endfor;
endfor;
echo "<table border='1px'>";
for ($c=0;$c<$horisontal;$c++)
{
    echo "<tr>";
    for($r=0;$r<$vertical;$r++)
    {
        echo "<td>";
        print_r ($two_dimensional_array[$c][$r]);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>