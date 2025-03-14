<?php
    // Include the database connection
    include('db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form values
        $guestname = $_POST['guestname'];
        $group = $_POST['group'];
        $relation = $_POST['relation'];
        $follower = $_POST['follower'];
        $u_date = date('Y-m-d H:i:s'); // Current timestamp

        // Prepare SQL statement
        $sql = "INSERT INTO guest (`name`, `group`, `relation`, `follower`, `u_date`, `status`) 
                    VALUES ('$guestname', '$group', '$relation', '$follower', '$u_date', 1)";
        $conn->query($sql);
    }
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
        <p class="main-content__body" data-lead-id="main-content-body">แล้วพบกัน <b>วันอาทิตย์ที่ 14 กันยายน 2568</b>
            <br>โรงแรม Pullman Bangkok King Power
        </p>
    </div>

    <footer class="site-footer" id="footer">
        <p class="site-footer__fineprint" id="fineprint">Book & Tae - The Wedding Day</p>
        <p>
            <a href="webcal://book-tae-the-wedding.com/savethedate/WeddingDay.ics" class="calendar-button-ios">📅 Add to iOS Calendar</a><br><br>
            <a class="calendar-button-google" target="_blank"
                href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Book❤️Tae%20Wedding%20Day%20🤵👰&dates=20250914T043000Z/20250914T070000Z&details=วันอาทิตย์ที่%2014%20กันยายน%202568%20ห้อง%20INFINITY%20BALLROOM%20โรงแรม%20Pullman%20Bangkok%20King%20Power&location=Pullman Bangkok King Power Hotel">
                📅 Add to Google Calendar
            </a>
        </p>
    </footer>
</body>

</html>