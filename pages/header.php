<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>StreamLeech 1.0 - Demo</title>
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/player/jwplayer.js"></script>
        <script type="text/javascript">jwplayer.key = "Wz0ISkuJjUlK9YCu3UkmhMLQYR4WpTl75P5iQ4U78t2rb1NQmNWBlQ==";</script>
        <link href="/player/stormtrooper.css" rel="stylesheet" type="text/css" />
        <style>
            body{
                color: #333333;
                padding: 0px;
                margin: 0px;
                text-align: center;
            }
            .StreamLeech{
                position: relative;
            }
            .publicidad{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 4px;
                background: #333333;
                opacity: 0.4;
                margin-left: auto;
            }
        </style>
    </head>
    <body>
        <script>
            var sources_player;
            var img_player = '';
            var isRTMP = 0;

            $(function () {
                try {
                    if (sources_player.length > 0 || sources_player.length != '') {
                        putPlayer();
                    }
                } catch (e) {
                    alert(e);
                }
            });

            function putPlayer() {
                try {
                    var LeechPlayer = jwplayer("StreamLeech");
                    if (isRTMP > 0) {

                    } else {
                        LeechPlayer.setup({
                            controls: true,
                            fullscreen: "true",
                            primary: 'html5',
                            provider: 'http',
                            width: 600,
                            height: 400,
                            aspectratio: " 4:3",
                            autostart: false,
                            sources: sources_player,
                            image: img_player,
                            abouttext: "StreamLeech 1.0",
                            aboutlink: "http://www.streamleech.ga",
                            skin: {
                                name: "stormtrooper"
                            }
                        });
                    }
                    LeechPlayer.on("ready", function () {
                        if (LeechPlayer.getRenderingMode() == 'html5') {
                          $("#StreamLeech").append('<div class="publicidad">mexico</div>');
                        }
                    });
                } catch (e) {
                    alert(e);
                }
            }
        </script>
    <center><div id="StreamLeech" class="StreamLeech"></div></center>