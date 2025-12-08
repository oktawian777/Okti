<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <button name="id1">1</button>
        <button name="id2">2</button>
        <button name="id3">3</button>
        <button name="id4">4</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['id1'])){
    header('Location: jakieszadanie.php');
}

if (isset($_POST['id2'])){
    header('Location: jakieszadanie2.php');
}

if (isset($_POST['id3'])){
    header('Location: jakieszadanie3.php');
}
if (isset($_POST['id4'])){
    header('Location: jakieszadanie4.php');
}
?>