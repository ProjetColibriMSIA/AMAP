<?php

namespace AMAPBundle\Entity\Account;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\Group as BaseGroup;
/**
 * Group
 *
 * @ORM\Table(name="fos_group")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Account\GroupRepository")
 */
class Group extends BaseGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected  $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    public function __construct($name, $roles = array()) {
        parent::__construct($name, $roles);
    }
}
