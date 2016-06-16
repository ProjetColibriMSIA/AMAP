<?php

namespace AMAPBundle\Entity\LocalStoreManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoreInfos
 *
 * @ORM\Table(name="store_infos")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\LocalStoreManager\StoreInfosRepository")
 */
class StoreInfos {

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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="text")
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var Arraycollection
     * 
     * @ORM\OneToOne(targetEntity="Store", inversedBy="storeInfos")
     */
    private $store;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    public function __toString() {
        return $this->getName();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return StoreInfos
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return StoreInfos
     */
    public function setAdress($adress) {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress() {
        return $this->adress;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return StoreInfos
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set store
     *
     * @param \AMAPBundle\Entity\LocalStoreManager\Store $store
     *
     * @return StoreInfos
     */
    public function setStore(\AMAPBundle\Entity\LocalStoreManager\Store $store = null) {
        $this->store = $store;

        return $this;
    }

    /**
     * Get store
     *
     * @return \AMAPBundle\Entity\LocalStoreManager\Store
     */
    public function getStore() {
        return $this->store;
    }

}
