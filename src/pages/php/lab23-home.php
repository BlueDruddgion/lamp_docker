<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bác Hồ :)</title>
    <link rel="stylesheet" href="/css/lab23-home.css">
    <link rel="stylesheet" href="../../vendor/bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <!-- <script src="../statics/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="../../vendor/fontawesome-free-5.12.1-web/css/all.css">
    <script src="../../vendor/jquery-3.5.1.min.js"></script>
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
            <nav class="navbar float-right">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">
                        <a href="lab23-home.php?page=calculate" class="nav-link">Calculate</a>
                    </li>
                    <li class="list-group-item">
                        <a href="lab23-home.php?page=draw-table" class="nav-link">Draw Table</a>
                    </li>
                    <li class="list-group-item">
                        <a href="lab23-home.php?page=register" class="nav-link">Register</a>
                    </li>
                    <li class="list-group-item">
                        <a href="lab23-home.php?page=result-register" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </header>

        <section>
            <div class="row">
                <div class="col-md-4">
                    <img src="/images/nana-dog.jpg" alt="nana">
                    <img src="/images/nana-dog.jpg" alt="nana">
                </div>

                <div class="col-md-8">
                    <?php 
                        $page = "register";
                        if (isset($_GET["page"])) $page = $_GET['page'];
                        require_once("pages/$page.php");
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