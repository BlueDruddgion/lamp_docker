<?php 
    ob_start();
    require_once('libs/connectDB.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bác Hồ :)</title>
    <link rel="stylesheet" href="/css/lab23-home.css">
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
            <nav class="navbar float-right">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">
                        <a href="index.php?page=home" class="nav-link">Home</a>
                    </li>
                    <!-- <li class="list-group-item">
                        <a href="index.php?page=listStudentsInClass" class="nav-link">List Students In Class</a>
                    </li> -->
                </ul>
            </nav>
        </header>

        <section>
            <div class="row">
                <div class="col-md-3" style="background-color: yellow">
                    <!-- <img src="/images/nana-dog.jpg" alt="nana">
                    <img src="/images/nana-dog.jpg" alt="nana"> -->
                    <div class="class-result-1">
                        Danh sach cac lop (Cach 1):
                        <ul class="list-unstyled">
                        <?php
                            $query = "Select * from class";
                            $result = $conn->query($query);
                            while ($row = $result->fetch_row()) {
                                $malop = $row[0];
                                $tenlop = $row[1];
                                echo "<a href=\"index.php?page=listStudentsInClass.php&classID=$malop\">$tenlop</a><br>";
                            }
                        ?>
                        </ul>
                    </div>
                    <div class="class-result-2">
                        Danh sach cac lop (Cach 2):
                        <ul class="list-unstyled">
                            <?php
                                $query = "Select * from class";
                                $result = $conn->query($query);
                                while ($row = $result->fetch_array(MYSQLI_NUM)) {
                                    $malop = $row[0];
                                    $tenlop = $row[1];
                                    echo "<a href=\"index.php?page=listStudentsInClass.php&classID=$malop\">$tenlop</a><br>";
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="class-result-3">
                        Danh sach cac lop (Cach 3):
                        <ul class="list-unstyled">
                            <?php
                                $query = "Select * from class";
                                $result = $conn->query($query);
                                while ($row = $result->fetch_assoc()) {
                                    $malop = $row["id"];
                                    $tenlop = $row['class_name'];
                                    echo "<a href=\"index.php?page=listStudentsInClass.php&classID=$malop\">$tenlop</a><br>";
                                }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-9" style="padding-top: 50px;">
                    <!-- <div class="head">Moi page duoc chay tren nen Index.php</div><br><br> -->
                    <?php 
                        $page = "listStudentsInClass.php";
                        if (isset($_GET["page"])) $page = $_GET['page'];
                        // header("location: index.php?$page.php&classID=1");
                        require_once("pages/$page");
                    ?>
                </div>
            </div>
        </section>

        <footer></footer>
    
    </div>

<?php 
    ob_flush();
    require_once('libs/closeConnectDB.php');
?>
</body>
</html>