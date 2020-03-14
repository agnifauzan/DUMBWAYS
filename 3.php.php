<?php
for ($c = 0; $c < 5; $c++) {
    for ($a = 0; $a < 5; $a++) {
        if ($a % 2 == 1) {
            echo "*" . " ";
        } else {
            echo "=" . " ";
        }
    }
    echo "<br>";
}
