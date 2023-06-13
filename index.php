<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Peaches.zip - The Ultimate Peaches Experience</title>
    <meta property="og:title" content="The Ultimate Peaches Experience">
    <meta property="og:description" content="Watch the Ultimate Peaches Video">
    <meta property="og:image" content="https://peaches.zip/peaches.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="The Ultimate Peaches Experience">
    <meta name="twitter:description" content="Watch the Ultimate Peaches Video">
    <meta name="twitter:image" content="https://peaches.zip/peaches.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Experience the ultimate Peaches with Peaches.zip! Explore the world of Peaches and enjoy the catchy tunes from the iconic Peaches song in the Super Mario movie.">
    <meta name="keywords" content="Peaches, Super Mario, Peaches song, meme, music, entertainment, Bowser, Jack Black">
    <style>
        body {
            background-color: #333333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        #video-container {
            width: 70%;
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
            filter: blur(25px);
        }

        .watermark {
            size: 1000%;
            position: absolute;
            bottom: 10px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .watermark img {
            height: 20px;
            width: auto;
            margin-right: 10px;
        }

        .watermark span {
            bottom: 10px;
        }

        .watermark a {
            color: #fff;
            text-decoration: none;
            text-align: center;
        }

        .code {
            width: 100%;
            height: 100%;
        }

        figcaption {
            color: #fff
        }

        a {
            color: #fff
        }

        #myButton {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 10px;
            border: none;
            background-color: #FFDAB9;
            color: darkblue;
        }
    </style>
</head>

<body>
    <div id="video-container">
        <?php
        if (rand(1, 100) === 1) {
            if (rand(1, 2) === 1) {
                echo '
                    <div class="code">
                        <video data-dashjs-player="" width="100%" height="100%" poster="black.png" src="peachrolled.mp4" loop></video>
                        <figcaption hidden>
                            <a href="https://www.youtube.com/watch?v=FvZdeEklJVA">peachrolled.</a> by: <a href="https://www.youtube.com/@CubicMind_">CubicMind</a>
                        </figcaption>
                    </div>
                ';
            } else {
                echo '
                    <div class="code">
                        <video data-dashjs-player="" width="100%" height="100%" poster="black.png" src="nevergonnagivepeachup.mp4" loop></video>
                        <figcaption hidden>
                            <a href="https://www.youtube.com/watch?v=JBSKOoru2E0">Never gonna give Peach up</a> by: <a href="https://www.youtube.com/@ryensmusic6424">Ryens Music</a>
                        </figcaption>
                    </div>
                ';
            }
        } else {
            echo '
                <div class="code">
                    <video data-dashjs-player="" width="100%" height="100%" poster="black.png" src="peaches.mp4" loop></video>
                    <figcaption hidden>
                        <a href="https://www.youtube.com/watch?v=imSefM4GPpE">Bowser - Peaches (Official Music Video) | The Super Mario Bros. Movie</a> by: <a href="https://www.youtube.com/@illumination">Illumination</a>
                    </figcaption>
                </div>
            ';
        }
        ?>
    </div><button id="myButton">Peach me!</button>
    <div class="watermark"><a href="https://xeonserv.de/affiliate/xsehrmotiviert" target="_blank"><img src="https://xeonserv.de/img/new_logos/v2/xeonserv_logo.png" alt="Powered by XeonServ.de"></a></div>
</body>
<footer>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var button = document.getElementById('myButton');
            button.addEventListener('click', function() {
                document.getElementById('video-container').style.filter = "blur(0px)";
                document.querySelector('video').play();
                document.querySelector('video').muted = 0;
                document.querySelector('figcaption').hidden = false;
                document.querySelector('button').hidden = true;
            });
        });
    </script>
</footer>

</html>