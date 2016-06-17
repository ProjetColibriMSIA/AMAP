<?php

namespace AMAPBundle\Entity\Buying;

use Doctrine\ORM\Mapping as ORM;

/**
 * InternetPayment
 *
 * @ORM\Table(name="internet_payment")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Buying\InternetPaymentRepository")
 */
class InternetPayment extends Payment {

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
    public function getId() {
        return $this->id;
    }

    public function __toString() {
        return ((new \ReflectionClass($this))->getShortName() . ':' .strval($this->id));
    }

}
