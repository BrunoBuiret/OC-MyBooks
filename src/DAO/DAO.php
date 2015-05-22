<?php
namespace MyBooks\DAO;

use Doctrine\DBAL\Connection;

abstract class DAO
{
    /**
     * Database connection
     *
     * @var \Doctrine\DBAL\Connection
     */
    protected $db;

    /**
     * DAO's constructor.
     *
     * @param \Doctrine\DBAL\Connection The database connection object
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Builds a domain object from a DB row. Must be overridden by child classes.
     */
    protected abstract function buildDomainObject($row);
}