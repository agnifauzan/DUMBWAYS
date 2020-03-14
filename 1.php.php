<?php
$a = 2921690; //nilai awal
$b = $a * 0.021; //persentasi dari nilai awal
$c = $b * 12; // hasil persentasi(bunga) x 12 bulan


$d = $a + $c; // jumlahkan nilai awal dengan hasil % di kali 12
var_dump($d);
