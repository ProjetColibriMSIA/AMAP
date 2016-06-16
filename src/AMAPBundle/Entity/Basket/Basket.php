<?php

namespace AMAPBundle\Entity\Basket;

use Doctrine\ORM\Mapping as ORM;

/**
 * Basket
 *
 * @ORM\Table(name="basket")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Basket\BasketRepository")
 */
class Basket {

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
     * @ORM\Column(name="price", type="decimal", precision=10, scale=0)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="barCode", type="integer")
     */
    private $barCode;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=10, scale=0)
     */
    private $weight;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expirationDate", type="date")
     */
    private $expirationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="supplyDate", type="date")
     */
    private $supplyDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="storeDate", type="date")
     */
    private $storeDate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="repIMG", type="text")
     */
    private $repIMG;

    /**
     * @var Arraycollection
     * 
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\Basket\Product", inversedBy="baskets")
     */
    private $products;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\Account\Group")
     * @ORM\JoinTable(name="basket_consumer",
     *      joinColumns={@ORM\JoinColumn(name="basket_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    private $ownerConsumer;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\Account\Group")
     * @ORM\JoinTable(name="basket_farmer",
     *      joinColumns={@ORM\JoinColumn(name="basket_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    private $productBy;

    /**
     * @var Arraycollection
     *
     * @ORM\ManyToOne(targetEntity="AMAPBundle\Entity\Farmer\Inventory", inversedBy="inventoryBaskets")
     */
    private $inventory;

    /**
     * Constructor
     */
    public function __construct() {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ownerConsumer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productBy = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString() {
        return strval($this->getId());
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
     * Set name
     *
     * @param string $name
     *
     * @return Basket
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
     * Set price
     *
     * @param string $price
     *
     * @return Basket
     */
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set barCode
     *
     * @param integer $barCode
     *
     * @return Basket
     */
    public function setBarCode($barCode) {
        $this->barCode = $barCode;

        return $this;
    }

    /**
     * Get barCode
     *
     * @return integer
     */
    public function getBarCode() {
        return $this->barCode;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return Basket
     */
    public function setWeight($weight) {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight() {
        return $this->weight;
    }

    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     *
     * @return Basket
     */
    public function setExpirationDate($expirationDate) {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate() {
        return $this->expirationDate;
    }

    /**
     * Set supplyDate
     *
     * @param \DateTime $supplyDate
     *
     * @return Basket
     */
    public function setSupplyDate($supplyDate) {
        $this->supplyDate = $supplyDate;

        return $this;
    }

    /**
     * Get supplyDate
     *
     * @return \DateTime
     */
    public function getSupplyDate() {
        return $this->supplyDate;
    }

    /**
     * Set storeDate
     *
     * @param \DateTime $storeDate
     *
     * @return Basket
     */
    public function setStoreDate($storeDate) {
        $this->storeDate = $storeDate;

        return $this;
    }

    /**
     * Get storeDate
     *
     * @return \DateTime
     */
    public function getStoreDate() {
        return $this->storeDate;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Basket
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
     * Set repIMG
     *
     * @param string $repIMG
     *
     * @return Basket
     */
    public function setRepIMG($repIMG) {
        $this->repIMG = $repIMG;

        return $this;
    }

    /**
     * Get repIMG
     *
     * @return string
     */
    public function getRepIMG() {
        return $this->repIMG;
    }

    /**
     * Add product
     *
     * @param \AMAPBundle\Entity\Basket\Product $product
     *
     * @return Basket
     */
    public function addProduct(\AMAPBundle\Entity\Basket\Product $product) {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \AMAPBundle\Entity\Basket\Product $product
     */
    public function removeProduct(\AMAPBundle\Entity\Basket\Product $product) {
        $this->products->removeElement($product);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts() {
        return $this->products;
    }

    /**
     * Add ownerConsumer
     *
     * @param \AMAPBundle\Entity\Account\Group $ownerConsumer
     *
     * @return Basket
     */
    public function addOwnerConsumer(\AMAPBundle\Entity\Account\Group $ownerConsumer) {
        $this->ownerConsumer[] = $ownerConsumer;

        return $this;
    }

    /**
     * Remove ownerConsumer
     *
     * @param \AMAPBundle\Entity\Account\Group $ownerConsumer
     */
    public function removeOwnerConsumer(\AMAPBundle\Entity\Account\Group $ownerConsumer) {
        $this->ownerConsumer->removeElement($ownerConsumer);
    }

    /**
     * Get ownerConsumer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOwnerConsumer() {
        return $this->ownerConsumer;
    }

    /**
     * Add productBy
     *
     * @param \AMAPBundle\Entity\Account\Group $productBy
     *
     * @return Basket
     */
    public function addProductBy(\AMAPBundle\Entity\Account\Group $productBy) {
        $this->productBy[] = $productBy;

        return $this;
    }

    /**
     * Remove productBy
     *
     * @param \AMAPBundle\Entity\Account\Group $productBy
     */
    public function removeProductBy(\AMAPBundle\Entity\Account\Group $productBy) {
        $this->productBy->removeElement($productBy);
    }

    /**
     * Get productBy
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductBy() {
        return $this->productBy;
    }

    /**
     * Set inventory
     *
     * @param \AMAPBundle\Entity\Farmer\Inventory $inventory
     *
     * @return Basket
     */
    public function setInventory(\AMAPBundle\Entity\Farmer\Inventory $inventory = null) {
        $this->inventory = $inventory;

        return $this;
    }

    /**
     * Get inventory
     *
     * @return \AMAPBundle\Entity\Farmer\Inventory
     */
    public function getInventory() {
        return $this->inventory;
    }

}
