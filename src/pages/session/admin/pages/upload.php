<?php
    
?>
<h1>Trang upload Files:</h1>
<br>
<form method='post' enctype='multipart/form-data'>
    <?php

        for ($i = 1; $i <= 5; $i++) {
            echo "<div class='form-group row'>
                    <label for='picture' class='col-md-2'>File $i: </label>
                    <div class='col-md-10'>
                        <input type='file' name='picture[]'>
                    </div>
                </div>";
        }
    ?>

    <div class="buttons text-center">
        <br>
        <input type="reset" value="Reset" name="reset" class="btn btn-primary">
        <input type="submit" value="Upload" name="submit" class="btn btn-primary">
    </div>

</form>

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

?>