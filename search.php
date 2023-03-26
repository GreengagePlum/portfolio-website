<?php require_once("assets/php/lang.php"); ?>
<!DOCTYPE html>
<html lang="<?= $LANG_CURR ?>" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Efe Erken</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/logo.svg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.1.96/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/index.css" />
    <script src="assets/js/script.js" defer></script>
    <script src="assets/js/search.js" defer></script>
</head>

<body>
    <?php require_once("assets/templates/header.php"); ?>
    <main>
        <h1><?= $lang["search"]["h1"] . $_GET["search"] ?></h1>
        <section id="articles">
            <?php
            require_once("assets/php/Article.php");
            // L'intervalle des articles à charger initialement
            (new Article())->moreSearchArticle(0, 6, $_GET["search"]);
            ?>
        </section>
        <div>
            <!-- Nombre d'article à charger dans chaque click : data-articlecount -->
            <button type="button" data-articlecount="6"><?= $lang["button"]["see-more"] ?></button>
        </div>
    </main>
    <?php require_once("assets/templates/footer.php"); ?>
</body>

</html>
