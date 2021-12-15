<!-- Answer to the question no 12. -->

<?php
$conn = mysqli_connect('localhost', 'root', '', 'lab_final') or die('Unable to connect');
$ok = false;
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re-password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re-password'];
    if ($password == $re_password) {
        $sql_login = 'INSERT INTO `user`(`name`, `email`, `password`) VALUES ("' . $name . '", "' . $email . '", md5("' . $password . '"))';
        if ($conn->query($sql_login) === true) {
            $ok = true;
            $output = "Registration Successfully Completed.";
        } else {
            $output = $conn->error;
            $ok = false;
        }
    } else {
        $output = "Password are not same.";
        $ok = false;
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!-- font awesome cdn link  -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="Q-12.css">
</head>

<body>
    <div align="center">
        <h2>Answer to the question no 12.</h2>
    </div>
    <div class="wrapper">
        <h2>Registration</h2>
        <h4 id="error"><?php if (isset($output)) {echo $output;} ?></h4>
        <?php
        if ($ok != true) {
        ?>
            <form method="POST" action="Q-12.php">
                <div class="input-box">
                    <input name="name" id="name" type="text" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <input name="email" id="email" type="text" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <input name="password" id="password" type="password" placeholder="Create password" required>
                </div>
                <div class="input-box">
                    <input name="re-password" id="re-password" type="password" placeholder="Confirm password" required>
                </div>
                <div class="input-box button signup">
                    <input id="btn_reg" type="Submit" value="Register Now">
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>