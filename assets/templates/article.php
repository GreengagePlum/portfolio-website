<article>
    <header>
        <img src="<?= $articleImgPath ?>" alt="<?= $articleImgAlt ?>" />
        <h1><?= $articleTitle ?></h1>
    </header>
    <main>
        <p><?= $articleDescription ?></p>
    </main>
    <footer>
        <button type="button"><i class="mdi mdi-hand-clap"></i></button>
        <?php require("social-media.php"); ?>
    </footer>
</article>
