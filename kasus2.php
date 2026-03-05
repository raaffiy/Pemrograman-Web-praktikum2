<!DOCTYPE html>
<html>
<head>
    <title>Konverter Desimal ke Hexadecimal</title>
</head>
<body>
    <h2>Konverter Desimal ke Hexadecimal</h2>

    <form method="post">
        Masukkan Bilangan Desimal:
        <input type="number" name="desimal" required>
        <button type="submit">Konversi</button>
    </form>

    <?php
        if (isset($_POST['desimal'])) {
            $desimal = $_POST['desimal'];
            $hexadecimal = dechex($desimal);
        
            echo "<h3>Hasil Konversi:</h3>";
            echo "Bilangan Desimal: " . $desimal . "<br>";
            echo "Bilangan Hexadecimal: " . strtoupper($hexadecimal);
        }
    ?>

</body>
</html>