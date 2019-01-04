<?php
session_start();

if(!isset($_SESSION['fileName'])) {
    header('location: index.html');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>meta.xml mta generator</title>

    <!-- styles -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/main.css">

    <meta name="application-name" content="meta.xml generator">
    <meta name="theme-color" content="#000">
    <meta name="description" content="simple meta.xml generator for mta script">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://icono-49d6.kxcdn.com/icono.min.css">
</head>
<body>
<div class="container" style="padding-top: 50px;">
    <div class="row">
        <div class="six columns">
            <h4>Dziękujemy za skorzystanie z generatora :)</h4>
            <a href="download.php?filename=<?= $_SESSION['fileName'] ?>"><button onclick="blockButton(this)" class="u-full-width">pobierz plik meta.xml</button></a>
            <a href="index.html"><button class="u-full-width">wróć na stronę główną</button></a>
            <?php
                unset($_SESSION['fileName']);
            ?>
        </div>
        <div class="six columns">
            <div class="text-center">
                <img src="http://www.codecup.pl/img/codecup-white.png" style="width: 30%;" alt="codecup logo">

                <p style="margin-top: 20px; text-decoration: underline;">
                    <a href="http://codecup.pl">CC Software</a>
                </p>

                <p>
                    <i class="icono-mail"></i> szymon@codecup.pl
                </p>

                <p>
                    <i class="icono-iphone"></i> 505091321
                </p>

                <p>
                    <a href="http://codecup.pl" target="_blank">codecup.pl</a> &copy <script>document.write(new Date().getFullYear())</script>
                </p>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/tippy.js@3/dist/tippy.all.min.js"></script>
<script>
    function blockButton(e) {
        e.disabled = true;
        e.href = '';
        e.style.cursor = 'not-allowed';
    }
</script>
</body>
</html>