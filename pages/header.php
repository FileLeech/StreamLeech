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
                background: #000;
                opacity: 0.8;
                margin-left: auto;
            }
            .publicidad a{
                display: block;
                color: #fff;
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
                            $("#StreamLeech").append('<div class="publicidad" id="publicidad">' + $('.base_publicidad').html() + '</div>');
                        }
                    });
                } catch (e) {
                    alert(e);
                }
            }
        </script>
    <center><div id="StreamLeech" class="StreamLeech"></div></center>
    <div class="base_publicidad" style="display: none;">
        <center>
            <script type="text/javascript">
                ad_idzone = "1619004";
                ad_width = "468";
                ad_height = "60";
            </script>
            <script type="text/javascript" src="https://ads.exoclick.com/ads.js"></script>
            <noscript><a href="http://main.exoclick.com/img-click.php?idzone=1619004" target="_blank"><img src="https://syndication.exoclick.com/ads-iframe-display.php?idzone=1619004&output=img&type=468x60" width="468" height="60"></a></noscript>

            <a onclick="$('.publicidad').remove(); jwplayer().play();" href="http://syndication.exoclick.com/splash.php?idzone=1619012&type=9&return_url=http%3A%2F%2Fwww.streamleech.ga%2F" target="_blank">Clic Para Reproducir</a>

            <script type="text/javascript">
                ad_idzone = "1619010";
                ad_width = "300";
                ad_height = "250";
            </script>
            <script type="text/javascript" src="https://ads.exoclick.com/ads.js"></script>
            <noscript><a href="http://main.exoclick.com/img-click.php?idzone=1619010" target="_blank"><img src="https://syndication.exoclick.com/ads-iframe-display.php?idzone=1619010&output=img&type=300x250" width="300" height="250"></a></noscript>

            <script type="text/javascript">
                ad_idzone = "1619008";
                ad_width = "468";
                ad_height = "60";
            </script>
            <script type="text/javascript" src="https://ads.exoclick.com/ads.js"></script>
            <noscript><a href="http://main.exoclick.com/img-click.php?idzone=1619008" target="_blank"><img src="https://syndication.exoclick.com/ads-iframe-display.php?idzone=1619008&output=img&type=468x60" width="468" height="60"></a></noscript>
        </center>
    </div>