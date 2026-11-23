<!DOCTYPE html>
<html>
<head>
    <title>Latihan 11 - Jari-jari Lingkaran</title>
</head>
<body>
    <h3>Hitung Jari-jari Lingkaran</h3>
    <form method="POST" action="">
        <label>Masukkan Luas Lingkaran:</label>
        <input type="number" step="any" name="luas" required>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $luas = $_POST['luas'];
        // Rumus: r = akar(luas / pi)
        $jari_jari = sqrt($luas / pi());
        
        echo "<br><b>Hasil:</b><br>";
        echo "Luas yang diinput: " . $luas . "<br>";
        echo "Jari-jari lingkaran: " . number_format($jari_jari, 2);
    }
    ?>
</body>
</html>