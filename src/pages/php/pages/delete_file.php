<?php

    $dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';

    if (isset($_GET['file'])) {
        $delete_File = $_GET['file'];
        if (unlink($dir . $delete_File)) {
            echo "<script>alert(`$delete_File is deleted`)</script>";
        } else {
            echo "<script>alert(`unable to delete $delete_File`)</script>";
        }
    }

?>