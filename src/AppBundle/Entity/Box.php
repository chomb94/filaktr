<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BoxRepository")
 */
class Box
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ComicStrip")
     * @ORM\JoinColumn(name="cs_id", referencedColumnName="id")
     */
    protected $comicStrip;
    /**
     * @ORM\Column(type="integer")
     */
    protected $step;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Image")
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     */
    protected $image;
    /**
     * @ORM\Column(type="text")
     */
    protected $boxText;
    /**
     * @ORM\Column(type="integer")
     */
    protected $positionV;
    /**
     * @ORM\Column(type="integer")
     */
    protected $positionH;
    /**
     * @ORM\Column(type="integer")
     */
    protected $modeOfExpression;
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
     * Get comicStrip.
     *
     * @return ComicStrip
     */
    public function getComicStrip()
    {
        return $this->comicStrip;
    }

    /**
     * Set step.
     *
     * @param string $step
     *
     * @return Box
     */
    public function setStep($step)
    {
        $this->step = $step;

        return $this;
    }

    /**
     * Get step.
     *
     * @return string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
    /**
     * Set image.
     *
     * @param image $image
     *
     * @return Image
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set boxText.
     *
     * @param string $text
     *
     * @return Box
     */
    public function setBoxText($boxText)
    {
        $this->boxText = $boxText;

        return $this;
    }

    /**
     * Get boxText.
     *
     * @return string
     */
    public function getBoxText()
    {
        return $this->boxText;
    }

    /**
     * Set positionV.
     *
     * @param string $positionV
     *
     * @return Box
     */
    public function setPositionV($positionV)
    {
        $this->positionV = $positionV;

        return $this;
    }

    /**
     * Get positionV.
     *
     * @return string
     */
    public function getPositionV()
    {
        return $this->positionV;
    }

    /**
     * Set positionH.
     *
     * @param string $positionH
     *
     * @return Box
     */
    public function setPositionH($positionH)
    {
        $this->positionH = $positionH;

        return $this;
    }

    /**
     * Get positionH.
     *
     * @return string
     */
    public function getPositionH()
    {
        return $this->positionH;
    }

    /**
     * Set modeOfExpression.
     *
     * @param string $modeOfExpression
     *
     * @return Box
     */
    public function setModeOfExpression($modeOfExpression)
    {
        $this->modeOfExpression = $modeOfExpression;

        return $this;
    }

    /**
     * Get modeOfExpression.
     *
     * @return string
     */
    public function getModeOfExpression()
    {
        return $this->modeOfExpression;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Box
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
