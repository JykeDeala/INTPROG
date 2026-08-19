<?php
$stars = 18;

if ($stars >= 25) {
    echo "Mythic";
} elseif ($stars >= 15) {
    echo "Legend";
} elseif ($stars >= 5) {
    echo "Epic";
} else {
    echo "Grandmaster";
}
?>
