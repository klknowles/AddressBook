<?php
    $DBhost = 'localhost';
    $DBuser = 'root';
    $DBpasswd = 'knowles1970';
    $DB = 'fakedb';

    $conn = mysqli_connect($DBhost, $DBuser, $DBpasswd, $DB) or 
    die('Connection failed error: $s\n');
?>