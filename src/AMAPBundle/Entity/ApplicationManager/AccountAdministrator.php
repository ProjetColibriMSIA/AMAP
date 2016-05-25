<?php

namespace AMAPBundle\Entity\ApplicationManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAdministrator
 *
 * @ORM\Table(name="account_administrator")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\ApplicationManager\AccountAdministratorRepository")
 */
class AccountAdministrator extends \AMAPBundle\Entity\Account\Account
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
