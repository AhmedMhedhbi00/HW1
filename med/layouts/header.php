<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlentities($title ?? 'Movies') ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700&family=Pinyon+Script&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="header container">
        <div class="header-logo">
            MedMovies
        </div>
        <nav>
            <ul class="header-nav">
                <li class="header-nav_item"><a href="index.php">Home</a></li>
                <li class="header-nav_item"><a href="#">Movies</a></li>
                <li class="header-nav_item"><a href="#">Preferiti</a></li>
                <li class="header-nav_item">
                    <a href="login.php">
                        <svg class="icon">
                            <use xlink:href="svg/sprite.svg#login"></use>
                        </svg>
                        Login
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="content">