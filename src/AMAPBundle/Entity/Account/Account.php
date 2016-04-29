<?php

namespace AMAPBundle\Entity\Account;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="account")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\AccountRepository")
 */
abstract class Account {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     *
     */
    public function __construct() {
        
    }

    /**
     * @return string
     */
    public abstract function getName();

    /**
     * @param string $name
     */
    public abstract function setName($name);

    /**
     * @return string
     */
    public abstract function getFirstName();

    /**
     * @param string $firstName
     */
    public abstract function setFirstName($firstName);

    /**
     * @return string
     */
    public abstract function getAdress();

    /**
     * @param string $adress
     */
    public abstract function setAdress($adress);
}
