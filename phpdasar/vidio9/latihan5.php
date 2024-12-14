<?php
// $_GET
$mahasiswa = [
     [
        "nama" => "Nailin nadrotun nabila", 
        "nrp" => "043040023",
        "email" => "nailinnabila@gmail.com", 
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "naylin.jpeg"
     ],
     [
        "nama" => "Rossa nandya amelia",
        "nrp" => "1890203546",
        "email" => "rossanandya@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "rossa.jpeg"
     ]];
     ?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan6.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
<?php endforeach; ?>
</ul>

</body>
</html>

