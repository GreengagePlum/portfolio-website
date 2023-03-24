<?php

require_once("Article.php");

echo ((new Article())->moreArticle($_GET["from"], $_GET["count"]));
