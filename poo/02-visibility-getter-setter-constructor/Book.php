<?php

class Book
{
    /**
     * [Description for $title]
     *
     * @var string
     */
    private string $title;

    /**
     * [Description for $author]
     *
     * @var string
     */
    private string $author;

    /**
     * [Description for $pages]
     *
     * @var int
     */
    private int $pages;

    /**
     * [Description for $year]
     *
     * @var int
     */
    private int $year;

    public function __construct(string $title, string $author, int $pages, int $year )
    {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
        $this->year = $year;
    }

    public function read(): string
    {
        return "Je lis le livre $this->title, écris par $this->author";
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle($title): self
    {
        $this->title = $title;
        return $this;
    }

    

    /**
     * Get [Description for $author]
     *
     * @return  string
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set [Description for $author]
     *
     * @param  string  $author  [Description for $author]
     *
     * @return  self
     */ 
    public function setAuthor(string $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get [Description for $pages]
     *
     * @return  int
     */ 
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set [Description for $pages]
     *
     * @param  int  $pages  [Description for $pages]
     *
     * @return  self
     */ 
    public function setPages(int $pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get [Description for $year]
     *
     * @return  int
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set [Description for $year]
     *
     * @param  int  $year  [Description for $year]
     *
     * @return  self
     */ 
    public function setYear(int $year)
    {
        $this->year = $year;

        return $this;
    }
}