<?php

namespace AMAPBundle\Entity\LocalStoreManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoreInfos
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
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=50)
     */
    private $phone;
    
    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\Basket\Basket",mappedBy="basketsStore")
     * @ORM\JoinTable(name="basket_store",
     *      joinColumns={@ORM\JoinColumn(name="store_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="basket_id", referencedColumnName="id")}
     * )
     */
    protected $baskets;
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
     * Constructor
     */
    public function __construct()
    {
        $this->baskets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Store
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add basket
     *
     * @param \AMAPBundle\Entity\Basket\Basket $basket
     *
     * @return Store
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
}
