<?php

$string = 'Hello world!';
$result = preg_match('/world/', $string);

echo '<p>$result is ' . $result . '</p>';

$resources = 'w3schools.com, regex101.com, www.regular-expressions.info';

if (preg_match('/\d/', $resources)) {
    echo '<p>The resources list contains digits. </p>';
} else {
    echo '<p>The resources list NOT containers digits.</p>';
}
