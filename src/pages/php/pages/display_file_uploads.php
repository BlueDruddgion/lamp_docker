<h1>Danh sach file da upload</h1>
<?php

    $dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';

    if (isset($_POST['submit'])) {
        if (isset($_FILES['picture'])) {
            foreach ($_FILES['picture']['name'] as $key => $name) {
                if (!empty($name)) {
                    $file_tmp = $_FILES['picture']['tmp_name'][$key];
                    $file_destination = $dir . $name;
                    move_uploaded_file($file_tmp, $file_destination);
                }
            }
        }
    }

    $files = scandir($dir);
    foreach ($files as $key => $file) {
        if (!in_array($file, array('.', '..'))) {
            echo "<div class='link'>
                <a href='/uploads/$file'>Download File: $file</a>
                <a onclick=\"javascript: return confirm('Please confirm deletion')\" href='pages/delete_file.php?file=$file'>Delete</a>
            </div>";
        }
        
    }

?>