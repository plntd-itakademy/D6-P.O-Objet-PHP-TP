<?php

namespace TP\Entities;

use TP\Services\ServiceHelper;

class Utilisateur
{
    protected $m_nom;
    protected $m_prenom;
    protected $m_email; // Email unique : identifiant d'un utilisateur
    protected $m_motDePasse;

    public function __construct($m_nom, $m_prenom, $m_email, $m_motDePasse)
    {
        $this->m_nom = $m_nom;
        $this->m_prenom = $m_prenom;
        $this->m_email = $m_email;
        $this->setMotDePasse($m_motDePasse);
    }

    public function getEmail(): string
    {
        return $this->m_email;
    }

    public function getMotDePasse(): string
    {
        return $this->m_motDePasse;
    }

    public function setNom(string $p_nom)
    {
        $this->m_nom = $p_nom;
    }

    public function setPrenom(string $p_prenom)
    {
        $this->m_prenom = $p_prenom;
    }

    public function setEmail(string $p_email)
    {
        $this->m_email = $p_email;
    }

    /**
     * Met à jour le mot de passe de l'utilisateur après l'avoir hashé.
     *
     * @param  string $motDePasse Mot de passe en clair
     * @return void
     */
    public function setMotDePasse(string $motDePasse)
    {
        $this->m_motDePasse = ServiceHelper::hasherMotDePasse($motDePasse);
    }

    /**
     * Affiche le nom de l'utilisateur en masjucule ainsi que son nom lorsque l'objet sera appelé.
     *
     * @return string
     */
    public function __toString(): string
    {
        return strtoupper($this->m_nom) . ' ' . $this->m_prenom;
    }
}
