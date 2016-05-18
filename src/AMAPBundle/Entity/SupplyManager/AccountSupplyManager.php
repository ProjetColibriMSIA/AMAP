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
     * @ORM\Column(name="nameSupplyManager", type="string", length=200)
     */
    private $nameSupplyManager;

    /**
     * @var string
     * 
     * @ORM\Column(name="firstNameSupplyManager", type="string", length=200)
     */
    private $firstNameSupplyManager;

    /**
     * @var string
     * 
     * @ORM\Column(name="adressSupplyManager", type="string", length=200)
     */
    private $adressSupplyManager;

    /**
     * @var int[]
     * 
     * @ORM\Column(name="idAMAP", type="array")
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


    /**
     * Set nameSupplyManager
     *
     * @param string $nameSupplyManager
     *
     * @return AccountSupplyManager
     */
    public function setNameSupplyManager($nameSupplyManager)
    {
        $this->nameSupplyManager = $nameSupplyManager;

        return $this;
    }

    /**
     * Get nameSupplyManager
     *
     * @return string
     */
    public function getNameSupplyManager()
    {
        return $this->nameSupplyManager;
    }

    /**
     * Set firstNameSupplyManager
     *
     * @param string $firstNameSupplyManager
     *
     * @return AccountSupplyManager
     */
    public function setFirstNameSupplyManager($firstNameSupplyManager)
    {
        $this->firstNameSupplyManager = $firstNameSupplyManager;

        return $this;
    }

    /**
     * Get firstNameSupplyManager
     *
     * @return string
     */
    public function getFirstNameSupplyManager()
    {
        return $this->firstNameSupplyManager;
    }

    /**
     * Set adressSupplyManager
     *
     * @param string $adressSupplyManager
     *
     * @return AccountSupplyManager
     */
    public function setAdressSupplyManager($adressSupplyManager)
    {
        $this->adressSupplyManager = $adressSupplyManager;

        return $this;
    }

    /**
     * Get adressSupplyManager
     *
     * @return string
     */
    public function getAdressSupplyManager()
    {
        return $this->adressSupplyManager;
    }

    /**
     * Set idAMAP
     *
     * @param array $idAMAP
     *
     * @return AccountSupplyManager
     */
    public function setIdAMAP($idAMAP)
    {
        $this->idAMAP = $idAMAP;

        return $this;
    }

    /**
     * Get idAMAP
     *
     * @return array
     */
    public function getIdAMAP()
    {
        return $this->idAMAP;
    }
}
