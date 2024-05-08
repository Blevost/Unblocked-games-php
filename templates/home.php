<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/index.css">
    <script src="../static/scripts/sound.js"></script>
    <script src="../static/scripts/cloak.js"></script>
</head>
<body>
    <header>
        <label onclick="window.location = 'home.php';"><img src="../static/images/favicon.ico"> Lytning GH</label>

        <a href="#" onmouseover="playSound('../static/mp3/hover.mp3');"><img src="../static/images/emojis/browse.png"> Unblocker</a>
        <a href="#" onmouseover="playSound('../static/mp3/hover.mp3');"><img src="../static/images/emojis/chat.png">Chatroom</a>
        <a href="#" onmouseover="playSound('../static/mp3/hover.mp3');"><img src="../static/images/emojis/apps.png">Apps</a>
        <a href="#" onmouseover="playSound('../static/mp3/hover.mp3');"><img src="../static/images/emojis/controller.png">Games</a>
    </header>
    <div class="page">
        <h1>-- Welcome to LYTNING GH --</h1>
        <button onclick="openPage()" onmouseover="playSound('../static/mp3/hover.mp3');" class="button">Launch about:blank</button> <button onmouseover="playSound('../static/mp3/hover.mp3');" class="button">Go to Chatroom</button>
    </div>
</body>
</html>