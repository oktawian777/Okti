<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form metohd='post'>    
<button name="home">Home</button><br>
</form>
</body>
</html>

<?php
 if (isset($_POST['home'])){
    header('Location: jakieszadanie.php');
}
echo "<table border='1'>";
for($i=0; $i<50; $i++ ){
echo "<tr>";
    echo "<td><div class='kolor1'></div></td>";
    for($k=0; $k<50; $k++ ){
}}
echo "</tr>";
echo "</table>";
?>
<style>
.kolor1{
  background-color: red;
}    
</style>