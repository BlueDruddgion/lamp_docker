<h1>Su dung mang ket hop:</h1>
<br>
<form action='lab42-index.php?page=display_file_uploads' method='post' enctype='multipart/form-data'>
<!-- <form method='post' enctype='multipart/form-data'> -->

    <?php

    for ($i = 1; $i <= 10; $i++) {
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