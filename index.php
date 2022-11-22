<?php include 'path.php';
    include 'app/database/db.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My blog</title>

<!-- Bootatrap CSS-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- Font Awesome-->

    <script src="https://kit.fontawesome.com/e0610ab906.js" crossorigin="anonymous"></script>

<!-- Custon styles-->

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Montserrat:wght@700&family=Roboto:wght@400;500;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet">

</head>
<body>

<?php include("app/include/header.php"); ?>

<!-- Блок карусели START-->

<div class="container">
<div class="row">
    <h2 class="slider-title">Топ публикации</h2>
</div>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-inner">
        <div class="carousel-item active bakground-1">
<!--            <img src="..." class="d-block w-100" alt="...">-->
            <div class="carousel-caption d-none d-md-block">
                <h5><a href="">First slide label</a></h5>
            </div>
        </div>
        <div class="carousel-item bakground-2">
<!--            <img src="..." class="d-block w-100" alt="...">-->
            <div class="carousel-caption d-none d-md-block">
                <h5><a href="">Second slide label</a></h5>
            </div>
        </div>
        <div class="carousel-item bakground-3">
<!--            <img src="..." class="d-block w-100" alt="...">-->
            <div class="carousel-caption d-none d-md-block">
                <h5><a href="">Third slide label</a></h5>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

</div>

<!-- Блок карусели END -->

<!-- Блок main -->

<div class="container">
<div class="content row">

    <div class="main-content col-md-9 col-12">
        <h2>Последние публикации</h2>
        <div class="post row">
            <div class="img-block col-12 col-md-4 img-thumbnail">

            </div>
            <div class="post_text col-12 col-md-8">
                <h3>
                    <a href="#">Прикольная статья на тему динамического сайта...</a>
                </h3>
                <i class="far fa-user">Имя автора</i>
                <i class="far fa-calendar"> Mar 11, 2019</i>
                <p class="preview_text">
                    Lorem ipsum dolor sit amet consectetur, adipiscing elit.
                    Exercitationem optio possimus a inventore maxime laborum.
                </p>
            </div>
        </div>
        <div class="post row">
            <div class="img-block col-12 col-md-4 img-thumbnail">

            </div>
            <div class="post_text col-12 col-md-8">
                <h3>
                    <a href="#">Прикольная статья на тему динамического сайта...</a>
                </h3>
                <i class="far fa-user">Имя автора</i>
                <i class="far fa-calendar"> Mar 11, 2019</i>
                <p class="preview_text">
                    Lorem ipsum dolor sit amet consectetur, adipiscing elit.
                    Exercitationem optio possimus a inventore maxime laborum.
                </p>
            </div>
        </div>
        <div class="post row">
            <div class="img-block col-12 col-md-4 img-thumbnail">

            </div>
            <div class="post_text col-12 col-md-8">
                <h3>
                    <a href="#">Прикольная статья на тему динамического сайта...</a>
                </h3>
                <i class="far fa-user">Имя автора</i>
                <i class="far fa-calendar"> Mar 11, 2019</i>
                <p class="preview_text">
                    Lorem ipsum dolor sit amet consectetur, adipiscing elit.
                    Exercitationem optio possimus a inventore maxime laborum.
                </p>
            </div>
        </div>
        <div class="post row">
            <div class="img-block col-12 col-md-4 img-thumbnail">

            </div>
            <div class="post_text col-12 col-md-8">
                <h3>
                    <a href="#">Прикольная статья на тему динамического сайта...</a>
                </h3>
                <i class="far fa-user">Имя автора</i>
                <i class="far fa-calendar"> Mar 11, 2019</i>
                <p class="preview_text">
                    Lorem ipsum dolor sit amet consectetur, adipiscing elit.
                    Exercitationem optio possimus a inventore maxime laborum.
                </p>
            </div>
        </div>
        <div class="post row">
            <div class="img-block col-12 col-md-4 img-thumbnail">

            </div>
            <div class="post_text col-12 col-md-8">
                <h3>
                    <a href="#">Прикольная статья на тему динамического сайта...</a>
                </h3>
                <i class="far fa-user">Имя автора</i>
                <i class="far fa-calendar"> Mar 11, 2019</i>
                <p class="preview_text">
                    Lorem ipsum dolor sit amet consectetur, adipiscing elit.
                    Exercitationem optio possimus a inventore maxime laborum.
                </p>
            </div>
        </div>
    </div>

    <div class="sidebar col-md-3 col-12">
<div class="section search">
    <h3>Поиск</h3>
    <form action="index.html" method="post">
        <input type="text" name="search-term" class="text-input" placeholder="Поиск...">
    </form>
</div>

        <div class="section topics">
            <h3>Категории</h3>
            <ul>
                <li><a href="#">Программирование</a></li>
                <li><a href="#">Дизайн</a></li>
                <li><a href="#">Визуализация</a></li>
                <li><a href="#">Кейсы</a></li>
                <li><a href="#">Мотивация</a></li>
            </ul>
        </div>

    </div>

    <?php include("app/include/footer.php"); ?>

</div>
</div>

<!-- Блок main END -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>