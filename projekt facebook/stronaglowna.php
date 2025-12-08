<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stronaglowna.css">
</head>
<style>

</style>
<body>
    <header>
        <form method="post">
            <p><button name="id1">ZALOGUJ SIĘ</button></p>
            <p><button name="id2">ZAREJESTRUJ SIĘ</button></p>
        </form>
    </header>

    <main>
        <article>
            
        </article>
    </main>

    <aside>
        
    </aside>
</body>
</html>
<?php

if (isset($_POST['id1'])){
    header('Location: logowanie.php');
}

if (isset($_POST['id2'])){
    header('Location: rejestracja.php');
}

?>