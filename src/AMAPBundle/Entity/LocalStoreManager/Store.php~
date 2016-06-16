<?php

namespace AMAPBundle\Entity\LocalStoreManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * Store
 *
 * @ORM\Table(name="store")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\LocalStoreManager\StoreRepository")
 */
class Store {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Arraycollection
     * 
     * @ORM\OneToOne(targetEntity="StoreInfos", mappedBy="store")
     */
    private $storeInfos;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    public function __toString() {
        return ((new \ReflectionClass($this))->getShortName() . ':' . strval($this->getId()));
    }

    /**
     * Set storeInfos
     *
     * @param \AMAPBundle\Entity\LocalStoreManager\StoreInfos $storeInfos
     *
     * @return Store
     */
    public function setStoreInfos(\AMAPBundle\Entity\LocalStoreManager\StoreInfos $storeInfos = null) {
        $this->storeInfos = $storeInfos;

        return $this;
    }

    /**
     * Get storeInfos
     *
     * @return \AMAPBundle\Entity\LocalStoreManager\StoreInfos
     */
    public function getStoreInfos() {
        return $this->storeInfos;
    }

}
