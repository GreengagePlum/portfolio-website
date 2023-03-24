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
    <link rel="stylesheet" href="assets/css/admin.css" />
    <script src="assets/js/script.js" defer></script>
    <script src="assets/js/admin.js" defer></script>
</head>

<body>
    <?php require_once("assets/templates/header.php"); ?>
    <main>
        <h1><?= $lang["admin"]["h1"] ?></h1>
        <form>
            <label>
                <?= $lang["form"]["label"]["title"] ?>
                <input type="text" name="title" placeholder="<?= $lang["form"]["input"]["title"] ?>" required />
            </label>
            <label>
                <?= $lang["form"]["label"]["description"] ?>
                <textarea name="description" rows="5" cols="33" placeholder="<?= $lang["form"]["textarea"]["description"] ?>" required></textarea>
            </label>
            <label>
                <?= $lang["form"]["label"]["image"] ?>
                <input type="file" name="image" accept="image/*" required />
            </label>
            <label>
                <?= $lang["form"]["label"]["image-alt"] ?>
                <input type="text" name="image-alt" placeholder="<?= $lang["form"]["input"]["image-alt"] ?>" required />
            </label>
            <div>
                <input type="submit" value="<?= $lang["button"]["submit"] ?>" />
            </div>
        </form>
    </main>
    <?php require_once("assets/templates/footer.php"); ?>
</body>

</html>
