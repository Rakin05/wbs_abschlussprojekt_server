<?php

namespace WBS\Fussball\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liga
 *
 * @ORM\Table(name="Ligen")
 * @ORM\Entity(repositoryClass="WBS\Fussball\ApiBundle\Entity\LigaRepository")
 */
class Liga
{
    /**
     * @var integer
     *
     * @ORM\Column(name="liga_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="liga_name", type="string", length=100, nullable=false)
     */
    private $ligaName;

    /**
     * @var string
     *
     * @ORM\Column(name="liga_land", type="string", length=100, nullable=true)
     */
    private $ligaLand;


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
     * Set ligaName
     *
     * @param string $ligaName
     * @return Liga
     */
    public function setLigaName($ligaName)
    {
        $this->ligaName = $ligaName;

        return $this;
    }

    /**
     * Get ligaName
     *
     * @return string 
     */
    public function getLigaName()
    {
        return $this->ligaName;
    }

    /**
     * Set ligaLand
     *
     * @param string $ligaLand
     * @return Liga
     */
    public function setLigaLand($ligaLand)
    {
        $this->ligaLand = $ligaLand;

        return $this;
    }

    /**
     * Get ligaLand
     *
     * @return string 
     */
    public function getLigaLand()
    {
        return $this->ligaLand;
    }
}
