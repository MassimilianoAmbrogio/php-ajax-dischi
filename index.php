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
            <!-- Filtri artisti -->
            <div class="genre-filter">
                Filter by artist
                <select v-model="filterArtist" @change="getFiltered">
                    <option value="all">All</option>
                    <option v-for="artist in artists" :value="artist">
                        {{artist}}
                    </option>
                </select>
            </div>
            <div class="container">
                <!-- Albums -->
                <ul class="cds-list">
                    <li v-for="album in albums" class="cd">
                        <img :src="album.poster">
                        <h2 class="title">{{album.title}}</h2>
                        <p class="author">{{album.author}}</p>
                        <p class="year">{{album.year}}</p>
                        <p class="genre">{{album.genre}}</p>
                    </li>
                </ul>
            </div>
        </main>
    </div>

    <!-- JS  -->
    <script src="./dist/js/main.js"></script>

    <!-- Fine esercizio php ajax dischi -->
</body>
</html>