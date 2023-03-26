<?php

require_once("Article.php");

function checkTitle(string $titre): bool
{
    $len = strlen($titre);
    return (0 < $len && $len < 256);
}

function checkDescription(string $desc): bool
{
    $len = strlen($desc);
    return (0 < $len && $len < 1024);
}

function checkImage(array $image): bool
{
    // Vérifier la taille du fichier image entre 0 et 10Mo
    return (0 < $image["size"] && $image["size"] < 10000000);
}

function checkImageAlt(string $imageAlt): bool
{
    $len = strlen($imageAlt);
    return (0 < $len && $len < 256);
}

function processRequest($lang): void
{
    if (
        checkTitle($_POST["title"]) &&
        checkDescription($_POST["description"]) &&
        checkImage($_FILES["image"]) &&
        checkImageAlt($_POST["image-alt"])
    ) {
        $targetDir = $_SERVER["DOCUMENT_ROOT"] . "/assets/img/article/";
        $imageName = date("Ymd") . "-" . time() . "." . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetDir . $imageName)) {
            (new Article())->addArticle($_POST["title"], $_POST["description"], $imageName, $_POST["image-alt"]);
            echo $lang["insertArticle"]["success"];
        } else {
            echo $lang["insertArticle"]["uploadError"];
        }
    } else {
        echo $lang["insertArticle"]["critereaError"];
    }
}
