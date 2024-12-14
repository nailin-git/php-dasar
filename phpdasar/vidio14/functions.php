<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
    global $conn;
    $result = mysqli_query( $conn, $query );
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;

    $nrp = htmlspecialchars($_data["nrp"]);
    $nama = htmlspecialchars($_data["nama"]);
    $email = htmlspecialchars($_data["email"]);
    $jurusan = htmlspecialchars($_data["jurusan"]);
    $gambar = htmlspecialchars($_data["gambar"]);

    $query = "INSERT INTO mahasiswa
                VALUES
               ('', '$nrp', '$nama', '$email', '$jurusan', 'gambar')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nrp = htmlspecialchars($_data["nrp"]);
    $nama = htmlspecialchars($_data["nama"]);
    $email = htmlspecialchars($_data["email"]);
    $jurusan = htmlspecialchars($_data["jurusan"]);
    $gambar = htmlspecialchars($_data["gambar"]);

    $query = "UPDATE mahasiswa SET
              nrp = '$nrp',
              nama = '$nama',
              email = '$email',
              jurusan = '$jurusan',
              gambar = '$gambar'
              WHERE id = $id
              ";
              
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
    

function cari($keyword) {
    $query = "SELECT * FROM mahasiswa
                 WHERE
            nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' 
    ";
    return query($query);
}