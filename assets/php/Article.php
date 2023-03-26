<?php

require_once("Database.php");

class Article extends Database
{
    public function __construct()
    {
        parent::__construct();
        $this->initTable();
    }

    private function initTable(): void
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

    // $imageName est sans le chemin, juste le nom du fichier
    public function addArticle(string $title, string $description, string $imageName, string $imageAltText): void
    {
        $query = $this->pdo->prepare(
            "INSERT INTO article (title, description, imageName, imageAltText) VALUES (
                :title, :description, :image, :image_alt)"
        );
        $query->bindValue(":title", htmlspecialchars($title));
        $query->bindValue(":description", htmlspecialchars($description));
        $query->bindValue(":image", htmlspecialchars($imageName));
        $query->bindValue(":image_alt", htmlspecialchars($imageAltText));
        $query->execute();
    }

    public function getArticle(int $from, int $count): array
    {
        $query = $this->pdo->prepare("SELECT * FROM article ORDER BY id LIMIT ? OFFSET ?");
        $query->execute([$count, $from]);
        return $query->fetchAll();
    }

    public function searchArticle(int $from, int $count, string $term): array
    {
        $query = $this->pdo->prepare("SELECT * FROM article WHERE title LIKE :term ORDER BY id LIMIT :count OFFSET :from");
        $query->bindValue(":term", "%" . htmlspecialchars($term) . "%");
        $query->bindValue(":count", htmlspecialchars($count));
        $query->bindValue(":from", htmlspecialchars($from));
        $query->execute();
        return $query->fetchAll();
    }

    // $articleImgPath indique le chemin de chargement des fichiers image
    public function buildArticleElement(array $queryResult): void
    {
        foreach ($queryResult as $row) {
            $articleTitle = $row["title"];
            $articleDescription = $row["description"];
            $articleImgPath = "assets/img/article/" . $row["imageName"];
            $articleImgAlt = $row["imageAltText"];
            require($_SERVER["DOCUMENT_ROOT"] . "/assets/templates/article.php");
        }
    }

    public function moreArticle(int $from, int $count): void
    {
        $this->buildArticleElement($this->getArticle($from, $count));
    }

    public function moreSearchArticle(int $from, int $count, string $term): void
    {
        $this->buildArticleElement($this->searchArticle($from, $count, $term));
    }
}
