<?php

namespace AMAPBundle\Entity\SupplyManager;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountSupplyManager
 *
 * @ORM\Table(name="account_supply_manager")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\SupplyManager\AccountSupplyManagerRepository")
 */
class AccountSupplyManager extends \AMAPBundle\Entity\Account\Account {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int[]
     * 
     * @ORM\Column(name="idAMAP", type="array")
     */
    private $idAMAP;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set idAMAP
     *
     * @param array $idAMAP
     *
     * @return AccountSupplyManager
     */
    public function setIdAMAP($idAMAP)
    {
        $this->idAMAP = $idAMAP;

        return $this;
    }

    /**
     * Get idAMAP
     *
     * @return array
     */
    public function getIdAMAP()
    {
        return $this->idAMAP;
    }
}
