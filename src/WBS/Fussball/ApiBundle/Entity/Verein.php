<?php

namespace WBS\Fussball\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Verein
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WBS\Fussball\ApiBundle\Entity\VereinRepository")
 */
class Verein
{
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
}
