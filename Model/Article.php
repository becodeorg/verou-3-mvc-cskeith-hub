<?php

declare(strict_types=1);

class Article
{
    public int $id;
    public string $title;
    public ?string $description;
    public ?string $publishDate;
    public int $totalArticles;
    public string $author;

    public function __construct(int $id,string $title, ?string $description, ?string $publishDate, int $totalArticles, string $author)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
        $this->totalArticles = $totalArticles;
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
        $count = $this->id;
        if($count === $this->totalArticles)
        {
            return 1;
        }
        return ++$count;
    }
    // TODO Pass $article to  previousPage function
    public function previousPage()
    {   
        $count = $this->id;
        if($count === $this->totalArticles)
        {
            return --$count;
        }
        elseif($count === 1)
        {
            return $this->totalArticles;
        }
        return 1;
    }

    public function author()
    {
        $author = $this->author;

        return $author;
    }
}