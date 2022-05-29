<?php
require "../src/Movies/Movies.php";
require "../src/Connection/Connection.php";

$pdo = Connection::getPDO();

$movies = $pdo->query('SELECT * FROM film')->fetchAll();

// $movies = new Movies('k_l0onmk6t');

// $popularMovie = $movies->getPopularMovies();


require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "layouts/header.php";
?>
<div class="container">
    <h1>Ultime uscite</h1>
    <div class="home-page">

        <?php foreach ($movies as $movie) : ?>
        <div class="card">
            <div class="card-img">
                <img src="<?= $movie['image'] ?>" alt="<?= $movie['title'] ?>">
            </div>
            <div class="card-footer">
                <a href="#">
                    <svg class="icon">
                        <use xlink:href="svg/sprite.svg#like"></use>
                    </svg>
                </a>
                <a href="#">
                    <svg class="icon">
                        <use xlink:href="svg/sprite.svg#share"></use>
                    </svg>
                </a>
            </div>
        </div>
        <?php endforeach ?>
    </div>

    <?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "layouts/footer.php"; ?>