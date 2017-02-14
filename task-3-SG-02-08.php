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
        $two_dimensional_array[$c][$r] = rand(0,2000);
    endfor;
endfor;
    echo "<table class='locked' border='1px'>";
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
function if_prime($n){
    if($n==1||$n==0)return false;
    for($d=2; $d*$d<=$n; $d++)
    {
        if($n%$d==0)return false;
    }
    return true;
}

$prime_array=array();
for ($i=0;$i<$horisontal;$i++)
{
    for($j=0;$j<$vertical;$j++)
    {
        if(if_prime($two_dimensional_array[$i][$j])){
            echo $two_dimensional_array[$i][$j];
            echo "<br>";
        }
    }
}
?>
</body>
</html>
