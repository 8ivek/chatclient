<!doctype html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="scripts.js"></script>
</head>
<body>
<div id="room">
    <div class="numUsers"></div>
    <div class="dc"><button id="dc"></button></div>
    <ul id="messages"></ul>
    <form id="msg" action="">
        <input id="m" autocomplete="off" /><button>Send</button>
    </form>
</div>
</body>
</html>