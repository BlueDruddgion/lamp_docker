<h2>Trang Draw Table:</h2>
<div class="text">Form ve bang:</div>
<form method="POST">
    <div class="form-group row">
        <label for="row" class="col-md-3">So dong: </label>
        <div class="col-md-6">
            <input type="number" id="row" name="row" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="col" class="col-md-3">So cot: </label>
        <div class="col-md-6">
            <input type="number" id="col" name="col" class="form-control">
        </div>
    </div>

    <input type="reset" value="Nhap Lai" name="reset" id="reset">
    <input type="submit" value="Ve" name="submit" id="submit">
</form>
<br>
<div class="result"></div>
<?php

    if (isset($_POST['submit'])) {
        $row = $_POST['row'];
        $col = $_POST['col'];

        // $script = "<script>$('.result').html('<table class=\"table table-border\"><tbody><tr><td>1</td></tr></tbody></table>')</script>";
        // echo $script;

        $script = "<script>$('.result').html('<table class=\"table table-bordered\"><tbody>";
        for ($i = 1; $i <= $row; $i++) {
            $script .= "<tr>";
            for ($j = 1; $j <= $col; $j++) {
                if ($j <= $i) $script .= "<td>$j</td>";
                else $script .= "<td></td>";
            }
            $script .= "</tr>";
        }
        $script .= "</tbody></table>')</script>";

        echo $script;
    }
?>