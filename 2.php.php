<?php
$kata = ['dumbs', 'ways', 'the', 'best'];
$word = 'dumbways';

if (in_array('dumbs', $kata)) {
    echo "dumbs" . " ";
    echo "true";
    echo "<br>";
} else {
    echo "false";
}

if (in_array('ways', $kata)) {
    echo "ways" . " ";
    echo "true";
    echo "<br>";
} else {
    echo "false";
}

if (in_array('the', $kata)) {
    echo "the" . " ";
    echo "false";
    echo "<br>";
} else {
    echo "true";
}

if (in_array('best', $kata)) {
    echo "best" . " ";
    echo "false";
} else {
    echo "true";
}
