<?php

    echo "<!-- For loop -->";
    echo "<br><br><div>In ket qua duoi theo 3 cach: For, While, Do-while</div>";
    for ($i = 1; $i < 10; $i++) {
        $line = str_repeat(' * ', $i);
        echo "<div>$line</div>\r\n";
    }
    echo "<!-- While loop -->"; 
    echo "<br>";
    $i = 1;
    while ($i < 10) {
        $line = str_repeat(' * ', $i);
        echo "<div>$line</div>\r\n";
        $i++; 
    }
    echo "<!-- Do-while loop -->";
    echo "<br>";
    $i = 1;
    do {
        $line = str_repeat(' * ', $i);
        echo "<div>$line</div>\r\n";
        $i++;
    } while ($i < 10);

?>