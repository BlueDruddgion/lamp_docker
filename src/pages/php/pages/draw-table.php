<?php 

    echo "<style>
        .print {
            padding-top: 50px;
        }    

        span {
            margin: 20px 40px;
            font-size: 40px;
        }
    </style>";
    echo "<div class='text-center print'>";
    for ($i = 1; $i < 10; $i++) {
        echo "<span>$i\t</span>";
    }
    echo "<br>";
    for ($i = 9; $i >= 1; $i--) {
        echo "<span>$i\t</span>";
    }
    echo "<br>";
    for ($i = 1; $i < 10; $i++) {
        echo "<span>$i\t</span>";
    }
    echo "<br>";
    for ($i = 9; $i > 0; $i--) {
        echo "<span>$i\t</span>";
    }
    echo "<br>";
    echo "</div>";
?>