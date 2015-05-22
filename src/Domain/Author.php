<?php
namespace MyBooks\Domain;

class Author
{
    /**
     * Author's id.
     *
     * @var integer
     */
    protected $id;

    /**
     * Author's first name.
     *
     * @var string
     */
    protected $firstName;

    /**
     * Author's last name.
     *
     * @var string
     */
    protected $lastName;

    /**
     * Gets the author's id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the author's id.
     *
     * @param integer $id
     * @return \MyBooks\Domain\Author
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets the author's first name.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /**
     * Sets the author's first name.
     *
     * @param string $firstName
     * @return \MyBooks\Domain\Author
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets the author's last name.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the author's last name.
     *
     * @param string $lastName
     * @return \MyBooks\Domain\Author
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
}