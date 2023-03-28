<?php

$string = 'Hello world!';
$result = preg_match('/world/', $string);

echo '<p>$result is ' . $result . '</p>';