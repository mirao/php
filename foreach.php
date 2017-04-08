<?php
split("css", array("M", "O"), "s");

list($first, $last) = ["a", "b", "c"];
var_dump($first);
var_dump($last);


function split()
{
    $args = func_get_args();
    array_shift($args);
    $keys = [];
    foreach ($args as $key) {
        $keys[] = $key;
        var_dump($key);
    }
}
