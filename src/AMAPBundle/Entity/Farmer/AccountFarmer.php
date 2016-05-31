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
     * @var Arraycollection
     *
     * @ORM\OneToOne(targetEntity="\AMAPBundle\Entity\Basket\Basket", mappedBy="productBy")
     */
    private $basketMakeBy;
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
     * Set basketMakeBy
     *
     * @param \AMAPBundle\Entity\Basket\Basket $basketMakeBy
     *
     * @return AccountFarmer
     */
    public function setBasketMakeBy(\AMAPBundle\Entity\Basket\Basket $basketMakeBy = null)
    {
        $this->basketMakeBy = $basketMakeBy;

        return $this;
    }

    /**
     * Get basketMakeBy
     *
     * @return \AMAPBundle\Entity\Basket\Basket
     */
    public function getBasketMakeBy()
    {
        return $this->basketMakeBy;
    }
}
