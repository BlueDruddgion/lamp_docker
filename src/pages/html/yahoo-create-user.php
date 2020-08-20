<?php
    $host = 'mysql';
    $user = 'beo';
    $password = 'Hai@1999';
    $db = 'QUALK';

    $conn = new mysqli($host, $user, $password, $db);

    if ($conn->connect_error) die('<script>alert(\'Connection failed! ' . $conn->connect_error . '\')</script>');
    // else echo '<script>alert(\'Connect success!\')</script>';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yahoo Server!</title>
    <link rel="stylesheet" href="../css/yahoo.css">
    <link rel="stylesheet" href="../vendor/bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <!-- <script src="../statics/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="../vendor/fontawesome-free-5.12.1-web/css/all.css">
    <script src="../vendor/jquery-3.5.1.min.js"></script>
</head>
<body>
    <header>
        <div class="container-fluid">
            <span>Yahoo!</span>
            <div class="link">
                <a href="javascript:void(0)">Help</a>
                <a href="javascript:void(0)" class="index">Yahoo!</a>
            </div>
        </div>
    </header> <!-- end header -->

    <!-- Section begin -->
    <section class="container">
        <form class="form-container" method="POST">
            <br>
            <span>Get a Yahoo! ID and free email to connect to people and info that you care about.</span>
            <hr>
            <table>
                <tr>
                    <th><label for="name">Name</label></th>
                    <td>
                        <input name="name" id="fname" type="text" placeholder="First Name">
                        <input type="text" name="name" id="lname" placeholder="Last Name">
                    </td>
                </tr>
                <tr>
                    <th><label for="gender">Gender</label></th>
                    <td>
                        <select name="gender" id="gender">
                            <option hidden disabled selected>- Select One -</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="birthday">Birthday</label></th>
                    <td>
                        <select name="birthday" id="month">
                            <option hidden selected disabled>- Select Month -</option>
                            <?php
                                $month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
                                for ($x = 0; $x < count($month); $x++) {
                                    echo "<option value=\"$month[$x]\">$month[$x]</option>";
                                }
                            ?>
                        </select>
                        <input type="text" placeholder='Day' name='birthday' id='day' size='6'>
                        <input type="text" placeholder='Year' name='birthday' id='year' size='6'>
                    </td>
                </tr>
                <tr>
                    <th><label for="country">Country</label></th>
                    <td>
                        <select name="country" id="country" style="width: 100%">
                            <?php

                                $country = array('Vietnam', 'France', 'US', 'China', 'Japan');
                                for ($x = 0; $x < count($country); $x++) {
                                    if ($country[$x] == 'Vietnam') echo "<option value='$country[$x]' selected>$country[$x]</option>";
                                    else echo "<option value='$country[$x]'>$country[$x]</option>";
                                }
                                
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
            <br><br>
            <span>Select an ID and password</span>
            <hr>
            <table>
                <tr>
                    <th><label for="email">Yahoo! ID and Email</label></th>
                    <td>
                        <input id="mail" type="text" name='email'>@
                        <select name="email" id="domain">
                            <option value='yahoo.com'>yahoo.com</option>
                            <option value='gmail.com'>gmail.com</option>
                            <option value='icloud.com'>icloud.com</option>
                        </select>
                        <input type="button" value="check" class="btn check-btn" onclick=verify()>
                        <script>
                            function verify() {
                                var mail = $('#mail').val() + '@' + $('#domain').val()
                                var regex = /^([0-9a-zA-Z].)+[0-9a-zA-Z]+@([0-9a-zA-Z].)+[0-9a-zA-Z]$/;

                                if (!regex.test(mail)) alert('Please enter a valid email')
                                else alert('ok')
                            }
                        </script>
                    </td>
                </tr>
                <tr>
                    <th><label for="password">Password</label></th>
                    <td>
                        <input type="password" name="password" id="password">
                    </td>
                </tr>
                <tr>
                    <th><label for="re-pass">Re-type Password</label></th>
                    <td>
                        <input type="password" name='re-pass' id='re-pass'>
                    </td>
                </tr>
            </table>
            <br><br>
            <span>In case you forget your ID or password...</span>
            <hr>
            <table>
                <tr>
                    <th><label for="alt-mail">Alternative Email</label></th>
                    <td><input type="text" name='alt-mail' id='alt-mail'></td>
                </tr>
                <tr>
                    <th><label for="secret-question-1">Secret Question 1</label></th>
                    <td>
                    <select name="secret-question-1" id="secret-question-1" class="secret-question">
                            <option selected disabled hidden>- Select One -</option>
                            <option value="What is your daddy?">What is your daddy?</option>
                            <option value="Who is your mom?">Who is your mom?</option>
                            <option value="Where is the first place you visited this year?">Where is the first place you visited this year?</option>
                            <option value="What is your job?">What is your job?</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="answer-1">Your Answer</label></th>
                    <td>
                        <input type="text" name='answer-1' id='answer-1'>
                    </td>
                </tr>
                <tr>
                    <th><label for="secret-question-2">Secret Question 2</label></th>
                    <td>
                    <select name="secret-question-2" id="secret-question-2" class="secret-question">
                            <option selected disabled hidden>- Select One -</option>
                            <option value="What is your daddy?">What is your daddy?</option>
                            <option value="Who is your mom?">Who is your mom?</option>
                            <option value="Where is the first place you visited this year?">Where is the first place you visited this year?</option>
                            <option value="What is your job?">What is your job?</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="answer-2">Your Answer</label></th>
                    <td>
                        <input type="text" name='answer-2' id='answer-2'>
                    </td>
                </tr>
                <script>
                    var q1 = $('#secret-question-1').prop('selectedIndex')
                    $('#secret-question-2 option').eq(q1).attr('disabled', true)
                </script>
            </table>
            <br><br><hr>
            <table>
                <tr>
                    <th style="vertical-align: top;"><label for="code">Type the code shown</label></th>
                    <td>
                        <input type="text" name='code' id='code'>
                        <button type=button class=audio-btn>
                            <i class="fa fa-volume-up" aria-hidden="true"></i>
                            Need audio assistance ?
                        </button>
                        <textarea name="rand-code" id="rand-code" cols="5" rows="2"></textarea>
                        <script>
                            function rand_str(length) {
                                var result = '';
                                var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                                var charactersLength = characters.length;
                                for ( var i = 0; i < length; i++ ) {
                                    result += characters.charAt(Math.floor(Math.random() * charactersLength));
                                }
                                return result;
                            }
                            $('#rand-code').val(rand_str(6))
                        </script>
                    </td>
                </tr>
            </table>
            <br><br>
            <div class="text-center">
                <input type="submit" value="Create My Account" class=submit-btn>
            </div>
            <script>
                $('.submit-btn').click(function() {
                    var password = $('#password').val()
                    var retype = $('#re-pass').val()
                    var code = $('#code').val()
                    var capcha = $('#rand-code').val()
                    if (password === '') alert('Password cannot be blank!')
                    else if (password !== retype || retype === '') alert('Password is not match!')
                    else if (code !== capcha) alert('Capcha is not match!')
                })
            </script>
        </form>
    </section> <!-- end section -->

    <?php
        function fit_data($conn, $row) {
            // Split name and fit
            $lname = '';
            $words = preg_split('/\s+/', $row['name']);
            foreach ($words as $word) {
                if (array_search($word, $words) == 0) $fname = $word;
                else $lname .= $word . ' ';
            }
            echo "<script>$(`#fname`).val(`" . $fname . "`); $(`#lname`).val(`" . $lname . "`)</script>";
            
            // Fit gender
            $gender = $row['gender'];
            if ($gender == 'M') echo "<script>$(`#gender`).val(`Male`)</script>";
            else echo "<script>$(`#gender`).val(`Female`)</script>";
            
            // Fit date of birth
            $ef = preg_split('/\-+/', $row['birthday']);
            $year = $ef[0]; $month = $ef[1]; $date = $ef[2];
            echo "<script>$(`#day`).val(`$date`)</script>";
            echo "<script>$(`#year`).val(`$year`)</script>";
            echo "<script>$(`#month`).prop(`selectedIndex`, $month)</script>";
            
            // Fit country
            $country = $row['country'];
            echo "<script>$(`#country`).val(`$country`).change()</script>";
            
            // Fit mail
            $user_id = $row['user_id'];
            $query = "SELECT email FROM User WHERE id=$user_id";
            $mails = $conn->query($query);
            // foreach ($mail as $em) echo "<script>alert(`" . $em['email'] . "`)</script>";

            foreach ($mails as $mail) {
                $domain = preg_split('/\@+/', $mail['email']);
                $script = "
                    <script>
                        $(`#mail`).val(`$domain[0]`)
                        $(`#domain option`).each(function() {
                            if (`$domain[1]` !== $(this).val()) $(`#domain`).append(`<option value='$domain[1]' selected>$domain[1]</option>`)
                            else $(this).prop(`selected`, true)
                        })
                    </script>
                ";
                echo $script;
                // echo "<script>$(`#mail`).val(`" . $domain[0] . "`); $(`#domain`).val(`" . $domain[1] . "`)</script>";
            }
        }
        
        $query = 'SELECT * from Teacher;';
        $result = $conn->query($query);
        foreach($result as $row) fit_data($conn, $row);
    ?>

    <footer class="container-fluid">
        <div class="container text-center">
            <span>&#169;2010 Google</span>
            <span class="dash">-</span>
            <a href="#">Gmail for Organizations</a>
            <span class="dash">-</span>
            <a href="#">Gmail Blog</a>
            <span class="dash">-</span>
            <a href="#">Terms</a>
            <span class="dash">-</span>
            <a href="#">Help</a>
        </div>
    </footer> <!-- end footer -->
</body>
</html>
<?php
    $conn->close();
?>