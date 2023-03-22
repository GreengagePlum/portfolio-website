<?php require("assets/php/lang.php"); ?>
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
</head>

<body>
    <?php require("assets/templates/header.php"); ?>
    <main>
        <header>
            <img src="assets/img/poster.jpg" alt="Placeholder image" />
        </header>
        <section id="articles">
        </section>
    </main>
    <?php require("assets/templates/footer.php"); ?>
</body>

</html>