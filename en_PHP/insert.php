<?php
    $uname = $_REQUEST['uname'];
    $msg = $_REQUEST['msg'];

    $mysqli = new mysqli('localhost', 'root', '', 'avatalk');
    // mysqli_select_db('avatalk');
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $time = time();
    $currentTime = date("h:i:s");

    if (!$mysqli->query("INSERT INTO `chatlogs`(`username`, `message`, `send_time`) VALUES  ('$uname', '$msg', '$currentTime')")) {
        echo "Insert failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }

    $result = $mysqli->query("SELECT * FROM chatlogs ORDER BY id DESC");

    while ($row = $result->fetch_assoc()) {
        echo $row['username'] . ": " . $row['message'] . "<br />";
    }
?>