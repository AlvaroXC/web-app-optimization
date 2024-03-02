<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/build/css/app.css">
    <title>Noticia</title>
</head>

<body>
    <header class="header-noticia">
        <a href="../home">
            <h1>Feed<span>Burn</span></h1>
        </a>
    </header>

    <?php echo $content; ?>

    <div class="gotop-container">
        <div class="gotop-btn" id="up">
            <img src="../public/build/img/up.png" alt="arrow-up" height="100" width="100">
        </div>
    </div>
    <footer class="footer">
        <h1>Feed<span>Burn</span></h1>
    </footer>
    <script src="../public/build/js/bundle.min.js"></script>
</body>

</html>