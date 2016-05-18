<?php

namespace AMAPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeliveryTicket
 *
 * @ORM\Table(name="delivery_ticket")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\DeliveryTicketRepository")
 */
class DeliveryTicket
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
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

