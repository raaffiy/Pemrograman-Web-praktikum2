<?php
$hasil = "";

if(isset($_POST['desimal'])){
    $desimal = $_POST['desimal'];

    if(is_numeric($desimal)){
        $hasil = strtoupper(dechex($desimal));
    } else {
        $hasil = "Input harus berupa angka!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konverter Desimal ke Hexadecimal</title>
    <style>
        body{
            font-family: Arial;
            background:#f4f4f4;
            text-align:center;
            padding-top:80px;
        }
        .container{
            background:white;
            padding:30px;
            width:400px;
            margin:auto;
            border-radius:10px;
            box-shadow:0px 0px 10px rgba(0,0,0,0.2);
        }
        input{
            padding:10px;
            width:80%;
            margin-top:10px;
        }
        button{
            padding:10px 20px;
            margin-top:15px;
            background:#3498db;
            border:none;
            color:white;
            cursor:pointer;
        }
        .hasil{
            margin-top:20px;
            font-size:20px;
            font-weight:bold;
        }
    </style>

</head>
    <body>

        <div class="container">

            <h2>Konverter Desimal ke Hexadecimal</h2>

            <form method="POST">
                <input type="number" name="desimal" placeholder="Masukkan bilangan desimal" required>
                <br>
                <button type="submit">Konversi</button>
            </form>

            <?php
            if($hasil != ""){
                echo "<div class='hasil'>Hasil Hexadecimal : $hasil</div>";
            }
            ?>

        </div>

    </body>
</html>