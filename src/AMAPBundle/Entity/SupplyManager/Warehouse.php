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

<<<<<<< HEAD
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
=======
	private int $idWarehouse;
    private string $nameWarehouse;
    private string $adressWarehouse;
    private string $descriptionWarehouse;
>>>>>>> 163bafff0d11498f27af057665c07a88fc3e3262

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    public function __construct($idWarehouse, $nameWarehouse, $adressWarehouse, $descriptionWarehouse) {
        $this->idWarehouse = $idWarehouse;
		$this->nameWarehouse = $nameWarehouse;
		$this->adressWarehouse = $adressWarehouse;
		$this->descriptionWarehouse = $descriptionWarehouse;
    }

    /**
     * @param int $idWarehouse
     * @return \Supply Package\WarehouseInfos
     */
    public function getSupplyInfos($idWarehouse) {
        return $nameWarehouse.";".$adressWarehouse.";".$descriptionWarehouse;
    }

    /**
     * @param int $idWarehouse
     * @param string $nameWarehouse
     * @param string $adressWarehouse
     * @param string $descriptionWarehouse
     */
    public function setSupplyInfos($idWarehouse, $nameWarehouse, $adressWarehouse, $descriptionWarehouse) {
		$this->idWarehouse = $idWarehouse;
		$this->nameWarehouse = $nameWarehouse;
		$this->adressWarehouse = $adressWarehouse;
		$this->descriptionWarehouse = $descriptionWarehouse;
    }

}
