<?php
namespace MyBooks\Domain;

class Book
{
    /**
     * Book's id.
     *
     * @var integer
     */
    protected $id;

    /**
     * Book's title.
     *
     * @var string
     */
    protected $title;

    /**
     * Book's ISBN.
     *
     * @var string
     */
    protected $isbn;

    /**
     * Book's summary.
     *
     * @var string
     */
    protected $summary;

    /**
     * Book's author.
     *
     * @var \MyBooks\Domain\Author
     */
    protected $author;

    /**
     * Gets the book's id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the book's id.
     *
     * @param integer $id
     * @return \MyBooks\Domain\Book
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets the book's title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the book's title.
     *
     * @param string $title
     * @return \MyBooks\Domain\Book
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets the book's ISBN.
     *
     * @return string
     */
    public function getISBN()
    {
        return $this->isbn;
    }

    /**
     * Sets the book's ISBN.
     *
     * @param string $isbn
     * @return \MyBooks\Domain\Book
     */
    public function setISBN($isbn)
    {
        $this->isbn = $isbn;
        return $this;
    }
    
    /**
     * Gets the book's summary.
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets the book's summary.
     *
     * @param string $summary
     * @return \MyBooks\Domain\Book
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Gets the book's author.
     *
     * @return \MyBooks\Domain\Author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the book's author.
     *
     * @param \MyBooks\Domain\Author
     * @return \MyBooks\Domain\Book
     */
    public function setAuthor(Author $author)
    {
        $this->author = $author;
        return $this;
    }
}