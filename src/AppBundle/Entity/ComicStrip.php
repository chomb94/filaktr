<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ComicStripRepository")
 */
class ComicStrip
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
    protected $title;
    /**
     * @ORM\ManyToOne(targetEntity="BaseBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $date;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $active = true;


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
     * Set title.
     *
     * @param string $title
     *
     * @return ComicStrip
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return ComicStrip
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
    public function setActive($active)
    {
        $this->active = $active;
    }

    public function isActive()
    {
        return $this->active;
    }


}
