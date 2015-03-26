<?php

namespace WBS\Fussball\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spieler
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WBS\Fussball\ApiBundle\Entity\SpielerRepository")
 */
class Spieler
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
     * @ORM\Column(name="spielerName", type="string", length=255)
     */
    private $spielerName;


    /**
     * @var Verein
     *
     * @ORM\ManyToOne(targetEntity="Verein", inversedBy="spieler")
     * @ORM\JoinColumn(name="vereins_id", referencedColumnName="vereinsId")
     */
    private $verein;
    
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
     * Set spielerName
     *
     * @param string $spielerName
     * @return Spieler
     */
    public function setSpielerName($spielerName)
    {
        $this->spielerName = $spielerName;

        return $this;
    }

    /**
     * Get spielerName
     *
     * @return string 
     */
    public function getSpielerName()
    {
        return $this->spielerName;
    }

    /**
     * Set Verein
     * @param Verein
     * @return Spieler
     */
    public function setVerein($verein)
    {
        $this->verein = $verein;

        return $this;
    }
}
