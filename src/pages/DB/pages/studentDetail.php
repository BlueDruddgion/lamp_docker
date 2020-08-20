<?php

    $id = $_GET['id'];
    $query = "Select * from student where id=$id";
    $result = $conn->query($query);
    while ($row = $result->fetch_row()) {
        $name = $row[1];
        if ($row[2] == 'M') $gender = 'Nam';
        else $gender = 'Nu';
        $address = $row[3];
        $image = $row[4];
        $classID = $row[5];
        echo "<script>
                alert(`ID: $id\r\nTen: $name\r\nGioi tinh: $gender\r\nDia chi: $address\r\nHinh anh: $image`)
                window.location.href = 'index.php?page=listStudentsInClass.php&classID=$classID'
              </script>";
    }
?>