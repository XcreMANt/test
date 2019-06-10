<?php
class Article
{
    protected $author;
    protected $title;
    protected $text;
    public $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct($id, $text)
    {
//        $this->title = $title;
        $this->text = $text;
        $this->id = $id;
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

    public function getShortText()
    {
        $arr = explode(' ', $this->text);
        $i = 0;
        $short_arr = [];
//        var_dump($arr);
        while($i < 3 && $i < count($arr)) {
            $short_arr[] = $arr[$i];
            $i++;
        }

        $short_text = implode(' ', $short_arr);

        return $short_text;
    }
}
