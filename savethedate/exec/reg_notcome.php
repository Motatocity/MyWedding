<?php
    //ini_set('display_errors', '1');
    //ini_set('display_startup_errors', '1');
    //error_reporting(E_ALL);
    // Include the database connection
    include('db.php');
    date_default_timezone_set('Asia/Bangkok');

    // รับข้อมูลจากฟอร์ม
    $group = $_POST['group'] ?? '';
    $relation = $_POST['relation'] ?? '';
    $guestname = $_POST['guestname'] ?? '';
    $message = $_POST['message'] ?? '';
    $u_date = date('Y-m-d H:i:s'); // Current timestamp
    $imgPath = ""; 

    // จัดการกับการอัปโหลดรูป
    if (isset($_FILES['giftImage']) && $_FILES['giftImage']['error'] == 0) {
        $uploadDir = "../img_promptpay/";
        $ext = pathinfo($_FILES['giftImage']['name'], PATHINFO_EXTENSION);
        $timestamp = date("YmdHis");
        $newFileName = "promptpay_" . $timestamp . "." . strtolower($ext);
        $fullPath = $uploadDir . $newFileName;

        $allowed = ['jpg', 'jpeg', 'png'];
        if (in_array(strtolower($ext), $allowed)) {
            if (move_uploaded_file($_FILES['giftImage']['tmp_name'], $fullPath)) {
                $imgPath = "img_promptpay/" . $newFileName;
            }
        }
    }

    $sql = "INSERT INTO message (`name`, `group`, relation, `message`, img, u_date, `status`) 
            VALUES ('$guestname', '$group', '$relation', '$message', '$imgPath', '$u_date', 1)";
    $conn->query($sql);

    $conn->close();
    header("Refresh: 10; URL=../index.php");

?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
    </style>
    <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
    <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
    <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>

<body>
    <header class="site-header" id="header">
        <h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
    </header>

    <div class="main-content">
        <i class="fa fa-check main-content__checkmark" id="checkmark"></i>
        <p class="main-content__body" data-lead-id="main-content-body">
            แม้คุณจะไม่ได้มาร่วมงาน<br>
            แต่คำอวยพรของคุณทำให้วันสำคัญของเรายิ่งอบอุ่น<br>
            ขอบคุณมากจริง ๆ <br>
            :)
        </p>
    </div>

    <footer class="site-footer" id="footer">
        <b>#booktaethewedding</b>
        <p class="site-footer__fineprint" id="fineprint">Book & Tae - The Wedding Day</p>
    </footer>
</body>

</html>