<?php

namespace AMAPBundle\Entity\Consumer;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountConsumer
 *
 * @ORM\Table(name="account_consumer")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\AccountConsumerRepository")
 */
class AccountConsumer
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
