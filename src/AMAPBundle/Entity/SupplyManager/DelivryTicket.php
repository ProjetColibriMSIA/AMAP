<?php

namespace AMAPBundle\Entity\SupplyManager;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 */
class DelivryTicket
{
	/**
	 *
	 */
	public function __construct()
	{
	}


	/**
	 * @param int $idConsumer
	 * @return \Consumer Package\AccountConsumer
	 */
	public function getDelivryTicketByID($idConsumer)
	{
		// TODO: implement here
		return null;
	}

	/**
	 * @param string $nameConsumer
	 * @param string $firstNameConsumer
	 * @return \Consumer Package\AccountConsumer
	 */
	public function getDelivryTicketByName($nameConsumer, $firstNameConsumer)
	{
		// TODO: implement here
		return null;
	}

	/**
	 * @param int $barCode
	 * @return \Consumer Package\AccountConsumer
	 */
	public function getDelivryTicketByBarCode($barCode)
	{
		// TODO: implement here
		return null;
	}
}
