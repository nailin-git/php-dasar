<?php
function salam($waktu = "Datang", $nama = "Nailin") {
    return "Selamat $waktu, $nama!";
}

?>
<!DOTYPE html>
<html>
<head>
        <title>Latian Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Nailin nadrotun nabila"); ?></h1>
</body>
</html>