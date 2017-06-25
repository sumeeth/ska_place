<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LocationRepository")
 */
class Location
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
     * @ORM\Column(name="roadNumber", type="string", length=255, nullable=true)
     */
    private $roadNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="roadName", type="string", length=255, nullable=true)
     */
    private $roadName;

    /**
     * @var string
     *
     * @ORM\Column(name="suburb", type="string", length=255, nullable=true)
     */
    private $suburb;

    /**
     * @var string
     *
     * @ORM\Column(name="village", type="string", length=255, nullable=true)
     */
    private $village;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;


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
     * Set roadNumber
     *
     * @param string $roadNumber
     * @return Location
     */
    public function setRoadNumber($roadNumber)
    {
        $this->roadNumber = $roadNumber;

        return $this;
    }

    /**
     * Get roadNumber
     *
     * @return string 
     */
    public function getRoadNumber()
    {
        return $this->roadNumber;
    }

    /**
     * Set roadName
     *
     * @param string $roadName
     * @return Location
     */
    public function setRoadName($roadName)
    {
        $this->roadName = $roadName;

        return $this;
    }

    /**
     * Get roadName
     *
     * @return string 
     */
    public function getRoadName()
    {
        return $this->roadName;
    }

    /**
     * Set suburb
     *
     * @param string $suburb
     * @return Location
     */
    public function setSuburb($suburb)
    {
        $this->suburb = $suburb;

        return $this;
    }

    /**
     * Get suburb
     *
     * @return string 
     */
    public function getSuburb()
    {
        return $this->suburb;
    }

    /**
     * Set village
     *
     * @param string $village
     * @return Location
     */
    public function setVillage($village)
    {
        $this->village = $village;

        return $this;
    }

    /**
     * Get village
     *
     * @return string 
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Location
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }
}
