<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="logowanie.css">
</head>
<body>
    <h2>Rejestracja</h2>

    <form method="post">
        <input type="text" name="użytkownik" placeholder="wpisz nazwę"></input>
        <input type="password" name="hasło" placeholder="wpisz hasło"></input>
        <button type="sumbit">Zarejestruj się</button>
    </form>
</body>
</html>

<?php
if (isset($_POST["signupBtn"])){
    $login = $_POST["login"];
    $password = $_POST["password"];
    $conn = mysqli_connect("localhost", "username", "", "bank");
    $q = "INSERT INTO users(login, haslo) VALUES ('$login','$password')";
    $q1 = "SELECT login FROM users WHERE login = $login";
    $res = mysqli_query($conn, $q1);
    if (mysqli_num_rows($res) == 0){
        mysqli_query($conn, $q1);
    }else{
        echo "Taki login już istnieje";
    }
}
?>