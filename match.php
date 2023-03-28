<?php

$string = 'Hello World!';
$result = preg_match('/world/', $string);

echo '<p>$result is ' . $result . '</p>';