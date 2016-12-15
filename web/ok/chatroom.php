<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Avatalk</title>
    
    <link rel="stylesheet" href="css/chatroom.css" type="text/css" />
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="js/chat.js"></script>
    <script type="text/javascript" src="js/prompt.js"></script>
</head>

<body onload="setInterval('chat.update()', 1000)">

    <div id="page-wrap">
        <p id="name-area"></p>
        <div id="chat-wrap"><div id="chat-area"></div></div>
        <form id="send-message-area">
            <p>Your message: </p>
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>
    </div>
</body>
</html>