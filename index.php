<!-- Dati albums  -->
<?php require_once __DIR__ . '/data/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Dischi</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="dist/css/app.css">
</head>
<body>
    <!-- Inizio esercizio php ajax dischi -->

    <div id="app">
        <!-- Header-top -->
        <header>
            <div class="cont-logo">
                <img src="./img/logo.png" alt="Spotify-logo">
            </div>
        </header>

        <!-- Main-content -->
        <main>
            <div class="container">
                <!-- Albums -->
                <ul class="cds-list">
                    <?php foreach ($database as $data) { ?>
                        <li class="cd">
                            <img src="<?php echo $data['poster'] ?>" alt="Img Album">
                            <h2 class="title"> <?php echo $data['title'] ?></h2>
                            <p class="author"> <?php echo $data['author'] ?></p>
                            <p class="year"> <?php echo $data['year'] ?></p>
                            <p class="genre"> <?php echo $data['genre'] ?></p>
                        </li>
                    <?php } ?> 
                </ul>
            </div>
        </main>
    </div>

    <!-- JS  -->
    <script src="./dist/js/main.js"></script>

    <!-- Fine esercizio php ajax dischi -->
</body>
</html>