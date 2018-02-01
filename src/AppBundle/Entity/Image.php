<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageRepository")
 */
class Image
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $filename;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $category;
    /**
     * @ORM\ManyToOne(targetEntity="BaseBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $active = true;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $private = false;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $date;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set comicStrip.
     *
     * @param comicStrip $comicStrip
     *
     * @return ComicStrip
     */
    public function setComicStrip($comicStrip)
    {
        $this->comicStrip = $comicStrip;

        return $this;
    }

    /**
     * Set fileName.
     *
     * @param string $text
     *
     * @return Image
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName.
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set category.
     *
     * @param string $text
     *
     * @return Image
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

   /**
     * Set user.
     *
     * @param User $user
     *
     * @return ComicStrip
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @Assert\Callback
     */
    public function setPrivate($private)
    {
        $this->private = $private;
    }

    public function isPrivate()
    {
        return $this->private;
    }

    /**
     * @Assert\Callback
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    public function isActive()
    {
        return $this->active;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Image
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \date
     */
    public function getDate()
    {
        return $this->date;
    }
}
