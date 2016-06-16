<?php

namespace AMAPBundle\Entity\AMAP;

use Doctrine\ORM\Mapping as ORM;

/**
 * AMAP
 *
 * @ORM\Table(name="a_m_a_p")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\AMAP\AMAPRepository")
 */
class AMAP {

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
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255)
     */
    private $adress;

    /**
     * @var integer
     * 
     * Nombre de membre dans l'AMAP
     */
    private $nbMembers;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\Account\User", inversedBy="amap")
     * @ORM\JoinTable(name="fos_user_amap",
     *      joinColumns={@ORM\JoinColumn(name="amap_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     * )
     */
    private $users;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\Announcement\News", inversedBy="news_amap")
     * @ORM\JoinTable(name="news_amap",
     *      joinColumns={@ORM\JoinColumn(name="amap_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="news_id", referencedColumnName="id")}
     * )
     */
    protected $news;

    /**
     * consumer + farmer
     * 
     * @ORM\OneToMany(targetEntity="AMAPBundle\Entity\Account\Contract", mappedBy="amap")
     */
    private $contracts_amap;

    public function __toString() {
        return ((new \ReflectionClass($this))->getShortName() . ':' . $this->getName());
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get nbMembers
     *
     * @return int
     */
    public function getNbMembers() {
        return count($this->users);
    }

    /**
     * Add user
     *
     * @param \AMAPBundle\Entity\Account\User $user
     *
     * @return AMAP
     */
    public function addUser(\AMAPBundle\Entity\Account\User $user) {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AMAPBundle\Entity\Account\User $user
     */
    public function removeUser(\AMAPBundle\Entity\Account\User $user) {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers() {
        return $this->users;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return AMAP
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
     * Set adress
     *
     * @param string $adress
     *
     * @return AMAP
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
     * Add contractsAmap
     *
     * @param \AMAPBundle\Entity\Account\Contract $contractsAmap
     *
     * @return AMAP
     */
    public function addContractsAmap(\AMAPBundle\Entity\Account\Contract $contractsAmap) {
        $this->contracts_amap[] = $contractsAmap;

        return $this;
    }

    /**
     * Remove contractsAmap
     *
     * @param \AMAPBundle\Entity\Account\Contract $contractsAmap
     */
    public function removeContractsAmap(\AMAPBundle\Entity\Account\Contract $contractsAmap) {
        $this->contracts_amap->removeElement($contractsAmap);
    }

    /**
     * Get contractsAmap
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContractsAmap() {
        return $this->contracts_amap;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
        $this->news = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contracts_amap = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add news
     *
     * @param \AMAPBundle\Entity\Announcement\News $news
     *
     * @return AMAP
     */
    public function addNews(\AMAPBundle\Entity\Announcement\News $news) {
        $this->news[] = $news;

        return $this;
    }

    /**
     * Remove news
     *
     * @param \AMAPBundle\Entity\Announcement\News $news
     */
    public function removeNews(\AMAPBundle\Entity\Announcement\News $news) {
        $this->news->removeElement($news);
    }

    /**
     * Get news
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNews() {
        return $this->news;
    }

}
