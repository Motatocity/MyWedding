<?php
    // Include the database connection
    header("Content-type:application/json; charset=UTF-8");
    include('db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form values
        $name = $_POST['guestname'];
        $name = iconv("tis-620", "utf-8", $name);
        $group = $_POST['group'];
        $relation = $_POST['relation'];
        $follower = $_POST['follower'];
        $u_date = date('Y-m-d H:i:s'); // Current timestamp

        // Prepare SQL statement
        $sql = "INSERT INTO guest (`name`, `group`, `relation`, `follower`, `u_date`, `status`) 
                VALUES ('$name', '$group', '$relation', '$follower', '$u_date', 1)";
        $conn->query($sql);
    }
    $conn->close();
    header("location:../index.php");
?>
