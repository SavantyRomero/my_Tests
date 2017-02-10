<?php 
    $year = $_GET['chineseYear'];
    if ( empty($year)){
        $message = 'Введіть будь ласка рік від 1900 до 2067';
    }
    elseif ( $year < 1900 || $year > 2067){
        $message = 'Ви ввели некоректний рік';
    }
    elseif( (($year-1899) % 12) == 1){
        $message = 'Рік щура';
    }
    elseif( (($year-1899) % 12) == 2){
        $message = 'Рік бика';
    }  
    elseif( (($year-1899) % 12) == 3){
        $message = 'Рік тигра';
    } 
    elseif( (($year-1899) % 12) == 4){
        $message = 'Рік кролика';
    }
    elseif( (($year-1899) % 12) == 5){
        $message = 'Рік дракона';
    }  
    elseif( (($year-1899) % 12) == 6){
        $message = 'Рік змії';
    } 
    elseif( (($year-1899) % 12) == 7){
        $message = 'Рік коня';
    }
    elseif( (($year-1899) % 12) == 8){
        $message = 'Рік кози';
    } 
    elseif( (($year-1899) % 12) == 9){
        $message = 'Рік мавпи';
    } 
    elseif( (($year-1899) % 12) == 10){
        $message = 'Рік півня';
    }
    elseif( (($year-1899) % 12) == 11){
        $message = 'Рік собаки';
    }
    elseif( (($year-1899) % 12) == 0){
        $message = 'Рік свині';
    } 
?>
<html>
<body>
    <p><?php echo $message; ?></p>
    <form method="get">
        <input type="text" name="chineseYear" placeholder="Введіть рік" >
        <input type="submit" value="Натисни мене">
    </form>   
</body>   
</html>										