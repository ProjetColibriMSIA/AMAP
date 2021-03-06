<?php

namespace AMAPBundle\Entity\Account;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\Group as BaseGroup;

/**
 * Group
 *
 * @ORM\Table(name="fos_group")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Account\GroupRepository")
 */
class Group extends BaseGroup {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\Account\User", inversedBy="groups")
     * @ORM\JoinTable(name="fos_user_group",
     *      joinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     *  )    
     */
    private $users;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\Basket\Basket", mappedBy="ownerConsumer")
     * @ORM\JoinTable(name="basket_consumer",
     *      joinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="basket_id", referencedColumnName="id")}
     * )
     */
    private $consumer;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\Basket\Basket", mappedBy="productBy")
     * @ORM\JoinTable(name="basket_farmer",
     *      joinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="basket_id", referencedColumnName="id")}
     * )
     */
    private $farmer;
    private $nbUsers;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    public function __toString() {
        return $this->getName();
    }

    public function getNbUsers() {
        return count($this->users);
    }
    public function __construct($name, $roles = array()) {
        parent::__construct($name, $roles);
        $this->users= new \Doctrine\Common\Collections\ArrayCollection();
        $this->consumer= new \Doctrine\Common\Collections\ArrayCollection();
        $this->farmer= new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Add consumer
     *
     * @param \AMAPBundle\Entity\Basket\Basket $consumer
     *
     * @return Group
     */
    public function addConsumer(\AMAPBundle\Entity\Basket\Basket $consumer) {
        $this->consumer[] = $consumer;
        
        return $this;
    }

    /**
     * Remove consumer
     *
     * @param \AMAPBundle\Entity\Basket\Basket $consumer
     */
    public function removeConsumer(\AMAPBundle\Entity\Basket\Basket $consumer) {
        $this->consumer->removeElement($consumer);
    }

    /**
     * Get consumer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConsumer() {
        return $this->consumer;
    }

    /**
     * Get farmer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFarmer() {
        return $this->farmer;
    }

    /**
     * Add farmer
     *
     * @param \AMAPBundle\Entity\Basket\Basket $farmer
     *
     * @return Group
     */
    public function addFarmer(\AMAPBundle\Entity\Basket\Basket $farmer)
    {
        $this->farmer[] = $farmer;

        return $this;
    }


    /**
     * Add user
     *
     * @param \AMAPBundle\Entity\Account\User $user
     *
     * @return Group
     */
    public function addUser(\AMAPBundle\Entity\Account\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AMAPBundle\Entity\Account\User $user
     */
    public function removeUser(\AMAPBundle\Entity\Account\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Remove farmer
     *
     * @param \AMAPBundle\Entity\Basket\Basket $farmer
     */
    public function removeFarmer(\AMAPBundle\Entity\Basket\Basket $farmer)
    {
        $this->farmer->removeElement($farmer);
    }
}
