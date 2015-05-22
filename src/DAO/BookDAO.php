<?php
namespace MyBooks\DAO;

use Doctrine\DBAL\Connection;
use MyBooks\Domain\Book;
use MyBooks\Exception\EntityNotFoundException;

class BookDAO extends DAO
{
    /**
     * Author DAO.
     *
     * @var \MyBooks\DAO\AuthorDAO
     */
    protected $authorDAO;

    /**
     * BookDAO's constructor.
     */
    public function __construct(Connection $db, AuthorDAO $authorDAO)
    {
        parent::__construct($db);
        $this->authorDAO = $authorDAO;
    }

    /**
     * Returns a book matchind the supplied id.
     *
     * @param integer $id The book's id.
     * @return \MyBooks\Domain\Book
     * @throws \MyBooks\Exception\EntityNotFoundException
     */
    public function find($id)
    {
        $row = $this->db->fetchAssoc(
            'SELECT * '.
            'FROM book '.
            'WHERE book_id = ?',
            array($id)
        );

        if($row)
            return $this->buildDomainObject($row);
        else
            throw new EntityNotFoundException(sprintf('No book matching id #%u.', $id));
    }

    /**
     * Returns a list of all books, sorted by id, most recent first.
     *
     * @return array
     */
    public function findAll()
    {
        $result = $this->db->fetchAll(
            'SELECT * '.
            'FROM book '.
            'ORDER BY book_id DESC'
        );

        $books = array();

        foreach($result as $row)
            $books[$row['book_id']] = $this->buildDomainObject($row);

        return $books;
    }

    /**
     * Creates a book object from a SQL result row.
     *
     * @param array $row SQL result row.
     * @return \MyBooks\Domain\Book
     */
    protected function buildDomainObject($row)
    {
        $book = new Book();
        $book->setId($row['book_id'])
              ->setTitle($row['book_title'])
              ->setISBN($row['book_isbn'])
              ->setSummary($row['book_summary'])
        ;

        if(array_key_exists('auth_id', $row))
            $book->setAuthor($this->authorDAO->find($row['auth_id']));

        return $book;
    }
}