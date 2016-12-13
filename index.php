<?php 
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Avatalk</title>
	<!--<script src="js/chat.js"></script>-->
	<script>

function submitChat() {
	if (form1.uname.value == '' || form1.value == ''){
		alert('ALL FIELDS PLZ');
		return;
	}
	var uname = form1.uname.value;
	var msg = form1.msg.value;
	var xmlHttp = new XMLHttpRequest();
	
	xmlHttp.onreadystatechange = function(){
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
				document.getElementById('chatLogs').innerHTML = xmlHttp.responseText;
		}
	}
	
	xmlHttp.open('GET', 'insert.php?uname=' + uname + '&msg=' + msg, true);
	xmlHttp.send();
}

</script>

</head>
<body>
	<form name="form1">
		Enter Your Username: <input type="text" name="uname" /><br />
		Your Message <br />
		<textarea name="msg"></textarea><br />
		<a href="#" onclick="submitChat()">Send</a><br /><br />
		
		<div id="chatLogs">
			LOADING CHATLOGS PLEASE WAIT...
		</div>
	</form>
</body>
</html>