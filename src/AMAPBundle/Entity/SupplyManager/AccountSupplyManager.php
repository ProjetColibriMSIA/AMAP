<?php

namespace AMAPBundle\Entity\SupplyManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountSupplyManager
 *
 * @ORM\Table(name="account_supply_manager")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\AccountSupplyManagerRepository")
 */
class AccountSupplyManager
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
}
