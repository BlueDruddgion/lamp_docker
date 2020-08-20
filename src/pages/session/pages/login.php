<?php
    $user = '';
    $password = '';

    if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        $user = $_COOKIE['username'];
        $password = $_COOKIE['password'];
    }

?>
<h1 class="text-center">Dang nhap</h1>
<form method="post">
    <div class="form-group row">
        <label class="col-md-3" for="username">Username: </label>
        <div class="col-md-6">
            <input type="text" name="username" id="username" class="form-control" value="<?php echo $user ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3" for="password">Password: </label>
        <div class="col-md-6">
            <input type="password" name="password" id="password" class="form-control" value="<?php echo $password ?>">
        </div>
    </div>

    <div class="buttons text-center">
        <input type="reset" value="Nhap lai" name="reset" class="btn btn-primary">
        <input type="submit" value="Dang nhap" name="submit" class="btn btn-primary">
    </div>
</form>

<?php

    if (isset($_POST['submit'])) {
        $user = $_POST['username'];
        $password = $_POST['password'];

        if ($user == 'admin' && $password == 'admin') {
            session_start();

            $_SESSION['username'] = $user;
            $_SESSION['password'] = $password;
            
            setcookie("username", $user, time() + 30*24*60*60);
            setcookie("password", $password, time() + 30*24*60*60);

            header("location: admin/index.php");
        } else {
            echo "<br>Ten dang nhap hoac mat khau khong dung";
        }
    }
?>