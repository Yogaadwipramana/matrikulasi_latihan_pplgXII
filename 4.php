<?php
$waktu;
$jam;
$menit;
$detik;
$hasil = "";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Waktu</title>
</head>
<body>
    <form action="" method="post">
        <h1>Waktu</h1>
        <div class="display: flex;">
            <label for="waktu">Masukkan Waktu awal (detik) : </label>
            <input type="number" id="waktu" name="waktu">
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>


<?php
if (isset($_POST['submit'])) {
    $waktu = $_POST['waktu']; 

    if ($waktu >= 3600) {
        // floor : membulatkan ke bawah
        $jam = floor($waktu / 3600);
        $waktu -= ($jam * 3600);
        $hasil .= $jam . " jam ";
    }
    else{
        echo "0 jam";
    }
    if ($waktu >= 60) {
        $menit = floor($waktu / 60); 
        $waktu -= ($menit * 60);
        $hasil .= $menit . " menit ";
    }
    else{
        echo "0 menit";
    }
    $detik = $waktu;
    $hasil .= $detik . " detik ";
    echo $hasil;
}
?>
