<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <button name="create">Create</button><br>
    <button name="display">Display</button><br>
    <button name="delete">Delete</button><br>
    <button name="home">Home</button><br>
    <form>
</body>
</html>
<?php
if (isset($_POST['home'])){
    header('Location: jakieszadanie.php');
}
if (isset($_POST['create'])){
    setcookie("ciastko","kkk", time()+60);
}
if (isset($_POST['delete'])){
    setcookie("ciastko","", time()-1);
}
if (isset($_POST['display'])){
    $k = $_COOKIE["ciastko"];
    echo $k;
    
}

?>