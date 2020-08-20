<?php
    ob_start();

    session_start();
    $lang = "english";
    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    }
    require_once("lang/$lang.php");
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
                <div class="buttons" style="margin-right: 300px;">
                    <form method="post">
                        <input type="submit" value="Vietnamese" id="btnViet" name="btnViet" class="btn btn-primary">
                        <input type="submit" value="English" id="btnEng" name="btnEng" class="btn btn-primary">
                    </form>
                </div>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">
                        <a href="lab42-index.php?page=home" class="nav-link"><?php echo HOME ?></a>
                    </li>
                    <li class="list-group-item">
                        <a href="lab42-index.php?page=calculate" class="nav-link"><?php echo CONTACT ?></a>
                    </li>
                    <li class="list-group-item">
                        <a href="lab42-index.php?page=drawTable" class="nav-link"><?php echo DRAWTABLE ?></a>
                    </li>
                    <li class="list-group-item">
                        <a href="lab42-index.php?page=loop" class="nav-link"><?php echo LOOP ?></a>
                    </li>
                    <li class="list-group-item">
                        <a href="lab42-index.php?page=arr1Chieu" class="nav-link">Ar1Chieu</a>
                    </li>
                    <li class="list-group-item">
                        <a href="lab42-index.php?page=matrix" class="nav-link">Matrix</a>
                    </li>
                    <li class="list-group-item">
                        <a href="lab42-index.php?page=associateArray" class="nav-link">AssociateArr</a>
                    </li>
                    <li class="list-group-item">
                        <a href="lab42-index.php?page=display_file_uploads" class="nav-link">Display Uploaded File</a>
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

                <div class="col-md-8" style="padding-top: 50px;">
                    <div class="head">Moi page duoc chay tren nen Index.php</div><br><br>
                    <?php 
                        $page = "home";
                        if (isset($_GET["page"])) $page = $_GET['page'];

                        if (isset($_POST['btnViet'])) {
                            $_SESSION['lang'] = 'vietnamese';
                            header("location: lab42-index.php?page=$page");
                        } else if (isset($_POST['btnEng'])) {
                            $_SESSION['lang'] = 'english';
                            header("location: lab42-index.php?page=$page");
                        }

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