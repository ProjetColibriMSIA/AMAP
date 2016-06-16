<?php

namespace AMAPBundle\Entity\Basket;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Basket\ProductRepository")
 */
class Product
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
     * @return Product
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
     * @return Product
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
     * Set description
     *
     * @param string $description
     *
     * @return Product
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
     * Constructor
     */
    public function __construct()
    {
        $this->baskets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add basket
     *
     * @param \AMAPBundle\Entity\Basket\Basket $basket
     *
     * @return Product
     */
    public function addBasket(\AMAPBundle\Entity\Basket\Basket $basket)
    {
        $this->baskets[] = $basket;

        return $this;
    }

    /**
     * Remove basket
     *
     * @param \AMAPBundle\Entity\Basket\Basket $basket
     */
    public function removeBasket(\AMAPBundle\Entity\Basket\Basket $basket)
    {
        $this->baskets->removeElement($basket);
    }

    /**
     * Get baskets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBaskets()
    {
        return $this->baskets;
    }

    /**
     * Set repIMG
     *
     * @param string $repIMG
     *
     * @return Product
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
}
