<?php

namespace AMAPBundle\Entity\SupplyManager;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 */
class WarehouseInfos
{
	/**
	 *
	 */
	public function __construct()
	{
	}

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
	 * @return int
	 */
	public function getIdWarehouse()
	{
		// TODO: implement here
		return 0;
	}

	/**
	 * @param int $idWarehouse
	 */
	public function setIdWarehouse($idWarehouse)
	{
		// TODO: implement here
	}

	/**
	 * @return string
	 */
	public function getNameWarehouse()
	{
		// TODO: implement here
		return "";
	}

	/**
	 * @param string $nameWarehouse
	 */
	public function setNameWarehouse($nameWarehouse)
	{
		// TODO: implement here
	}

	/**
	 * @return string
	 */
	public function getAdressWarehouse()
	{
		// TODO: implement here
		return "";
	}

	/**
	 * @param string $adressWarehouse
	 */
	public function setAdressWarehouse($adressWarehouse)
	{
		// TODO: implement here
	}

	/**
	 * @return string
	 */
	public function getDescriptionWarehouse()
	{
		// TODO: implement here
		return "";
	}

	/**
	 * @param string $descriptionWarehouse
	 */
	public function setDescriptionWarehouse($descriptionWarehouse)
	{
		// TODO: implement here
	}
}
