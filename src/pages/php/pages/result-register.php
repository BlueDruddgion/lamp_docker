<?php

    $username = $_POST['user-name'];
    $address = $_POST['address'];
    $job = $_POST['job'];
    $notes = $_POST['notes'];

?>
<div class="text-center" style="padding-top: 100px;">
    <h1>Ket qua dang ky:</h1>
    
    <?php
        if (isset($_POST['user-name'])) {
    ?>
    
    <div>Ten: <?php echo $username ?></div>
    <div>Dia chi: <?php echo $address ?></div>
    <div>Nghe: <?php echo $job ?></div>
    <div>Ghi chu: <?php echo $notes ?></div>

    <?php 
        }
    ?>
</div>