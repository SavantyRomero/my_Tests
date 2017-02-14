<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<p>Сам масив для звірки:</p>
<?php
$arr = array();
for($i=0; $i<100; $i++) {
$arr[$i] = rand(0,PHP_INT_MAX);
}
print_r($arr);
echo('<p>Парні числа з непарних комірок масиву:</p>');
for($i=1; $i<count($arr); $i=$i+2 ){
    if (($arr[$i]%2) == 0){
        echo ($arr[$i]);
        echo ('<br>');
    }
}
?>
</body>
</html>