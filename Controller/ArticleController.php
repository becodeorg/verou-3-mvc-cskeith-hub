<?php

declare(strict_types = 1);

class ArticleController
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function index()
    {
        // Load all required data
        $articles = $this->getArticles();
        // Load the view
        
        require 'View/articles/index.php';
    }

    // Note: this function can also be used in a repository - the choice is yours
    private function getArticles(): array
    {
        $rawArticles = [];

        // TODO: prepare the database connection
        $rawArticles = $this->databaseManager->connection
            ->query("SELECT * FROM articles ")
            ->fetchAll();

        // Note: you might want to use a re-usable databaseManager class - the choice is yours
        
        // TODO: fetch all articles as $rawArticles (as a simple array)
        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $articles[] = new Article($rawArticle['id'],$rawArticle['title'], $rawArticle['description'], $rawArticle['publishDate']);
        }
        echo '<pre>';
        print_r($articles);
        echo '</pre>';
        return $articles;
    }

    public function show($articleId)
    {
       $article = $this->databaseManager->connection
       ->query("SELECT 'title', 'description', 'publishDate' FROM articles WHERE id = ('$articleId')" )
       ->fetch();
       echo '<pre>';
        print_r($article);
        echo '</pre>';
       return $article;
       

    }
}