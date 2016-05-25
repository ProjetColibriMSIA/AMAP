<?php

namespace AMAPBundle\Entity\AmapManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAMAPManager
 *
 * @ORM\Table(name="account_a_m_a_p_manager")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\AmapManager\AccountAMAPManagerRepository")
 */
class AccountAMAPManager extends \AMAPBundle\Entity\Account\Account
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
