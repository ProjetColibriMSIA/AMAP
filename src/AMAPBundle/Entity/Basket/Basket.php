<?php

namespace AMAPBundle\Entity\Basket;

use Doctrine\ORM\Mapping as ORM;
/**
 * Basket
 *
 * @ORM\Table(name="basket")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Basket\BasketRepository")
 */
class Basket
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
     * @ORM\ManyToMany(targetEntity="Product", inversedBy="baskets")
     */
    private $products;
    
    /**
     * @var Arraycollection
     *
     * @ORM\OneToOne(targetEntity="AMAPBundle\Entity\Consumer\AccountConsumer", inversedBy="basketOwnedBy")
     */
    private $ownerConsumer;

    /**
     * @var Arraycollection
     *
     * @ORM\OneToOne(targetEntity="AMAPBundle\Entity\Farmer\AccountFarmer", inversedBy="basketMakeBy")
     */
    private $productBy;
    
    /**
     * @var Arraycollection
     *
     * @ORM\ManyToOne(targetEntity="AMAPBundle\Entity\Farmer\Inventory", inversedBy="inventoryBaskets")
     */
    private $inventory;
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
     * Set name
     *
     * @param string $name
     *
     * @return Basket
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Basket
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set barCode
     *
     * @param integer $barCode
     *
     * @return Basket
     */
    public function setBarCode($barCode)
    {
        $this->barCode = $barCode;

        return $this;
    }

    /**
     * Get barCode
     *
     * @return int
     */
    public function getBarCode()
    {
        return $this->barCode;
    }

    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     *
     * @return Basket
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set supplyDate
     *
     * @param \DateTime $supplyDate
     *
     * @return Basket
     */
    public function setSupplyDate($supplyDate)
    {
        $this->supplyDate = $supplyDate;

        return $this;
    }

    /**
     * Get supplyDate
     *
     * @return \DateTime
     */
    public function getSupplyDate()
    {
        return $this->supplyDate;
    }

    /**
     * Set storeDate
     *
     * @param \DateTime $storeDate
     *
     * @return Basket
     */
    public function setStoreDate($storeDate)
    {
        $this->storeDate = $storeDate;

        return $this;
    }

    /**
     * Get storeDate
     *
     * @return \DateTime
     */
    public function getStoreDate()
    {
        return $this->storeDate;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Basket
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return Basket
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set repIMG
     *
     * @param string $repIMG
     *
     * @return Basket
     */
    public function setRepIMG($repIMG)
    {
        $this->repIMG = $repIMG;

        return $this;
    }

    /**
     * Get repIMG
     *
     * @return string
     */
    public function getRepIMG()
    {
        return $this->repIMG;
    }

    /**
     * Add product
     *
     * @param \AMAPBundle\Entity\Basket\Product $product
     *
     * @return Basket
     */
    public function addProduct(\AMAPBundle\Entity\Basket\Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \AMAPBundle\Entity\Basket\Product $product
     */
    public function removeProduct(\AMAPBundle\Entity\Basket\Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set ownerConsumer
     *
     * @param \AMAPBundle\Entity\Consumer\AccountConsumer $ownerConsumer
     *
     * @return Basket
     */
    public function setOwnerConsumer(\AMAPBundle\Entity\Consumer\AccountConsumer $ownerConsumer = null)
    {
        $this->ownerConsumer = $ownerConsumer;

        return $this;
    }

    /**
     * Get ownerConsumer
     *
     * @return \AMAPBundle\Entity\Consumer\AccountConsumer
     */
    public function getOwnerConsumer()
    {
        return $this->ownerConsumer;
    }

    /**
     * Set productBy
     *
     * @param \AMAPBundle\Entity\Farmer\AccountFarmer $productBy
     *
     * @return Basket
     */
    public function setProductBy(\AMAPBundle\Entity\Farmer\AccountFarmer $productBy = null)
    {
        $this->productBy = $productBy;

        return $this;
    }

    /**
     * Get productBy
     *
     * @return \AMAPBundle\Entity\Farmer\AccountFarmer
     */
    public function getProductBy()
    {
        return $this->productBy;
    }

    /**
     * Set inventory
     *
     * @param \AMAPBundle\Entity\Farmer\Inventory $inventory
     *
     * @return Basket
     */
    public function setInventory(\AMAPBundle\Entity\Farmer\Inventory $inventory = null)
    {
        $this->inventory = $inventory;

        return $this;
    }

    /**
     * Get inventory
     *
     * @return \AMAPBundle\Entity\Farmer\Inventory
     */
    public function getInventory()
    {
        return $this->inventory;
    }
}
