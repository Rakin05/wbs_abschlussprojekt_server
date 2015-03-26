<?php

namespace WBS\Fussball\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Verein
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WBS\Fussball\ApiBundle\Entity\VereinRepository")
 */
class Verein
{
    public function __construct()
    {
        $this->spieler = new ArrayCollection();
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="vereinsId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $vereinsId;

    /**
     * @var string
     *
     * @ORM\Column(name="vereinsName", type="string", length=255)
     */
    private $vereinsName;

    /**
     * @ORM\OneToMany(targetEntity="Spieler", mappedBy="verein")
     */
    private $spieler;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getVereinsId()
    {
        return $this->vereinsId;
    }

    /**
     * Set vereinsName
     *
     * @param string $vereinsName
     * @return Verein
     */
    public function setVereinsName($vereinsName)
    {
        $this->vereinsName = $vereinsName;

        return $this;
    }

    /**
     * Get vereinsName
     *
     * @return string 
     */
    public function getVereinsName()
    {
        return $this->vereinsName;
    }

    /**
     * Add Spieler
     *
     * @param Spieler
     * @return Verein
     */
    public function addSpieler($spieler)
    {
        $this->spieler->add($spieler);
    }
}
