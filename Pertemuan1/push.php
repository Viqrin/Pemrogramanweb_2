<?php
// array_push
$komponen = ["Mobo", "Processor", "RAM", "SSD", "GPU"];
//Menambahkan elemen di akhir array
array_push($komponen, "PSU", "Cassing");

echo "Setelah push<br>";
foreach ($komponen as $k) {
    echo "$k <br>";
}
?>