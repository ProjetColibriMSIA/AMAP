<?php

namespace AMAPBundle\Entity\Account;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Account
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Account\AccountRepository")
 */
class User extends BaseUser {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    protected $firstName;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\Account\Group")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\AMAP\AMAP")
     * @ORM\JoinTable(name="fos_user_amap",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="amap_id", referencedColumnName="id")}
     * )
     */
    protected $amap;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="text")
     */
    protected $adress;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     *
     */
    public function __construct() {
        parent::__construct();
        // your own logic
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Account
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Account
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Account
     */
    public function setAdress($adress) {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress() {
        return $this->adress;
    }


    /**
     * Add amap
     *
     * @param \AMAPBundle\Entity\AMAP\AMAP $amap
     *
     * @return User
     */
    public function addAmap(\AMAPBundle\Entity\AMAP\AMAP $amap)
    {
        $this->amap[] = $amap;

        return $this;
    }

    /**
     * Remove amap
     *
     * @param \AMAPBundle\Entity\AMAP\AMAP $amap
     */
    public function removeAmap(\AMAPBundle\Entity\AMAP\AMAP $amap)
    {
        $this->amap->removeElement($amap);
    }

    /**
     * Get amap
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAmap()
    {
        return $this->amap;
    }
}
