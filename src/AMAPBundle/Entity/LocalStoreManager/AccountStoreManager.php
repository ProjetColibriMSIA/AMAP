<?php

namespace AMAPBundle\Entity\LocalStoreManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountStoreManager
 *
 * @ORM\Table(name="account_store_manager")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\LocalStoreManager\AccountStoreManagerRepository")
 */
class AccountStoreManager extends \AMAPBundle\Entity\Account\Account {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\AMAP\AMAP", inversedBy="listAccountStoreManager", cascade={"persist"})
     */
    private $listAMAP;

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        $this->listAMAP = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nameStoreManager
     *
     * @param string $nameStoreManager
     *
     * @return AccountStoreManager
     */
    public function setNameStoreManager($nameStoreManager) {
        $this->nameStoreManager = $nameStoreManager;

        return $this;
    }

    /**
     * Get nameStoreManager
     *
     * @return string
     */
    public function getNameStoreManager() {
        return $this->nameStoreManager;
    }

    /**
     * Add listAMAP
     *
     * @param \AMAPBundle\Entity\AMAP\AMAP $listAMAP
     *
     * @return AccountStoreManager
     */
    public function addListAMAP(\AMAPBundle\Entity\AMAP\AMAP $listAMAP) {
        $this->listAMAP[] = $listAMAP;

        return $this;
    }

    /**
     * Remove listAMAP
     *
     * @param \AMAPBundle\Entity\AMAP\AMAP $listAMAP
     */
    public function removeListAMAP(\AMAPBundle\Entity\AMAP\AMAP $listAMAP) {
        $this->listAMAP->removeElement($listAMAP);
    }

    /**
     * Get listAMAP
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListAMAP() {
        return $this->listAMAP;
    }

}
