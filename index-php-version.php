<!-- Dati albums  -->
<?php require_once __DIR__ . '/partial/database.php'; ?>

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
                    <?php foreach ($database as $value) { ?>
                        <li class="cd">
                            <img src="<?php echo $value['poster'] ?>">
                            <h2 class="title"> <?php echo $value['title'] ?></h2>
                            <p class="author"> <?php echo $value['author'] ?></p>
                            <p class="year"> <?php echo $value['year'] ?></p>
                            <p class="genre"> <?php echo $value['genre'] ?></p>
                        </li>
                    <?php } ?> 
                </ul>
            </div>
        </main>

    <!-- JS  -->
    <script src="./dist/js/main.js"></script>

    <!-- Fine esercizio php ajax dischi -->
</body>
</html>