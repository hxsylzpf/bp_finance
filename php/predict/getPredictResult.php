<?php

if(!isset($_COOKIE['username'])) {
    echo 0;
    exit;
}
$unique_id = $_COOKIE['username'];

$path = '../../tmp/' . $unique_id . '/result.tmp';

echo @file_get_contents($path);
