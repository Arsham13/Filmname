<?php


session_start();

if (!isset($_SESSION["user"])) {
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main/firstStyles.css" />

    <title>
        <?= $_SESSION["user"]["username"] . ' Profile' ?>
    </title>

    <style>
    /* .hero {
        background-image: url(../images/) !important;
    } */

    .all {
        width: 100vw;
        height: 100vh;
        background-color: #00000070;
    }

    a {
        text-decoration: none;
    }

    #logout {
        margin: 10px;
        border-radius: 7px;
        padding: 10px 15px;
        background-color: #fff;
        color: red;
        border: 1px solid red;
    }

    #delete {
        margin: 10px;
        border-radius: 7px;
        padding: 10px 15px;
        background-color: red;
        color: #fff;
        border: 1px solid #fff;
    }
    </style>
</head>

<body>
    <?php include "./parts/mouse.php"  ?>
    <?php include "./parts/hero.php" ?>
    <?php include "./parts/nav.php"  ?>

    <div class="all">
        <h1>نام کاربری : <?= htmlentities($_SESSION["user"]["username"]) ?></h1>
        <h1>ایمیل : <?= htmlentities($_SESSION["user"]["email"]) ?></h1>
        <h1>تاریخ تولد :
            <?= htmlentities($_SESSION["user"]["birth_date"]) == "0000-00-00" ? " - " : htmlentities($_SESSION["user"]["birth_date"]) ?>
        </h1>
        <h1>جنسیت : <?= htmlentities($_SESSION["user"]["gender"]) ?></h1>
        <h1>زمان ثبت نام : <?= htmlentities($_SESSION["user"]["register_time"]) ?></h1>
        <a id="logout" href="logout.php">خروج</a>
        <a id="delete" href="delete.php">حذف حساب</a>
    </div>

</body>

</html>