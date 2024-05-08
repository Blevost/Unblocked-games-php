<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/layout.css">
    <script src="../static/scripts/sound.js"></script>
    <script src="../static/scripts/cloak.js"></script>
    <script src="../static/scripts/launch.js"></script>
</head>
<body>
    <header>
        <label onclick="window.location = 'home.php';"><img src="../static/images/favicon.ico"> Lytning GH</label>

        <a href="#" onmouseover="playSound('../static/mp3/hover.mp3');"><img src="../static/images/emojis/browse.png"> Unblocker</a>
        <a href="#" onmouseover="playSound('../static/mp3/hover.mp3');"><img src="../static/images/emojis/chat.png">Chatroom</a>
        <a href="#" onmouseover="playSound('../static/mp3/hover.mp3');"><img src="../static/images/emojis/apps.png">Apps</a>
        <a href="#" onmouseover="playSound('../static/mp3/hover.mp3');"><img src="../static/images/emojis/controller.png">Games</a>
    </header>
    <ul class="menu">

        <li class="gamebox" onclick="setStringValue('https://bing.com')">
          <img src="../images/icons/1v1lol.jpeg">
          <p>1v1.lol [old]</p>
          <a href="go.php">Play now</a>
        </li>

    </ul>
</body>
</html>