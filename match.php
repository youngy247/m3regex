<?php

$string = 'Hello world!';
$result = preg_match('/world/', $string);

echo '<p>$result is ' . $result . '</p>';

$resources = 'w3schools.com, regex101.com, www.regular-expressions.info';

if (preg_match('/\d/', $resources)) {
    echo '<p>The resources list contains digits. </p>';
} else {
    echo '<p>The resources list does NOT contain digits.</p>';
}

if (preg_match('/o{2,}/', $resources)) {
    echo '<p>The resources list contains repeated "o"s </p>';
} else {
    echo '<p>The resources list does NOT contain repeated "o"s.</p>';
}