<div class="text-center" style="padding-top: 100px;">
<?php

    $result = 2;

    for ($i = 3; $i <= 10; $i++) {
        $result *= $i;
    }

    echo "<pre>Giai thua cua 10 = $result</pre>";

    $rad = 10;
    $result = $rad * $rad * pi();
    echo "<pre>Dien tich hinh tron co ban kinh 10: $result</pre>";
    $result = 4/3 * pi() * $rad * $rad * $rad;
    echo "<pre>The tich khoi cau ban kinh 10: $result</pre>";

    echo "<h1 class='ml2'>Hello World</h1>
    
    <script src=\"../../vendor/anime.min.js\"></script>

    <script>
        var textWrapper = document.querySelector('.ml2');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, \"<span class='letter'>$&</span>\");
    
        anime.timeline({loop: true})
        .add({
            targets: '.ml2 .letter',
            scale: [4,1],
            opacity: [0,1],
            translateZ: 0,
            easing: \"easeOutExpo\",
            duration: 950,
            delay: (el, i) => 70*i
        }).add({
            targets: '.ml2',
            opacity: 0,
            duration: 1000,
            easing: \"easeOutExpo\",
            delay: 1000
        });
    </script>
    
    ";

?>
</div>