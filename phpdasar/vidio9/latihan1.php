<?php
//variabel scope / lingkup variabel
$x = 10;

function tampilx() {
    $x = 20;
    echo $x;
}

tampilx();
echo "<br>";
echo $x;

?>