<?php

namespace projet1Bundle\Entity;

/**
 * Commentaire
 */
class Commentaire
{
    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var string
     */
    private $texte;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Commentaire
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Commentaire
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Commentaire
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
