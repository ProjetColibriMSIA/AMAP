<?php

namespace AMAPBundle\Entity\AMAP;

use Doctrine\ORM\Mapping as ORM;

/**
 * AMAP
 *
 * @ORM\Table(name="a_m_a_p")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\AMAP\AMAPRepository")
 */
class AMAP
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
     * @ORM\Column(name="nameAMAP", type="string", length=255)
     */
    private $nameAMAP;

    /**
     * @var string
     *
     * @ORM\Column(name="adressAMAP", type="string", length=255)
     */
    private $adressAMAP;

    /**
     * @var int
     *
     * @ORM\Column(name="nbMember", type="integer")
     */
    private $nbMember;


    /**
       * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\LocalStoreManager\AccountStoreManager", mappedBy="listAMAP", cascade={"persist"})
       */
      private $listAccountStoreManager;

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
     * Set nameAMAP
     *
     * @param string $nameAMAP
     *
     * @return AMAP
     */
    public function setNameAMAP($nameAMAP)
    {
        $this->nameAMAP = $nameAMAP;

        return $this;
    }

    /**
     * Get nameAMAP
     *
     * @return string
     */
    public function getNameAMAP()
    {
        return $this->nameAMAP;
    }

    /**
     * Set adressAMAP
     *
     * @param string $adressAMAP
     *
     * @return AMAP
     */
    public function setAdressAMAP($adressAMAP)
    {
        $this->adressAMAP = $adressAMAP;

        return $this;
    }

    /**
     * Get adressAMAP
     *
     * @return string
     */
    public function getAdressAMAP()
    {
        return $this->adressAMAP;
    }

    /**
     * Set nbMember
     *
     * @param integer $nbMember
     *
     * @return AMAP
     */
    public function setNbMember($nbMember)
    {
        $this->nbMember = $nbMember;

        return $this;
    }

    /**
     * Get nbMember
     *
     * @return int
     */
    public function getNbMember()
    {
        return $this->nbMember;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listAccountStoreManager = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listAccountStoreManager
     *
     * @param \AMAPBundle\Entity\LocalStoreManager\AccountStoreManager $listAccountStoreManager
     *
     * @return AMAP
     */
    public function addListAccountStoreManager(\AMAPBundle\Entity\LocalStoreManager\AccountStoreManager $listAccountStoreManager)
    {
        $this->listAccountStoreManager[] = $listAccountStoreManager;

        return $this;
    }

    /**
     * Remove listAccountStoreManager
     *
     * @param \AMAPBundle\Entity\LocalStoreManager\AccountStoreManager $listAccountStoreManager
     */
    public function removeListAccountStoreManager(\AMAPBundle\Entity\LocalStoreManager\AccountStoreManager $listAccountStoreManager)
    {
        $this->listAccountStoreManager->removeElement($listAccountStoreManager);
    }

    /**
     * Get listAccountStoreManager
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListAccountStoreManager()
    {
        return $this->listAccountStoreManager;
    }
}
