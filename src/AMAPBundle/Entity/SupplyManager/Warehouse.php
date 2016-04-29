<?php

namespace AMAPBundle\Entity\SupplyManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warehouse
 *
 * @ORM\Table(name="warehouse")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\WarehouseRepository")
 */
class Warehouse implements InterfaceWarehouse {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \AMAPBundle\Entity\SupplyManager\WarehouseInfos
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
     *
     */
    public function __construct() {
        
    }

    /**
     * @param int $idWarehouse
     * @return \Supply Package\WarehouseInfos
     */
    public function getSupplyInfos($idWarehouse) {
// TODO: implement here
        return null;
    }

    /**
     * @param int $idWarehouse
     * @param string $nameWarehouse
     * @param string $adressWarehouse
     * @param string $descriptionWarehouse
     */
    public function setSupplyInfos($idWarehouse, $nameWarehouse, $adressWarehouse, $descriptionWarehouse) {
// TODO: implement here
    }

}
