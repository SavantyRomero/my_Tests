<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
require_once 'connection.php';
if(isset($_POST['comp_name']) && isset($_POST['date_created'])&& isset($_POST['off_url'])&& isset($_POST['description'])){
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));
    $comp_name = htmlentities(mysqli_real_escape_string($link, $_POST['comp_name']));
    $date_created = htmlentities(mysqli_real_escape_string($link, $_POST['date_created']));
    $off_url = htmlentities(mysqli_real_escape_string($link, $_POST['off_url']));
    $description = htmlentities(mysqli_real_escape_string($link, $_POST['description']));
    $query ="INSERT INTO companies(comp_name, date_created, off_url,description) VALUES('$comp_name','$date_created','$off_url','$description')";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        echo "<span style='color:blue;'>Дані додані успішно</span>";
    }
    mysqli_close($link);
}

if(isset($_POST['adress']) && isset($_POST['contact'])&& isset($_POST['person'])){
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));
    $adress = htmlentities(mysqli_real_escape_string($link, $_POST['adress']));
    $contact = htmlentities(mysqli_real_escape_string($link, $_POST['contact']));
    $person = htmlentities(mysqli_real_escape_string($link, $_POST['person']));
    $query ="INSERT INTO offices(adress, contact, person)VALUES('$adress','$contact','$person')";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        echo "<span style='color:blue;'>Дані додані успішно</span>";
    }
    mysqli_close($link);
}

if(isset($_POST['phone']) && isset($_POST['tel_number'])){
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));
    $phone = htmlentities(mysqli_real_escape_string($link, $_POST['phone']));
    $tel_number = htmlentities(mysqli_real_escape_string($link, $_POST['tel_number']));
    $query ="INSERT INTO phones (phone, tel_number) VALUES('$phone',' $tel_number')";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        echo "<span style='color:blue;'>Дані додані успішно</span>";
    }
    mysqli_close($link);
}
?>
<form method="POST">
    <h2>Введіть дані про компанію</h2>
    <p>Назва компанії:<br>
        <input type="text" name="comp_name" />
    </p>
    <p>Дата створення: <br>
        <input type="date" name="date_created" />
    </p>
    <p>Посилання на офіційний сайт: <br>
        <input type="text" name="off_url" />
    </p>
    <p>Введіть опис діяльності:<br>
        <textarea rows="10" cols="45" name="description"></textarea>
    </p>
    <h2>Введіть дані про офіси компанії</h2>
    <p>Адреса офісу:<br>
        <input type="text" name="adress" />
    </p>
    <p>Контакт: <br>
        <input type="text" name="contact" />
    </p>
    <p>Відповідальна персона (П.І.Б): <br>
        <input type="text" name="person" />
    </p>
    <h2>Введіть контактні дані офісу:</h2>
    <p>Вид контакту(робочий, нічний, екстренний тощо.): <br>
        <input type="text" name="phone" />
    </p>
    <p>Номер телефону / контакт skype: <br>
        <input type="text" name="tel_number" />
    </p>
    <input type="submit" value="Добавить">
</form>
</body>
</html>
