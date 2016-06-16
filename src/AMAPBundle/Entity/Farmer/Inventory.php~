<?php

namespace AMAPBundle\Entity\Farmer;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventory
 *
 * @ORM\Table(name="inventory")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Farmer\InventoryRepository")
 */
class Inventory {

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
     * @ORM\OneToMany(targetEntity="AMAPBundle\Entity\Basket\Basket", mappedBy="inventory")
     */
    private $inventoryBaskets;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->inventoryBaskets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString() {
        return strval($this->id);
    }

    /**
     * Add inventoryBasket
     *
     * @param \AMAPBundle\Entity\Basket\Basket $inventoryBasket
     *
     * @return Inventory
     */
    public function addInventoryBasket(\AMAPBundle\Entity\Basket\Basket $inventoryBasket) {
        $this->inventoryBaskets[] = $inventoryBasket;

        return $this;
    }

    /**
     * Remove inventoryBasket
     *
     * @param \AMAPBundle\Entity\Basket\Basket $inventoryBasket
     */
    public function removeInventoryBasket(\AMAPBundle\Entity\Basket\Basket $inventoryBasket) {
        $this->inventoryBaskets->removeElement($inventoryBasket);
    }

    /**
     * Get inventoryBaskets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInventoryBaskets() {
        return $this->inventoryBaskets;
    }

}
