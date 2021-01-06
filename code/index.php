<?php
$konek = new mysqli("db", "root", "example", "dbdocker");
$entry = "INSERT INTO biodata (nama, nim, kelas) VALUES ('Azzahra Novitri Wulandari', '195410063', 'TI-2')";
$run = $konek->query($entry);
$ambildata = "SELECT * FROM biodata";
if ($run = $konek->query($ambildata)) {
    while ($tmp = $run->fetch_object()) {
        $biodata[] = $tmp;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>195410063</title>
</head>
<body>
    <h1>Responsi Mata Kuliah Teknologi Cloud</h1>
    <h3>Dosen : M. Agung Nugroho, S.Kom., M.Kom.</h3>
    <br>
    <?php
    foreach ($biodata as $bio) {
        echo "Nama : ".$bio->nama."<br>";
        echo "NIM : ".$bio->nim."<br>";
        echo "Kelas : ".$bio->kelas."<br>";
        echo "<br>";
    }
    ?>
</body>
</html>