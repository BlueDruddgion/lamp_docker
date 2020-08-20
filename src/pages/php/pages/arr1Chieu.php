<h2>Theo tac tren mang 1 chieu</h2>
<p>Bai toan nhap vao chuoi so, tinh tong cac so, gia tri trung binh, tim min, max, trung binh</p>
<form method="POST" class='text-center'>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<input type='number' name='arr[]' style='width: 119px' class='form-control d-inline'/>";
        }
    ?>
    <div class="button-container">
        <br>
        <input type="reset" name="reset" value="Reset" class="btn btn-primary">
        <input type="submit" name="submit" value="Calculate" class="btn btn-primary">
    </div>
</form>

<?php

    function min_value($arr) {
        return min($arr);
    }

    function max_value($arr) {
        return max($arr);
    }

    function sum_value($arr) {
        return array_sum($arr);
    }

    function avg_value($arr) {
        return sum_value($arr) / count($arr);
    }

    function reversed_array($arr) {
        return array_reverse($arr);
    }

    function sorted_array($arr) {
        return sort($arr);
    }
    
    if (isset($_POST['submit'])) {
        $arr = array();
        foreach ($_POST['arr'] as $element) {
            array_push($arr, $element);
        }
        $sum = sum_value($arr); $avg = avg_value($arr);
        $max = max_value($arr); $min = min_value($arr);

        echo "
            <div class='result'>
                <br>
                <h3>KET QUA:</h3>
                <div class='sum'>Tong: $sum</div>
                <div class='avg'>Trung binh: $avg</div>
                <div class='min'>Min: $min</div>
                <div class='max'>Max: $max</div>
            </div>
        ";
        exit;
    }
?>