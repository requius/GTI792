<?php
	$uname = $_REQUEST['uname'];
	$msg = $_REQUEST['msg'];

	$con = mysql_connect('localhost', 'root', '');
	mysql_select_db('avatalk', $con);

	mysql_query("INSERT INTO chatlogs ('username', 'message') 
				 VALUES ('$uname', '$msg')"
			   );
	/*		   
	$result1 = mysql_query("SELECT * FROM chatLogs ORDER BY id DESC");
	
	while ( $extract = mysql_fetch_array($result1) ) {
		echo $extract['username'] . ": " . $extract['message'] . "<br />";
	}*/
?>