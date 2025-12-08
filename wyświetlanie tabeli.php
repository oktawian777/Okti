<?php
$conn = mysqli_connect("localhost", "root", "", "baza");
?>

<form method="POST">
    <select name="tabela">
        <?php
        $tabele = mysqli_query($conn, "SHOW TABLES");
        while($t = mysqli_fetch_row($tabele)){
            echo "<option>$t[0]</option>";
        }
        ?>
    </select>
    <button>Wybierz tabelę</button>
</form>

<?php
if (isset($_POST["tabela"])) {

    $tabela = $_POST["tabela"];
    $kolumny = mysqli_query($conn, "SHOW COLUMNS FROM $tabela");
?>

<form method="POST">
    <input type="hidden" name="tabela" value="<?php echo $tabela; ?>">
    <select name="kolumna">
        <?php
        while($k = mysqli_fetch_row($kolumny)){
            echo "<option>$k[0]</option>";
        }
        ?>
    </select>
    <button name="show">SHOW</button>
</form>

<?php
}
?>

<?php
if (isset($_POST["show"])) {

    $tabela = $_POST["tabela"];
    $kolumna = $_POST["kolumna"];

    $wynik = mysqli_query($conn, "SELECT $kolumna FROM $tabela");

    while ($w = mysqli_fetch_row($wynik)) {
        echo $w[0] . "<br>";
    }
}