<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal 5</title>
</head>
<body>
<form method="POST">
    <div>
        <label>masukkan 5-20</label>
        <input name="kk" type="number" placeholder="5-20" min="5" max="20" required>
        <div style ="margin-bottom: 1rem;">
            <label>pilih</label><br>
            <select name="status" required>
                <option value="genap">Genap</option>
                <option value="ganjil">Ganjil</option>
            </select>
        </div> 
        <button type="submit">hitung</button>
    </div>
</form>

<?php
if (isset($_POST['kk']) && isset($_POST['status'])) {
    $status = $_POST['status'];
    $kk = (int) $_POST['kk'];

    if ($status == "genap") {
        echo "Bilangan Genap:<br>";
        for ($i = 1; $i <= $kk; $i++) {
            echo $i;
            if ($i % 2 == 0) {
                echo " gua<br>";
            }
            else {
                echo"<br>";
            }
        }
    } elseif ($status == "ganjil") {
        echo "Bilangan Ganjil:<br>";
        for ($i = 1; $i <= $kk; $i++) {
            echo $i;
            if ($i % 2 == 1) {
                echo " gw<br>";
            }
            else {
                echo"<br>";
            }
        }
    }
}
?>
</body>
</html>