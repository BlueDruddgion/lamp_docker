<?php

    // define('ROOT_DIRECTORY', realpath(dirname(__FILE__)));

    echo '<h1>Hello World! I\'m Beo from PHP with Docker</h1>';

    $host = 'mysql';
    $user = 'beo';
    $password = 'Hai@1999';

    $conn = new mysqli($host, $user, $password);
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        echo 'Connect success!';
    }

?>