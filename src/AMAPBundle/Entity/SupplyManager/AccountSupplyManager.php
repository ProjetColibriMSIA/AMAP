<?php

namespace AMAPBundle\Entity\SupplyManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountSupplyManager
 *
 * @ORM\Table(name="account_supply_manager")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\AccountSupplyManagerRepository")
 */
class AccountSupplyManager extends \AMAPBundle\Entity\Account\Account {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $nameSupplyManager;

    /**
     * @var string
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $firstNameSupplyManager;

    /**
     * @var string
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $adressSupplyManager;

    /**
     * @var int[]
     * 
     * @ORM\Column(name="idAMAP", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idAMAP;

    /**
     *
     */
    public function __construct() {
        
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName() {
        
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        
    }

    /**
     * @return string
     */
    public function getFirstName() {
        
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName) {
        
    }

    /**
     * @return string
     */
    public function getAdress() {
        
    }

    /**
     * @param string $adress
     */
    public function setAdress($adress) {
        
    }

}
