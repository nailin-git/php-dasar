<?php
// $mahasiswa = [
//["Nailin nadrotun nabila", "0191422008", "Rekayasa Perangkat Lunak", "nailinnabila@gmail.com"],
//["Rossa nandya amelia", "1890203546", "Rekayasa Perangkat Lunak", "rossanadya@gmail.com"],
//];

//Array Associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa = [
     [
        "nama" => "Nailin nabila", 
        "nrp" => "043040023",
        "email" => "nailinnabila@gmail.com", 
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "naylin.jpeg"
     ],
     [
        "nama" => "Rossa nandya",
        "nrp" => "1890203546",
        "email" => "rossanandya@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "rossa.jpeg"
     ]]
;

?>
<!DOCTYPE html>
<html>
<head>
        <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul> 
            <li>
                <img src="img/<?= $mhs["gambar"]; ?> " width="150px">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>