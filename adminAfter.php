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
    <script src="assets/js/script.js" defer></script>
</head>

<body>
    <?php require_once("assets/templates/header.php"); ?>
    <main>
        <h1><?= $lang["adminAfter"]["h1"] ?></h1>
        <p>
            <?php
            require_once("assets/php/insertArticle.php");
            processRequest($lang);
            ?>
        </p>
    </main>
    <?php require_once("assets/templates/footer.php"); ?>
</body>

</html>
