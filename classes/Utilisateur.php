<?php

namespace TP_Pierre_Louis;

require_once('ServiceHelperInterface.php');

class Utilisateur
{
    protected $m_helper;
    protected $nom;
    protected $prenom;
    protected $email;
    protected $motDePasse;

    private function __construct($nom, $prenom, $email, $motDePasse)
    {
        $this->m_helper = ServiceHelper::getInstance();
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->motDePasse = $this->m_helper->hasherMotDePasse($motDePasse);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getMotDePasse(): string
    {
        return $this->motDePasse;
    }

    public static function sInscrire($nom, $prenom, $email, $motDePasse): Utilisateur
    {
        return new Utilisateur($nom, $prenom, $email, $motDePasse);
    }
}
