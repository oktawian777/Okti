<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
     <select name="tabela">
        <?php
        $tabele = mysqli_query($conn, "");
        while($t = mysqli_fetch_row($tabele)){
            echo "<option>$t[0]</option>";
        }
        ?>
       <button name='show'>SHOW</button>
       <button name="home">Home</button><br>
    </select>      
</form>
</body>
</html>

<?php
if (isset($_POST['home'])){
    header('Location: jakieszadanie.php');
}
?>