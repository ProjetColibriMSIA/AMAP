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
	* @var string
	* @ORM\Column(name="libelle", type="string", length=255)
	*/
	private $libelle;
	
	/**
	* @var string
	* @ORM\Column(name="libelle5", type="string", length=255)
	*/
	private $libelle5;
	
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return AccountProducer
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set libelle5
     *
     * @param string $libelle5
     *
     * @return AccountProducer
     */
    public function setLibelle5($libelle5)
    {
        $this->libelle5 = $libelle5;

        return $this;
    }

    /**
     * Get libelle5
     *
     * @return string
     */
    public function getLibelle5()
    {
        return $this->libelle5;
    }
}
