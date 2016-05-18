<?php

namespace AMAPBundle\Entity\LocalStoreManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfosStore
 *
 * @ORM\Table(name="infos_store")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\LocalStoreManager\InfosStoreRepository")
 */
class InfosStore
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
     * @ORM\Column(name="storeName", type="string", length=100)
     */
    private $storeName;

    /**
     * @var string
     *
     * @ORM\Column(name="adressStore", type="string", length=255)
     */
    private $adressStore;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionStore", type="string", length=255)
     */
    private $descriptionStore;


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
     * Set storeName
     *
     * @param string $storeName
     *
     * @return InfosStore
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;

        return $this;
    }

    /**
     * Get storeName
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Set adressStore
     *
     * @param string $adressStore
     *
     * @return InfosStore
     */
    public function setAdressStore($adressStore)
    {
        $this->adressStore = $adressStore;

        return $this;
    }

    /**
     * Get adressStore
     *
     * @return string
     */
    public function getAdressStore()
    {
        return $this->adressStore;
    }

    /**
     * Set descriptionStore
     *
     * @param string $descriptionStore
     *
     * @return InfosStore
     */
    public function setDescriptionStore($descriptionStore)
    {
        $this->descriptionStore = $descriptionStore;

        return $this;
    }

    /**
     * Get descriptionStore
     *
     * @return string
     */
    public function getDescriptionStore()
    {
        return $this->descriptionStore;
    }
}
