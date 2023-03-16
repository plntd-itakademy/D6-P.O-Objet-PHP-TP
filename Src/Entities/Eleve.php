<?php

namespace TP_Pierre_Louis\Entities;

require_once('Utilisateur.php');

class Eleve extends Utilisateur
{
    /**
     * Permet de créer un nouvel utilisateur avec les paramètres donnés.
     *
     * @param  string $nom
     * @param  string $prenom
     * @param  string $email
     * @param  string $motDePasse
     * @return Utilisateur Retourne un nouvel utilisateur.
     */
    public static function sInscrire(string $nom, string $prenom, string $email, string $motDePasse): Eleve
    {
        return new Eleve($nom, $prenom, $email, $motDePasse);
    }
}
