<?php

namespace AMAPBundle\Entity\Buying;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashPayment
 *
 * @ORM\Table(name="cash_payment")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Buying\CashPaymentRepository")
 */
class CashPayment extends Payment {

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
        return strval($this->id);
    }

}
