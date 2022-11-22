<?php include("path.php"); ?>

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

<!-- Блок main -->

<div class="container">
    <div class="content row">

        <div class="main-content col-md-9 col-12">
            <h2>Заголовок какой-то конкретной статьи. Еще не понятно, просто нужно, чтобы здесь было много текста.</h2>
            <div class="single_post row">
                <div class="img-block col-12 img-thumbnail">
                </div>
                <div class="info col-12">
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar"> Mar 11, 2019</i>
                </div>
                <div class="single_post_text col-12">
                    <h3>Заголовок третьего уровня</h3>
                    Lorem ipsum dolor sit <a href="#">amet</a>, consectetur adipisicing elit.
                    Commodi, deleniti, repellendus! Ad architecto eveniet explicabo fuga nam natus possimus quae quis vero.
                    Accusamus asperiores autem, est nostrum repellendus sequi voluptatibus!
                </div>
            </div>
        </div>

        <div class="sidebar col-md-3 col-12">
            <div class="section search">
                <h3>Поиск</h3>
                <form action="index.php" method="post">
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