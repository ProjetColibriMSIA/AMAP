<?php

namespace AMAPBundle\Entity\Admin;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Admin\CategoryRepository")
 */
class Category
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
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
    * @ORM\OneToMany(targetEntity="BlogPost", mappedBy="category")
    */
    private $blogPosts;
    
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
     * Constructor
     */
    public function __construct()
    {
        $this->blogPosts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add blogPost
     *
     * @param \AMAPBundle\Entity\Admin\BlogPost $blogPost
     *
     * @return Category
     */
    public function addBlogPost(\AMAPBundle\Entity\Admin\BlogPost $blogPost)
    {
        $this->blogPosts[] = $blogPost;

        return $this;
    }

    /**
     * Remove blogPost
     *
     * @param \AMAPBundle\Entity\Admin\BlogPost $blogPost
     */
    public function removeBlogPost(\AMAPBundle\Entity\Admin\BlogPost $blogPost)
    {
        $this->blogPosts->removeElement($blogPost);
    }

    /**
     * Get blogPosts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBlogPosts()
    {
        return $this->blogPosts;
    }
}
