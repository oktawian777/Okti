<style>
.kod{
    display: grid;
    grid-template-columns: repeat(50, 10px);
    grid-template-rows: repeat(50, 10px);
}
.cos{
    width: 10px;
    height: 10px;
}
</style>
<div class="kod">
<?php
for ($i = 0; $i < 50; $i++){
    for ($j = 0; $j < 50; $j++){
        $color = rand(0, 1) ?"#000" : "#fff";
        echo "<div class='cos' style='background-color: $color;'></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input name="int1">
        <input name="int2">
        <button type="sumbit" name="wyswietl">Wyświetl</button>
</form>
</body>
</html>