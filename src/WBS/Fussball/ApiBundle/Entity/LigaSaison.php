<?php

namespace WBS\Fussball\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigaSaison
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WBS\Fussball\ApiBundle\Entity\LigaSaisonRepository")
 */
class LigaSaison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="liga_saison_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $ligaSaisonId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="liga_beginn", type="date")
     */
    private $ligaBeginn;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="liga_ende", type="date")
     */
    private $ligaEnde;


    /**
     * @ORM\ManyToOne(targetEntity="Liga")
     * @ORM\JoinColumn(name="liga_id", referencedColumnName="liga_id")
     */
    private $liga;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->ligaSaisonId;
    }

    /**
     * Set ligaBeginn
     *
     * @param \DateTime $ligaBeginn
     * @return LigaSaison
     */
    public function setLigaBeginn($ligaBeginn)
    {
        $this->ligaBeginn = $ligaBeginn;

        return $this;
    }

    /**
     * Get ligaBeginn
     *
     * @return \DateTime 
     */
    public function getLigaBeginn()
    {
        return $this->ligaBeginn;
    }

    /**
     * Set ligaEnde
     *
     * @param \DateTime $ligaEnde
     * @return LigaSaison
     */
    public function setLigaEnde($ligaEnde)
    {
        $this->ligaEnde = $ligaEnde;

        return $this;
    }

    /**
     * Get ligaEnde
     *
     * @return \DateTime 
     */
    public function getLigaEnde()
    {
        return $this->ligaEnde;
    }

    /**
     * Set liga
     *
     * @param WBS\Fussball\ApiBundle\Entity\Liga;
     * @return LigaSaison
     */
    public function setLiga(Liga $liga)
    {
        $this->liga = $liga;

        return $this;
    }

    /**
     * Get Liga
     *
     * @return \WBS\Fussball\ApiBundle\Entity\Liga;
     */
    public function getLiga()
    {
        return $this->liga;
    }
}
