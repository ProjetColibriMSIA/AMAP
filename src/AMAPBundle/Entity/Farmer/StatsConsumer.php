<?php

namespace AMAPBundle\Entity\Farmer;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatsConsumer
 *
 * @ORM\Table(name="stats_consumer")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Farmer\StatsConsumerRepository")
 */
class StatsConsumer
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
