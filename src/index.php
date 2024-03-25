<!DOCTYPE html>
<html>
    <head>
        <title>!!!Тестируем PHP!!!</title>
    </head>
    <body>
        <?php echo '<p>Привет, мир!</p>';
              echo $_SERVER['HTTP_USER_AGENT'];
$mysqli = new mysqli("db", "my_user", "my_password");

/* проверить соединение */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* вывести версию сервера */
printf("Server version: %s\n", $mysqli->server_info);

/* закрыть соединение */
$mysqli->close();
/*echo phpinfo();*/
  ?>
    </body>
</html>
