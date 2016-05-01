<?php

namespace AMAPBundle\Entity\SupplyManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * WarehouseInfos
 *
 * @ORM\Table(name="WarehouseInfos")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\WarehouseInfosRepository")
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
     * @var int
     */
    private $idWarehouse;

    /**
     * @var string
     */
    private $nameWarehouse;

    /**
     * @var string
     */
    private $adressWarehouse;

    /**
     * @var string
     */
    private $descriptionWarehouse;

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
     * @return int
     */
    public function getIdWarehouse() {
        // TODO: implement here
        return 0;
    }

    /**
     * @param int $idWarehouse
     */
    public function setIdWarehouse($idWarehouse) {
        // TODO: implement here
    }

    /**
     * @return string
     */
    public function getNameWarehouse() {
        // TODO: implement here
        return "";
    }

    /**
     * @param string $nameWarehouse
     */
    public function setNameWarehouse($nameWarehouse) {
        // TODO: implement here
    }

    /**
     * @return string
     */
    public function getAdressWarehouse() {
        // TODO: implement here
        return "";
    }

    /**
     * @param string $adressWarehouse
     */
    public function setAdressWarehouse($adressWarehouse) {
        // TODO: implement here
    }

    /**
     * @return string
     */
    public function getDescriptionWarehouse() {
        // TODO: implement here
        return "";
    }

    /**
     * @param string $descriptionWarehouse
     */
    public function setDescriptionWarehouse($descriptionWarehouse) {
        // TODO: implement here
    }

}
