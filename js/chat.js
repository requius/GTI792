<script>

function submitChat(){
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
	
	xmlHttp.open('GET', 'insert.php', true);
	xmlHttp.send();
}

</script>