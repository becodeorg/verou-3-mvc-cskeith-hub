<?php

declare(strict_types=1);

class Article
{
    public int $id;
    public string $title;
    public ?string $description;
    public ?string $publishDate;

    public function __construct(int $id,string $title, ?string $description, ?string $publishDate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
    }

    public function formatPublishDate($format = 'DD-MM-YYYY')
    {
        // TODO: return the date in the required format
    }
    
    // TODO Pass $article to  nextPage function
    public function nextPage($articleId)
    {
        if($_GET['articleId'] === $articleId)
        {
            echo "Hello Next";
        }
        
    }
    // TODO Pass $article to  previousPage function
    public function previousPage($articleId)
    {
        if($_GET['articleId'] === $articleId)
        {
            echo "Hello previous";
        }
        
    }
}