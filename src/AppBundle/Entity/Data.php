<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Data
 *
 * @ORM\Table(name="data")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DataRepository")
 */
class Data
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
     * @var float
     *
     * @ORM\Column(name="value", type="float")
     */
    private $value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datatime", type="datetime")
     */
    private $datatime;


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
     * Set value
     *
     * @param float $value
     * @return Data
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return float 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set datatime
     *
     * @param \DateTime $datatime
     * @return Data
     */
    public function setDatatime($datatime)
    {
        $this->datatime = $datatime;

        return $this;
    }

    /**
     * Get datatime
     *
     * @return \DateTime 
     */
    public function getDatatime()
    {
        return $this->datatime;
    }
}
