<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_SESSION['Username'])) {
    ?>
        <h2>Welcome <?php echo $_SESSION['Username']; ?></h2>
        Click here to <a href="logout.php">Logout</a>
    <?php
    } else {
    ?>
        <h2>Please Log in</h2>
    <?php
    }
    ?>

</body>

</html>