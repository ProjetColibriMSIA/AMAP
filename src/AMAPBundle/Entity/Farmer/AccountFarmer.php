<?php

namespace AMAPBundle\Entity\Farmer;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountFarmer
 *
 * @ORM\Table(name="account_farmer")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Farmer\AccountFarmerRepository")
 */
class AccountFarmer extends \AMAPBundle\Entity\Account\Account
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
