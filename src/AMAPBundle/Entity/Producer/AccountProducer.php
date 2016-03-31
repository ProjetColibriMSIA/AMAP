<?php

namespace AMAPBundle\Entity\Producer;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountProducer
 *
 * @ORM\Table(name="account_producer")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\AccountProducerRepository")
 */
class AccountProducer
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
