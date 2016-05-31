<?php

namespace AMAPBundle\Entity\Consumer;

use Doctrine\ORM\Mapping as ORM;
/**
 * AccountConsumer
 *
 * @ORM\Table(name="account_consumer")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Consumer\AccountConsumerRepository")
 */
class AccountConsumer extends \AMAPBundle\Entity\Account\Account
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
     * @ORM\OneToOne(targetEntity="\AMAPBundle\Entity\Basket\Basket", mappedBy="ownerConsumer")
     */
    private $basketOwnedBy;
    
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
     * Set basketOwnedBy
     *
     * @param \AMAPBundle\Entity\Basket\Basket $basketOwnedBy
     *
     * @return AccountConsumer
     */
    public function setBasketOwnedBy(\AMAPBundle\Entity\Basket\Basket $basketOwnedBy = null)
    {
        $this->basketOwnedBy = $basketOwnedBy;

        return $this;
    }

    /**
     * Get basketOwnedBy
     *
     * @return \AMAPBundle\Entity\Basket\Basket
     */
    public function getBasketOwnedBy()
    {
        return $this->basketOwnedBy;
    }
}
