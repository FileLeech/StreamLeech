<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>StreamLeech 1.0 - Demo</title>
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/player/jwplayer.js"></script>
        <script type="text/javascript">jwplayer.key = "Wz0ISkuJjUlK9YCu3UkmhMLQYR4WpTl75P5iQ4U78t2rb1NQmNWBlQ==";</script>
        <style>
            body{
                color: #333333;
                padding: 0px;
                margin: 0px;
                width: 100%;
                max-width: 100%;
                height: 100%;
                max-height: 100%;
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
                var LeechPlayer = jwplayer("StreamLeech");
                if (isRTMP > 0) {

                } else {
                    LeechPlayer.setup({
                        controls: true,
                        width: "100%",
                        height: "100%",
                        aspectratio: "16:9",
                        fullscreen: "true",
                        primary: 'html5',
                        provider: 'http',
                        autostart: false,
                        sources: sources_player,
                        image: img_player,
                        abouttext: "StreamLeech 1.0",
                        aboutlink: "http://www.streamleech.ga"
                    });
                }
            }
        </script>
        <div id="StreamLeech"></div>