<?php 
    ob_start();
    $this_link = $_SERVER['SCRIPT_FILENAME'] . $_SERVER['QUERY_STRING'];

    if (!isset($_COOKIE['fav_links'])) {
        $fav_links = array();
    } else {
        $fav_links = json_decode($_COOKIE['fav_links']);
    }
    array_push($fav_links, $this_link);
    setcookie('fav_links', json_encode($fav_links), 30*24*60*60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bác Hồ :)</title>
    <link rel="stylesheet" href="/css/session.css">
    <link rel="stylesheet" href="/vendor/bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/fontawesome-free-5.12.1-web/css/all.css">
    <script src="/vendor/jquery-3.5.1.min.js"></script>
</head>
<body>

    <div class="container-fluid">

        <header>
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/attack-on-titan.jpg" alt="aot">
                </div>
                <div class="col-md-6">
                    <img src="/images/attack-on-titan.jpg" alt="aot">
                </div>
            </div>
            <!-- <nav class="navbar float-right">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">
                        <a href="index.php?page=home" class="nav-link">Home</a>
                    </li>
                    <li class="list-group-item">
                        <a href="index.php?page=login" class="nav-link">Login</a>
                    </li>
                </ul>
            </nav> -->
        </header>

        <section>
            <div class="row">
                <div class="col-md-3 side-bar">
                    <!-- <img src="/images/nana-dog.jpg" alt="nana">
                    <img src="/images/nana-dog.jpg" alt="nana"> -->
                    <ul class="list-group">
                        <a href="../index.php?page=home" class="list-group-item">Return Home</a>
                        <a class="list-group-item" href="index.php?page=home">Admin Home</a>
                        <a class="list-group-item" href="index.php?page=logout">Logout</a>
                        <a class="list-group-item" href="index.php?page=upload">Upload</a>        
                    </ul>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-8" style="padding-top: 50px;">
                    <!-- <div class="head">Moi page duoc chay tren nen Index.php</div><br><br> -->
                    <?php

                        session_start();
            
                        if (!(isset($_SESSION['username']) && isset($_SESSION['password']))) {
                            echo "Chua dang nhap";
                            echo "<script>
                                $('a:not(:first-child)').click(function(e) {
                                    e.preventDefault()
                                })
                            </script>";
                        } else {
                            $page = "home";
                            if (isset($_GET['page'])) $page = $_GET['page'];
                            require_once("pages/$page.php");
                        }
                    ?>
                </div>
            </div>
        </section>

        <footer></footer>
    
    </div>

<?php 
    ob_flush();
?>
</body>
</html>