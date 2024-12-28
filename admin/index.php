<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </head>
    <?php
        session_start(); // Bắt đầu phiên làm việc

        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (!isset($_SESSION['dangnhap']) || $_SESSION['vai_tro'] !== 'admin') {
            // Nếu không có phiên đăng nhập hoặc không phải là admin, chuyển hướng về trang đăng nhập
            header("Location: ../login.php");
            exit();
        }
    ?>
    <body class="sb-nav-fixed">
        <?php
            include('../config/connect.php');
            include('./modules/NavigationBars.php'); 
        ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include('./modules/menu.php')?>
            </div>
            <?php include('./modules/main.php') ?>
        </div>
    </body>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
</html>