<?php 
    for ($année = 2000; $année <= 2025; $année++) {
        echo $année . ", ";
}
?>
<hr>
<?php
for ($nombre = 100; $nombre >= 0; $nombre--) {
    echo $nombre . ", ";
}
?>
<hr>
<?php
for ($nombres = 1; $nombres <= 99; $nombres+=2) {
    echo ($nombres % 2 !=0) ? $nombres . ", " : "";
} 
?>