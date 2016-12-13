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
	
	
//echo "INSERT INTO chatlogs ('username', 'message') VALUES ('$uname', '$msg', '$currentTime')";
	if (!$mysqli->query("INSERT INTO chatlogs('username', 'message', 'time') VALUES ('$uname', '$msg', NOW())")) {
		echo "Insert failed: (" . $mysqli->errno . ") " . $mysqli->error;
	}
			   
	$result = $mysqli->query("SELECT * FROM chatlogs ORDER BY id DESC");
	
	
	while ($mysqli->fetch_array($result) != "" || $mysqli->fetch_array($result) != null) {
		echo $extract['username'] . ": " . $extract['message'] . "<br />";
	}
?>