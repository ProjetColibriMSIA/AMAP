<?php

namespace AMAPBundle\Entity\SupplyManager;

/**
 * Tiquet par nom consommateur.
 */
interface InterfaceWarehouse
{

	/**
	 * @param int $idWarehouse
	 * @return \Supply Package\WarehouseInfos
	 */
	public function getSupplyInfos($idWarehouse);

	/**
	 * @param int $idWarehouse
	 * @param string $nameWarehouse
	 * @param string $adressWarehouse
	 * @param string $descriptionWarehouse
	 */
	public function setSupplyInfos($idWarehouse, $nameWarehouse, $adressWarehouse, $descriptionWarehouse);
}
