<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start();
    $DB_host = "127.127.126.26";
    $db_user = "root";
    $db_pasword = "йцукен1";
    $db_base = 'opa';
    $con = new mysqli($DB_host,$db_user,$db_pasword,$db_base);
    if($con->connect_error){die("Ошибка подключения ". $con->connect_error)}
    ?>

</body>
</html>