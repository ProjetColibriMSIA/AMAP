<?php

namespace AMAPBundle\Entity\Account;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Account
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Account\UserRepository")
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
     * @ORM\Column(name="name", type="string", length=50)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=50)
     */
    protected $firstName;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\Account\Group",mappedBy="users")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\AMAP\AMAP", mappedBy="users")
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
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=50)
     */
    protected $locale;

    /**
     * @var array contract_user
     * consumer + farmer
     * 
     * @ORM\ManyToOne(targetEntity="AMAPBundle\Entity\Account\Contract", inversedBy="users", cascade={"persist"})
     * @ORM\JoinColumn(name="contract_user_id", referencedColumnName="id")
     */
    protected $contract_user;

    public function __toString() {
        return $this->getUsername();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    public function __construct() {
        parent::__construct();
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
        $this->amap = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contract_user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
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
     * @return User
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
     * @return User
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
     * Set locale
     *
     * @param string $locale
     *
     * @return User
     */
    public function setLocale($locale) {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale() {
        return $this->locale;
    }

    /**
     * Add amap
     *
     * @param \AMAPBundle\Entity\AMAP\AMAP $amap
     *
     * @return User
     */
    public function addAmap(\AMAPBundle\Entity\AMAP\AMAP $amap) {
        $this->amap[] = $amap;

        return $this;
    }

    /**
     * Remove amap
     *
     * @param \AMAPBundle\Entity\AMAP\AMAP $amap
     */
    public function removeAmap(\AMAPBundle\Entity\AMAP\AMAP $amap) {
        $this->amap->removeElement($amap);
    }

    /**
     * Get amap
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAmap() {
        return $this->amap;
    }

    /**
     * Set contractUser
     *
     * @param \AMAPBundle\Entity\Account\Contract $contractUser
     *
     * @return User
     */
    public function setContractUser(\AMAPBundle\Entity\Account\Contract $contractUser = null) {
        $this->contract_user = $contractUser;

        return $this;
    }

    /**
     * Get contractUser
     *
     * @return \AMAPBundle\Entity\Account\Contract
     */
    public function getContractUser() {
        return $this->contract_user;
    }

}
