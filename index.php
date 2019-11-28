<?php

function fill (&$arr, $idx = 0) {
    $line = array();
    $keys = array();
    $max = 0;
    $results = array();
    if ($idx == 0) {
        $keys = array_keys($arr);
        $max = count($arr);
        $results = array();
    }
    if ($idx < $max) {
        $values = $arr[$keys[$idx]];
        foreach ($values as $value) {
            array_push($line, $value);
            fill($arr, $idx+1);
            array_pop($line);
        }
    } else {
        $results[] = $line;
    }
    if ($idx == 0) return $results;
}
