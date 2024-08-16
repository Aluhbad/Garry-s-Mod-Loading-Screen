<html>
<head>
    <?php
    $communityid = $_GET['user'];
    $mapname = $_GET['mapname'];

    $authserver = bcsub( $communityid, '76561197960265728' ) & 1;
    $authid = ( bcsub( $communityid, '76561197960265728' ) - $authserver ) / 2;
    $steamid = "STEAM_0:$authserver:$authid";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garry's Mod Loading Screen</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }
        .screen {
            position: relative;
            height: 100vh;
            overflow: hidden;
            background-color: #000;
        }
        .background-effect {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, #ff00ff, #00ffff);
            opacity: 0.1;
        }
        .horizontal-bar {
            position: absolute;
            left: 0;
            right: 0;
            height: 20px;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .horizontal-bar-top { top: 0; }
        .horizontal-bar-bottom { bottom: 0; }
        .horizontal-bar-gif-top { top: 20px; }
        .horizontal-bar-gif-bottom { bottom: 20px; }
        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 100%;
            padding: 40px 0;
            box-sizing: border-box;
        }
        .gif-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .gif-container {
            width: 200px;
            height: 200px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
        }
        .gif {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .vertical-separator {
            width: 2px;
            height: 100px;
            background-color: rgba(255, 255, 255, 0.3);
            margin-top: 20px;
        }
        #userInfo {
            position: absolute;
            bottom: 40px;
            left: 0;
            right: 0;
            text-align: center;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="screen">
        <div class="background-effect"></div>

        <div class="horizontal-bar horizontal-bar-top"></div>
        <div class="horizontal-bar horizontal-bar-gif-top"></div>

        <div class="container">
            <div class="gif-wrapper">
                <div class="gif-container">
                    <img src="zhuyuan-zenless.gif" alt="Garry's Mod GIF 1" class="gif">
                </div>
                <div class="vertical-separator"></div>
            </div>

            <div class="gif-wrapper">
                <div class="gif-container">
                    <img src="jiggle-gacha.gif" alt="Garry's Mod GIF 2" class="gif">
                </div>
                <div class="vertical-separator"></div>
            </div>

            <div class="gif-wrapper">
                <div class="gif-container">
                    <img src="jane-doe-zenless-zone-zero.gif" alt="Garry's Mod GIF 3" class="gif">
                </div>
                <div class="vertical-separator"></div>
            </div>
        </div>

        <div class="horizontal-bar horizontal-bar-gif-bottom"></div>
        <div class="horizontal-bar horizontal-bar-bottom"></div>

        <div id="userInfo">
            <?php echo "Welcome $steamid <br>";
            echo "We are on $mapname!<br>";
            echo "Have a good time!"; ?>
        </div>
    </div>
</body>
</html>