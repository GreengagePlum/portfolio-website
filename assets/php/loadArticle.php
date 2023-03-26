<?php

require_once("Article.php");

if (isset($_GET["search"])) {
    echo ((new Article())->moreSearchArticle($_GET["from"], $_GET["count"], $_GET["search"]));
} else {
    echo ((new Article())->moreArticle($_GET["from"], $_GET["count"]));
}
