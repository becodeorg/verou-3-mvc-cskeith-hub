<?php

declare(strict_types=1);

class Article
{
    public int $id;
    public string $title;
    public ?string $description;
    public ?string $publishDate;
    public string $author;

    public function __construct(int $id,string $title, ?string $description, ?string $publishDate, string $author)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
        $this->author = $author;
    }

    public function formatPublishDate()
    {
        // TODO: return the date in the required format
        $date = $this->publishDate;
        $newDate = date("d-m-y", strtotime($date));
        echo $newDate;
    }
    
    // TODO Pass $article to  nextPage function
    public function nextPage()
    {
        
    }
    // TODO Pass $article to  previousPage function
    public function previousPage()
    {   
        
    }

    public function author()
    {
        $author = $this->author;

        return $author;
    }
}