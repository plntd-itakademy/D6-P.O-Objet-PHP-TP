<?php

namespace TP_Pierre_Louis;

class Utilisateur
{
    protected $nom;
    protected $prenom;
    protected $email;
    protected $motDePasse;

    private function __construct($nom, $prenom, $email, $motDePasse)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->motDePasse = password_hash($motDePasse, PASSWORD_DEFAULT);
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
