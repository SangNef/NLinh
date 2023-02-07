<?php

@include 'config.php';

session_start();
if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="nav">
        <a href="login_form.php" class="btn">
            <i class="fa-solid fa-right-to-bracket"></i> login
        </a>
        <a href="register_form.php" class="btn">
            <i class="fa-solid fa-user-plus"></i> register
        </a>
        <a href="logout.php" class="btn">
            <i class="fa-solid fa-right-from-bracket"></i> logout
        </a>
    </div>
    <div class="user-profile">
        <div class="avatar">
            <img src="images/avatar.png" alt="">
        </div>
        <div class="profile">
            <h2>Name:
                <?php echo $_SESSION['user_name'] ?>
            </h2>
        </div>
    </div>
    <div class="list">
        <div class="file">

        </div>
    </div>
</body>

</html>