<?php
echo("hoeveel stapels? ");
$stapels = readline();
for ($i = 0; $i < $stapels+1; $i++) {
    echo str_repeat(" * ", $i) . "\n";
    }
?>