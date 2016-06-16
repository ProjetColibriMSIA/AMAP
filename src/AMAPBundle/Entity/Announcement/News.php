<?php

namespace AMAPBundle\Entity\Announcement;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Announcement\NewsRepository")
 */
class News {

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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="isDisplay", type="boolean")
     */
    private $isDisplay;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\AMAP\AMAP", mappedBy="news")
     * @ORM\JoinTable(name="news_amap",
     *      joinColumns={@ORM\JoinColumn(name="news_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="amap_id", referencedColumnName="id")}
     * )
     */
    protected $news_amap;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    public function __toString() {
        return ((new \ReflectionClass($this))->getShortName() . ':' . $this->getName());
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return News
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
     * Set description
     *
     * @param string $description
     *
     * @return News
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
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return News
     */
    public function setStartDate($startDate) {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate() {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return News
     */
    public function setEndDate($endDate) {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return $this->endDate;
    }

    /**
     * Set isDisplay
     *
     * @param boolean $isDisplay
     *
     * @return News
     */
    public function setIsDisplay($isDisplay) {
        $this->isDisplay = $isDisplay;

        return $this;
    }

    /**
     * Get isDisplay
     *
     * @return boolean
     */
    public function getIsDisplay() {
        return $this->isDisplay;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->news_amap = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add newsAmap
     *
     * @param \AMAPBundle\Entity\AMAP\AMAP $newsAmap
     *
     * @return News
     */
    public function addNewsAmap(\AMAPBundle\Entity\AMAP\AMAP $newsAmap) {
        $this->news_amap[] = $newsAmap;

        return $this;
    }

    /**
     * Remove newsAmap
     *
     * @param \AMAPBundle\Entity\AMAP\AMAP $newsAmap
     */
    public function removeNewsAmap(\AMAPBundle\Entity\AMAP\AMAP $newsAmap) {
        $this->news_amap->removeElement($newsAmap);
    }

    /**
     * Get newsAmap
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNewsAmap() {
        return $this->news_amap;
    }

}
