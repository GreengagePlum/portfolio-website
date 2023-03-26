<header>
    <?php require("logo.php"); ?>
    <div>
        <?php require("nav.php"); ?>
        <section>
            <button type="button" value="en">EN</button>
            <button type="button" value="fr">FR</button>
            <form action="search.php" method="get">
                <label>
                    <?= $lang["nav"]["search"] ?>
                    <input type="text" name="search" placeholder="<?= $lang["nav"]["search"] ?>" />
                </label>
                <button class="mdi mdi-magnify" type="submit"></button>
            </form>
        </section>
    </div>
</header>
