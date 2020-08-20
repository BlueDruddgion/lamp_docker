<h1>Su dung mang de tinh tong, hieu, tich 2 ma tran</h1>
<form class="text-center" method="post">
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="text">Nhap Ma tran 1</div>
            <?php
                for ($i = 1; $i <= 3; $i++) {
                    for ($j = 1; $j <= 3; $j++) {
                        echo "<input class='form-control d-inline col-md-4' name='mx1[$i][]' />";
                    }
                    echo "<br>";
                }
            ?>
        </div>
        <div class="col-md-6 text-center">
            <div class="text">Nhap Ma tran 2</div>
            <?php
                for ($i = 1; $i <= 3; $i++) {
                    for ($j = 1; $j <= 3; $j++) {
                        echo "<input class='form-control d-inline col-md-4' name='mx2[$i][]' />";
                    }
                    echo "<br>";
                }
            ?>
        </div>
    </div>
    <div class="buttons text-center">
        <br>
        <input type="reset" name="reset" value="Nhap lai" class="btn btn-primary">
        <input type="submit" name="submit" value="Tinh" class="btn btn-primary">
    </div>

</form>

<?php 

    function sum($arr1, $arr2) {
        $sum = array();
        foreach ($arr1 as $key=>$value) {
            $subarray = array();
            foreach ($value as $key1=>$value2) {
                array_push($subarray, $value2 + $arr2[$key][$key1]);
            }
            array_push($sum, $subarray);
        }
        return $sum;
    }

    function diff($arr1, $arr2) {
        $minus = array();
        foreach ($arr1 as $key=>$value) {
            $subarray = array();
            foreach ($value as $key1=>$value2) {
                array_push($subarray, $value2 - $arr2[$key][$key1]);
            }
            array_push($minus, $subarray);
        }
        return $minus;
    }

    function multi($arr1, $arr2) {
        $mul = array();
        for ($i = 0; $i < 3; $i++) {
            for ($k = 0; $k < 3; $k++) {
                $mul[$i][$k] = 0;
                for ($j = 0; $j < 3; $j++) {
                    $mul[$i][$k] += $arr1[$i][$j] + $arr2[$j][$k];
                }
            }
        }
        return $mul;
    }

    function max_2D_array($arr) {
        return max(max($arr));
    }

    function min_2D_array($arr) {
        return min(min($arr));
    }

    function sum_on_primary_diagonal($arr) {
        $sum = 0;
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($i == $j) $sum += $arr[$i][$j];
            }
        }
        return $sum;
    }

    function sum_on_second_diagonal($arr) {
        $sum = 0;
        for ($i = 0; $i < 3; $i++) {
            for ($j = 2; $j >= 0; $j--) {
                if ($i == 2 - $j) $sum += $arr[$i][$j];
            }
        }
        return $sum;
    }

    if (isset($_POST['submit'])) {
        $arr1 = array(); $arr2 = array();
        foreach ($_POST["mx1"] as $m1) {
            array_push($arr1, $m1);
        }
        foreach ($_POST["mx2"] as $m2) {
            array_push($arr2, $m2);
        }
        $sum = sum($arr1, $arr2);
        $minus = diff($arr1, $arr2);
        $mul = multi($arr1, $arr2);
        // print_r(sum_on_primary_diagonal($arr1));
        // print_r(sum_on_second_diagonal($arr1));
        echo "
            <h3>KET QUA: </h3><br>
            
            <div class='sum'>MA TRAN TONG: <br>";
        foreach ($sum as $key => $value) {
            foreach ($value as $key1 => $value1) {
                echo "$value1\r\t";
            }
            echo "<br>";
        }
        echo "</div><div class='minus'>MA TRAN HIEU: <br>";
        foreach ($minus as $key1 => $value1) {
            foreach ($value1 as $key2 => $value2) {
                echo "$value2\r\t";
            }
            echo "<br>";
        }
        echo "</div><div class='multiply'>MA TRAN TICH: <br>";
        foreach ($mul as $key1 => $value1) {
            foreach ($value1 as $key2 => $value2) {
                echo "$value2\r\t";
            }
            echo "<br>";
        }
        echo "</div>";
    }

?>