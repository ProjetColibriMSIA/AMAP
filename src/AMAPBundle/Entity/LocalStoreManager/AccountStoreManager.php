<?php

namespace AMAPBundle\Entity\LocalStoreManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountStoreManager
 *
 * @ORM\Table(name="account_store_manager")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\LocalStoreManager\AccountStoreManagerRepository")
 */
class AccountStoreManager
{

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
     * @ORM\Column(name="nameStoreManager", type="string", length=255)
     */
    private $nameStoreManager;

    /**
     * @var string
     *
     * @ORM\Column(name="firstNameStoreManager", type="string", length=255)
     */
    private $firstNameStoreManager;

    /**
     * @var string
     *
     * @ORM\Column(name="adressStoreManager", type="string", length=255)
     */
    private $adressStoreManager;


     /**
       * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\AMAP\AMAP", inversedBy="listAccountStoreManager", cascade={"persist"})
       */
      private $listAMAP;
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameStoreManager
     *
     * @param string $nameStoreManager
     *
     * @return AccountStoreManager
     */
    public function setNameStoreManager($nameStoreManager)
    {
        $this->nameStoreManager = $nameStoreManager;

        return $this;
    }

    /**
     * Get nameStoreManager
     *
     * @return string
     */
    public function getNameStoreManager()
    {
        return $this->nameStoreManager;
    }

    /**
     * Set firstNameStoreManager
     *
     * @param string $firstNameStoreManager
     *
     * @return AccountStoreManager
     */
    public function setFirstNameStoreManager($firstNameStoreManager)
    {
        $this->firstNameStoreManager = $firstNameStoreManager;

        return $this;
    }

    /**
     * Get firstNameStoreManager
     *
     * @return string
     */
    public function getFirstNameStoreManager()
    {
        return $this->firstNameStoreManager;
    }

    /**
     * Set adressStoreManager
     *
     * @param string $adressStoreManager
     *
     * @return AccountStoreManager
     */
    public function setAdressStoreManager($adressStoreManager)
    {
        $this->adressStoreManager = $adressStoreManager;

        return $this;
    }

    /**
     * Get adressStoreManager
     *
     * @return string
     */
    public function getAdressStoreManager()
    {
        return $this->adressStoreManager;
    }
   
   

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listAMAP = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listAMAP
     *
     * @param \AMAPBundle\Entity\AMAP\AMAP $listAMAP
     *
     * @return AccountStoreManager
     */
    public function addListAMAP(\AMAPBundle\Entity\AMAP\AMAP $listAMAP)
    {
        $this->listAMAP[] = $listAMAP;

        return $this;
    }

    /**
     * Remove listAMAP
     *
     * @param \AMAPBundle\Entity\AMAP\AMAP $listAMAP
     */
    public function removeListAMAP(\AMAPBundle\Entity\AMAP\AMAP $listAMAP)
    {
        $this->listAMAP->removeElement($listAMAP);
    }

    /**
     * Get listAMAP
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListAMAP()
    {
        return $this->listAMAP;
    }
}
