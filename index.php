<?php
// Dati albums 
include __DIR__ . '/partial/database.php';
?>

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
            <section class="database">
                <div class="container">
                    <?php foreach ($database as $data) { ?>
                        <img src="<?php echo $data['poster'] ?>" alt="Img Album">
                        <h2> <?php echo $data['title'] ?></h2>
                        <p> <?php echo $data['author'] ?></p>
                        <p> <?php echo $data['year'] ?></p>
                        <p> <?php echo $data['genre'] ?></p>
                    <?php } ?>
                </div>
            </section>
        </main>
    </div>

    <!-- JS  -->
    <script src="./dist/js/main.js"></script>

    <!-- Fine esercizio php ajax dischi -->
</body>
</html>