<br>
<br>
<h1 class="text-center">Hello From Beo Application</h1>
<?php
    $this_link = $_SERVER['SCRIPT_FILENAME'] . $_SERVER['QUERY_STRING'];

    if (!isset($_COOKIE['fav_links'])) {
        $fav_links = array();
    } else {
        $fav_links = json_decode($_COOKIE['fav_links']);
    }
    array_push($fav_links, $this_link);
    setcookie('fav_links', json_encode($fav_links), 30*24*60*60);
?>