<?php

namespace Models;

class Article
{
    protected $title;
    protected $author;
    protected $text;

    /**
     * Article constructor.
     * @param $title
     * @param $author
     * @param $text
     */
    public function __construct($title, $author, $text)
    {
        $this->title = $title;
        $this->author = $author;
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


}