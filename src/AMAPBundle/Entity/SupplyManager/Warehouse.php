<?php

namespace AMAPBundle\Entity\SupplyManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warehouse
 *
 * @ORM\Table(name="warehouse")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\SupplyManager\WarehouseRepository")
 */
class Warehouse /*implements InterfaceWarehouse */
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
     * @var Arraycollection
     * 
     * @ORM\OneToOne(targetEntity="Warehouse", mappedBy="warehouseInfos")
     */
    private $warehouseInfos;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set warehouseInfos
     *
     * @param \AMAPBundle\Entity\SupplyManager\Warehouse $warehouseInfos
     *
     * @return Warehouse
     */
    public function setWarehouseInfos(\AMAPBundle\Entity\SupplyManager\Warehouse $warehouseInfos = null)
    {
        $this->warehouseInfos = $warehouseInfos;

        return $this;
    }

    /**
     * Get warehouseInfos
     *
     * @return \AMAPBundle\Entity\SupplyManager\Warehouse
     */
    public function getWarehouseInfos()
    {
        return $this->warehouseInfos;
    }
}
