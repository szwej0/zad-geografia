<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cave
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class irak
{
    /**
     * @var integer
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
     * @ORM\Column(name="example", type="string", length=255)
     */
    private $length;
    
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
     * @return Cave
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
     * Set example
     *
     * @param string $example
     * @return Cave
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get example
     *
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }
}
