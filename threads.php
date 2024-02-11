<?php

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        /* Thread CSS Starts */
        .card {
            background-color: #ffffff;
            border-radius: 2px;
            box-shadow: 0 1px 2px #c9cccd;
            margin-bottom: 20px;
        }

        .pull-left {
            float: left;
        }

        .card .card-wrap {
            width: 100%;
        }

        .card .card-wrap .userinfo {
            width: 15%;
            padding: 20px 0 15px 15px;
        }

        .card .card-wrap .userinfo .avatar {
            width: 37px;
            margin-left: 5px;
        }

        .card .card-wrap .userinfo .avatar img {
            vertical-align: middle;
            border-radius: 50%;
        }

        .card .card-wrap .userinfo .avatar .status {
            position: absolute;
            top: 22px;
            left: 49px;
            height: 12px;
            width: 12px;
            line-height: 12px;
            border-radius: 50%;
            border: solid 2px #ffffff;
        }

        .card .card-wrap .userinfo .avatar .green {
            background-color: #80d3ab;
        }

        .card .card-wrap .userinfo .icons {
            width: 48px;
            border-top: solid 1px #f1f1f1;
            margin-top: 12px;
            padding-top: 7px;
        }

        .card .card-wrap .user-content {
            width: 85%;
            padding-right: 30px;
            padding-top: 20px;
            padding-bottom: 15px;
            color: #989c9e;
            font-size: 14px;
            line-height: 25px;
        }

        .card .card-wrap .user-content h2 {
            color: #363838;
            font-size: 18px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .card .card-wrap .user-content a {
            text-decoration: none;
            color: #363838;
        }

        .clearfix:before {
            content: '';
            display: table;
        }

        .clearfix::after {
            clear: both;
        }

        /* Thread CSS Ends */
    </style>
</head>

<body style=" height=100%">
    <?php require 'partials/_dbconnect.php' ?>
    <?php require 'partials/_header.php' ?>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE `category_id` = $id ";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["category_name"];
        $desc = $row["category_description"];
    }

    ?>

    <div class="container">
        <div class="p-4 p-md-5 mb-4 mt-2 rounded text-body-emphasis bg-body-secondary">
            <div class="col-lg-12 px-0">
                <h1 class="display-4 fst-italic">Welcome to
                    <?php echo $name ?> forum
                </h1>
                <p class="lead my-3">
                    <?php echo $desc ?>
                </p>
                <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Read threads...</a></p>
            </div>
        </div>
    </div>

    <div class="container p-5">
        <div class="row">

            <div class="col-lg-8 col-md-8">
                <?php
                $id = $_GET['catid'];
                $sql = "SELECT * FROM `threads` WHERE `thread_cat_id` = $id ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row["thread_id"];
                    $title = $row["thread_title"];
                    $desc = $row["thread_desc"];

                    echo ' <div class="card ">
                    <div class=" card-wrap  pull-left">
                        <div class="userinfo pull-left">
                            <div class="avatar">
                                <img src="assets/images/avatar.jpg" alt="" />
                                <div class="status green">&nbsp;</div>
                            </div>

                            <div class="icons">
                                <img src="assets/images/icon1.jpg" alt="" /><img src="assets/images/icon4.jpg" alt="" />
                            </div>
                        </div>
                        <div class=" user-content pull-left">
                            <h2><a href="threadDetail.php?threadid='.$id.'">'.$title.'</a></h2>
                            <p>'.$desc.'</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>' ;
                }

                ?>
            </div>
        </div>
    </div>

    <?php require 'partials/_footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>