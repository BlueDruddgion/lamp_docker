<?php

    $host = 'mysql';
    $user = 'beo';
    $password = 'Hai@1999';
    $db = 'QUALK';

    $conn = new mysqli($host, $user, $password, $db);
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

?>