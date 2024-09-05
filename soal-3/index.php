<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 3</title>
</head>
<body>
    <h1>Soal 3</h1>
    <form method="POST">
        <div>
            <label>ANGKA</label> <br>
            <input name="angka1" type="number" placeholder="masukkan angka" > <br>
            <label>ANGKA</label> <br>
            <input name="angka2" type="number" placeholder="masukkan angka">
        </div>
        <div style="margin-bottom: 1rem;">
            <label>PERHITUNGAN</label> <br>
                <input type="radio" name="kocak" value="tambah">tambah <br>
                <input type="radio" name="kocak" value="kurang">kurang <br>
                <input type="radio" name="kocak" value="kali">kali <br>
                <input type="radio" name="kocak" value="bagi">bagi <br>

            
        </div>
        <div>
            <button>cihuyy</button>
        </div>
    </form>
    <?php
        $angka1 = @$_POST['angka1'];
        $angka2 = @$_POST['angka2'];
        $kocak = @$_POST['kocak'];
        if($kocak == "tambah"){
            echo "hasil adalah: " .$angka1 + $angka2;
        }
        if ($kocak == "kurang") {
            echo "hasil adalah: " .$angka1 - $angka2;
        }
        if ($kocak == "kali"){
            echo "hasil adalah: " .$angka1 * $angka2;
        }
        if ($kocak == "bagi") {
            echo "hasil adalah: " .$angka1 / $angka2;
        }
    ?>
</body>
</html>