<?php

class Book
{
    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $author;

    /**
     * @var int
     */
    private int $pages;

    /**
     * @var int
     */
    private int $year;

    /**
     * @param string $title
     * @param string $author
     * @param int $pages
     * @param int $year
     */
    public function __construct(string $title, string $author, int $pages, int $year)
    {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function read(): string
    {
        return "Je lis le livre $this->title, écris par $this->author";
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     *
     * @return self
     */
    public function setTitle($title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return  string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param  string  $author
     *
     * @return  self
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return  int
     */
    public function getPages(): int
    {
        return $this->pages;
    }

    /**
     * @param  int  $pages
     *
     * @return  self
     */
    public function setPages(int $pages): self
    {
        $this->pages = $pages;
        return $this;
    }

    /**
     * @return  int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     *
     * @param  int  $year
     *
     * @return  self
     */
    public function setYear(int $year): self
    {
        $this->year = $year;
        return $this;
    }
}
