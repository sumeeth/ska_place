<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageRepository")
 */
class Image
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="savedlocation", type="string", length=255)
     */
    private $savedlocation;

    /**
     * @var string
     *
     * @ORM\Column(name="lastmodifieddate", type="datetime", length=255)
     */
    private $lastmodifieddate;

    /**
     * @var string
     *
     * @ORM\Column(name="actualimage", type="blob", nullable=true)
     */
    private $actualimage;
    
    /**
     * @ORM\ManyToOne(targetEntity="Temple", inversedBy="images")
     * @ORM\JoinColumn(name="temple_id", referencedColumnName="id")
     */
    private $temple;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Image
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
     * Set type
     *
     * @param string $type
     * @return Image
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set savedlocation
     *
     * @param string $savedlocation
     * @return Image
     */
    public function setSavedlocation($savedlocation)
    {
        $this->savedlocation = $savedlocation;

        return $this;
    }

    /**
     * Get savedlocation
     *
     * @return string 
     */
    public function getSavedlocation()
    {
        return $this->savedlocation;
    }

    /**
     * Set lastmodifieddate
     *
     * @param string $lastmodifieddate
     * @return Image
     */
    public function setLastmodifieddate($lastmodifieddate)
    {
        $this->lastmodifieddate = $lastmodifieddate;

        return $this;
    }

    /**
     * Get lastmodifieddate
     *
     * @return string 
     */
    public function getLastmodifieddate()
    {
        return $this->lastmodifieddate;
    }

    /**
     * Set actualimage
     *
     * @param string $actualimage
     * @return Image
     */
    public function setActualimage($actualimage)
    {
        $this->actualimage = $actualimage;

        return $this;
    }

    /**
     * Get actualimage
     *
     * @return string 
     */
    public function getActualimage()
    {
        return $this->actualimage;
    }
}
