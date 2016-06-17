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
     * @ORM\Column(name="phone", type="string", length=50)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="repIMG", type="text")
     */
    private $repIMG;

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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return AMAP
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set repIMG
     *
     * @param string $repIMG
     *
     * @return AMAP
     */
    public function setRepIMG($repIMG) {
        $this->repIMG = $repIMG;

        return $this;
    }

    /**
     * Get repIMG
     *
     * @return string
     */
    public function getRepIMG() {
        return $this->repIMG;
    }


    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return AMAP
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
}
