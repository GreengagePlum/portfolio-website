<?php

require_once("Database.php");

class Article extends Database
{
    public function __construct()
    {
        parent::__construct();
        $this->initTable();
    }

    private function initTable()
    {
        $this->pdo->query(
            "CREATE TABLE IF NOT EXISTS article (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            title VARCHAR(256) NOT NULL,
            description VARCHAR(1024) NOT NULL,
            imageName VARCHAR(64) NOT NULL,
            imageAltText VARCHAR(256) NOT NULL)"
        );
    }

    public function addArticle(string $title, string $description, string $imageName, string $imageAltText)
    {
        $imagePath = "../img/article/";
        $this->pdo->query(
            "INSERT INTO article (title, description, imageName, imageAltText) VALUES (
                \"" . $title . "\", \"" . $description . "\", \"" . $imagePath . $imageName . "\", \"" . $imageAltText . "\")"
        );
    }
}

// $test = new Article();