<?php

namespace AMAPBundle\Entity\SupplyManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * WarehouseInfos
 *
 * @ORM\Table(name="warehouse_infos")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\SupplyManager\WarehouseInfosRepository")
 */
class WarehouseInfos {

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
     * @ORM\OneToOne(targetEntity="Warehouse", inversedBy="warehouseInfos")
     */
    private $warehouse;

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
     * @return WarehouseInfos
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
     * @return WarehouseInfos
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
     * @return WarehouseInfos
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
     * Set warehouse
     *
     * @param \AMAPBundle\Entity\SupplyManager\Warehouse $warehouse
     *
     * @return WarehouseInfos
     */
    public function setWarehouse(\AMAPBundle\Entity\SupplyManager\Warehouse $warehouse = null) {
        $this->warehouse = $warehouse;

        return $this;
    }

    /**
     * Get warehouse
     *
     * @return \AMAPBundle\Entity\SupplyManager\Warehouse
     */
    public function getWarehouse() {
        return $this->warehouse;
    }

}
