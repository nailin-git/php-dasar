<?php
$mahasiswa = [
    ["Nailin nadrotun nabila", "0191422008", "Rekayasa Perangkat Lunak", "nailinnabila@gmail.com"],
    ["Rossa nandya amelia", "1890203546", "Rekayasa Perangkat Lunak", "rossanadya@gmail.com"],
    ["Luna avanzia saputri", "2019384567", "Rekayasa Perangkat Lunak", "lunaavanzia@gmail.com"]
];

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
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>