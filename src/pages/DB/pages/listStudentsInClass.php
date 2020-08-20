<?php
    
    $classID = $_GET['classID'];
    $query = "select * from student where class_id=$classID";
    $result = $conn->query($query);

?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col" style="border-right: 0 !important;">DANH SACH SINH VIEN TRONG LOP</th>
            <th scope="col" style="border-left: 0 !important; border-right: 0 !important;"></th>
            <th scope="col" style="border-left: 0 !important; border-right: 0 !important;"></th>
            <th scope="col" style="border-left: 0 !important; border-right: 0 !important;"></th>
        </tr>
        <tr>
            <th scope="col" width=350>Ten</th>
            <th scope="col">Dia Chi</th>
            <th scope="col">Gioi tinh</th>
            <th scope="col">Thao tac</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $result->fetch_array(MYSQLI_NUM)) {
                if ($row[2] == 'M') $gender = 'Nam';
                else if ($row[2] == 'F') $gender = 'Nu';
                $id = $row[0];
                echo "<tr><th scope=\"row\">$row[1]</th>
                <td>$row[3]</td>
                <td>$gender</td>
                <td><a href=\"index.php?page=studentDetail.php&id=$id\">Chi tiet</a></td></tr>";
            }
        ?>
    </tbody>
</table>