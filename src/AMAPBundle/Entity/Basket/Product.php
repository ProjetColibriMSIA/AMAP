<?php

namespace AMAPBundle\Entity\Basket;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Basket\ProductRepository")
 */
class Product {

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
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=10, scale=2)
     */
    private $weight;

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
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\Basket\Basket", mappedBy="products")
     */
    private $baskets;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\SupplyManager\Warehouse",inversedBy="products")
     * @ORM\JoinTable(name="product_warehouse",
     *      joinColumns={@ORM\JoinColumn(name="product_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="warehouse_id", referencedColumnName="id")}
     * )
     */
    protected $productsWarehouse;
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
     * @return Product
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
     * @return Product
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
     * Set description
     *
     * @param string $description
     *
     * @return Product
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
     * Constructor
     */
    public function __construct() {
        $this->baskets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add basket
     *
     * @param \AMAPBundle\Entity\Basket\Basket $basket
     *
     * @return Product
     */
    public function addBasket(\AMAPBundle\Entity\Basket\Basket $basket) {
        $this->baskets[] = $basket;

        return $this;
    }

    /**
     * Remove basket
     *
     * @param \AMAPBundle\Entity\Basket\Basket $basket
     */
    public function removeBasket(\AMAPBundle\Entity\Basket\Basket $basket) {
        $this->baskets->removeElement($basket);
    }

    /**
     * Get baskets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBaskets() {
        return $this->baskets;
    }

    /**
     * Set repIMG
     *
     * @param string $repIMG
     *
     * @return Product
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
     * Set weight
     *
     * @param string $weight
     *
     * @return Product
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
     * Add productsWarehouse
     *
     * @param \AMAPBundle\Entity\LocalStoreManager\Store $productsWarehouse
     *
     * @return Product
     */
    public function addProductsWarehouse(\AMAPBundle\Entity\LocalStoreManager\Store $productsWarehouse)
    {
        $this->productsWarehouse[] = $productsWarehouse;

        return $this;
    }

    /**
     * Remove productsWarehouse
     *
     * @param \AMAPBundle\Entity\LocalStoreManager\Store $productsWarehouse
     */
    public function removeProductsWarehouse(\AMAPBundle\Entity\LocalStoreManager\Store $productsWarehouse)
    {
        $this->productsWarehouse->removeElement($productsWarehouse);
    }

    /**
     * Get productsWarehouse
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductsWarehouse()
    {
        return $this->productsWarehouse;
    }
}
