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
            <article>
                <header>
                    <img src="assets/img/test.jpg" alt="Placeholder image" />
                    <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                </header>
                <main>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec sapien ac neque bibendum
                        dignissim. In dui orci, sodales non luctus non, dignissim luctus odio. Mauris a nisl tortor.
                        Proin porta rutrum metus, eget placerat urna ornare quis. Ut mattis leo at felis venenatis
                        congue in at purus. Integer sit amet ex in magna malesuada consequat sit amet laoreet orci.
                        Nullam at velit et leo viverra semper id quis quam. Aenean iaculis arcu sit amet consequat
                        suscipit. Quisque lacus turpis, blandit ut lorem a, pharetra porttitor elit. Vestibulum finibus
                        consectetur diam, a mattis felis ultrices in. Donec pharetra at diam non varius. Nam a dolor et
                        augue auctor scelerisque ut et erat. Nam dapibus massa nisl, nec blandit erat blandit a.
                        Suspendisse interdum ex eu est mollis dictum. Ut porta risus sapien, a volutpat libero volutpat
                        nec. Vestibulum ullamcorper dui nec nunc posuere, eget porttitor mi lobortis.</p>
                </main>
                <footer>
                    <button type="button"><i class="mdi mdi-hand-clap"></i></button>
                    <?php require("assets/templates/social-media.php"); ?>
                </footer>
            </article>
            <article>
                <header>
                    <img src="assets/img/test.jpg" alt="Placeholder image" />
                    <h1>Test heading</h1>
                </header>
                <main>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec sapien ac neque bibendum
                        dignissim.</p>
                </main>
                <footer>
                    <button type="button"><i class="mdi mdi-hand-clap"></i></button>
                    <?php require("assets/templates/social-media.php"); ?>
                </footer>
            </article>
            <article>
                <header>
                    <img src="assets/img/test.jpg" alt="Placeholder image" />
                    <h1>Test heading</h1>
                </header>
                <main>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec sapien ac neque bibendum
                        dignissim. In dui orci, sodales non luctus non, dignissim luctus odio. Mauris a nisl tortor.
                        Proin porta rutrum metus, eget placerat urna ornare quis.</p>
                </main>
                <footer>
                    <button type="button"><i class="mdi mdi-hand-clap"></i></button>
                    <?php require("assets/templates/social-media.php"); ?>
                </footer>
            </article>
            <article>
                <header>
                    <img src="assets/img/test.jpg" alt="Placeholder image" />
                    <h1>Test heading</h1>
                </header>
                <main>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </main>
                <footer>
                    <button type="button"><i class="mdi mdi-hand-clap"></i></button>
                    <?php require("assets/templates/social-media.php"); ?>
                </footer>
            </article>
        </section>
    </main>
    <?php require("assets/templates/footer.php"); ?>
</body>

</html>
