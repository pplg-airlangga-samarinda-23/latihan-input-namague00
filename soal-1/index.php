<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <form method = "POST">
        <div>
            <label>jari</label> <br>
            <input name="jari-jari" type="number" placeholder="masukkan jari-jari  tabung">
        </div>
        <div>
        <label>tinggi</label> <br>
        <input name="tinggi" type="number" placeholder="masukkan tinggi tabung">
        </div>
        <div>
            <button>hitung</button>
        </div>
    </form>

    <?php

    $pi = 3.14;
    $jari= @$_POST['jari-jari'];
    $tinggi=  @$_POST['tinggi'];
    $hasil = ($pi*$jari*$jari* $tinggi);
    echo "volume tabung adalah :" .$hasil;
    ?>
</body>
</html>