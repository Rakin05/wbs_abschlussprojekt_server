<?php

namespace WBS\Fussball\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spiel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WBS\Fussball\ApiBundle\Entity\SpielRepository")
 */
class Spiel
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
     * @var Verein
     * @ORM\ManyToOne(targetEntity="Verein")
     * @ORM\JoinColumn(name="heim_verein_id", referencedColumnName="vereinsId")
     */
    private $heimVerein;

    /**
     * @var Verein
     * @ORM\ManyToOne(targetEntity="Verein")
     * @ORM\JoinColumn(name="gast_verein_id", referencedColumnName="vereinsId")
     */
    private $gastVerein;
    
    /**
     * @var LigaSaison
     * @ORM\ManyToOne(targetEntity="LigaSaison")
     * @ORM\JoinColumn(name="liga_saison_id", referencedColumnName="liga_saison_id")
     */
    private $ligaSaison;

    /**
     * @var integer
     *
     * @ORM\Column(name="heimTore", type="integer")
     */
    private $heimTore;

    /**
     * @var integer
     *
     * @ORM\Column(name="gastTore", type="integer")
     */
    private $gastTore;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="spielTag", type="date")
     */
    private $spielTag;


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
     * Set heimTore
     *
     * @param integer $heimTore
     * @return Spiel
     */
    public function setHeimTore($heimTore)
    {
        $this->heimTore = $heimTore;

        return $this;
    }

    /**
     * Get heimTore
     *
     * @return integer 
     */
    public function getHeimTore()
    {
        return $this->heimTore;
    }

    /**
     * Set gastTore
     *
     * @param integer $gastTore
     * @return Spiel
     */
    public function setGastTore($gastTore)
    {
        $this->gastTore = $gastTore;

        return $this;
    }

    /**
     * Get gastTore
     *
     * @return integer 
     */
    public function getGastTore()
    {
        return $this->gastTore;
    }

    /**
     * Set spielTag
     *
     * @param \DateTime $spielTag
     * @return Spiel
     */
    public function setSpielTag($spielTag)
    {
        $this->spielTag = $spielTag;

        return $this;
    }

    /**
     * Get spielTag
     *
     * @return \DateTime 
     */
    public function getSpielTag()
    {
        return $this->spielTag;
    }

    /**
     * Set heimVerein
     *
     * @param \WBS\Fussball\ApiBundle\Entity\Verein $heimVerein
     * @return Spiel
     */
    public function setHeimVerein(\WBS\Fussball\ApiBundle\Entity\Verein $heimVerein = null)
    {
        $this->heimVerein = $heimVerein;

        return $this;
    }

    /**
     * Get heimVerein
     *
     * @return \WBS\Fussball\ApiBundle\Entity\Verein 
     */
    public function getHeimVerein()
    {
        return $this->heimVerein;
    }

    /**
     * Set gastVerein
     *
     * @param \WBS\Fussball\ApiBundle\Entity\Verein $gastVerein
     * @return Spiel
     */
    public function setGastVerein(\WBS\Fussball\ApiBundle\Entity\Verein $gastVerein = null)
    {
        $this->gastVerein = $gastVerein;

        return $this;
    }

    /**
     * Get gastVerein
     *
     * @return \WBS\Fussball\ApiBundle\Entity\Verein 
     */
    public function getGastVerein()
    {
        return $this->gastVerein;
    }

    /**
     * Set ligaSaison
     *
     * @param \WBS\Fussball\ApiBundle\Entity\LigaSaison $ligaSaison
     * @return Spiel
     */
    public function setLigaSaison(\WBS\Fussball\ApiBundle\Entity\LigaSaison $ligaSaison = null)
    {
        $this->ligaSaison = $ligaSaison;

        return $this;
    }

    /**
     * Get ligaSaison
     *
     * @return \WBS\Fussball\ApiBundle\Entity\LigaSaison 
     */
    public function getLigaSaison()
    {
        return $this->ligaSaison;
    }
}
