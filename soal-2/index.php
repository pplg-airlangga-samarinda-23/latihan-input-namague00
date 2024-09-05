<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <form method = "POST">
        <div>
            <label>ukuran</label> <br>
            <input name="ukuran" type="number" placeholder="masukkan ukuran">
            <div style="margin-bottom: 1rem;">
                <label>Status</label> <br>
                <select name="cihuyy">
                    <option value="m">km ke m</option>
                    <option value="cm">km ke hm</option>
                    <option value="mm">km ke mm</option>
                </select>
            </div>
            <button>hitung</button>
        </div>
    </form>

    <?php
    $ukuran = $_POST['ukuran'];
    $cihuyy =$_POST['cihuyy'];
    if($cihuyy == "m"){
        echo "hasil km ke m".$ukuran*1000;
    }
    if($cihuyy == "cm"){
        echo "hasil km ke cm".$ukuran*10000;
    }
    if($cihuyy == "mm"){
        echo "hasil km ke mm adalah: ".$ukuran*100000;
    }
    ?>
</body>
</html>