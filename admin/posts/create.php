<?php session_start();

include "../../path.php";

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

    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Montserrat:wght@700&family=Roboto:wght@400;500;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet">

</head>
<body>

<?php include "../../app/include/header-admin.php"; ?>

<div class="container">
    <div class="row">
        <div class="sidebar col-3">
            <ul>
                <li>
                    <a href="#">Записи</a>
                </li>
                <li>
                    <a href="#">Пользователи</a>
                </li>
                <li>
                    <a href="#">Категории</a>
                </li>
            </ul>
        </div>
        <div class="posts col-9">
            <div class="button row">
                <a href="create.html" class="col-3 btn btn-success">Add Post</a>
                <span class="col-1"></span>
                <a href="index.html" class="col-3 btn btn-warning">Manage Posts</a>
            </div>
                <div class="row title-table">
                    <h2>Добавление записи</h2>
                </div>
            <div class="row add-post">
                <form action="create.php" method="post">
                        <div class="col mb-4">
                            <input type="text" class="form-control" placeholder="Title" aria-label="название статьи">
                        </div>
                    <div class="col">
                        <label for="editor" class="form-label">Содержимое записи</label>
                        <textarea id="editor" class="form-control" rows="6"></textarea>
                    </div>
                    <div class="input-group col mb-4 mt-4">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    </div>
            <select class="form-select mb-2" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <div class="col mb-4">
                <button class="btn btn-primary" type="submit">Сохранить запись</button>
            </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../../app/include/footer.php"); ?>

<!-- Блок main END -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>

<script src="../../assets/js/script.js"></script>
</body>
</html>
