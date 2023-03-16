<?php

namespace TP_Pierre_Louis\Entities;

require_once('Utilisateur.php');

class Enseignant extends Utilisateur
{
    protected $m_numeroTelephone;
    protected $m_module;

    public function setNumeroTelephone(string $p_numeroTelephone)
    {
        $this->m_numeroTelephone = $p_numeroTelephone;
    }

    public function setModule(string $p_module)
    {
        $this->m_module = $p_module;
    }

    /**
     * Permet de créer un nouvel utilisateur avec les paramètres donnés.
     *
     * @param  string $nom
     * @param  string $prenom
     * @param  string $email
     * @param  string $motDePasse
     * @return Utilisateur Retourne un nouvel utilisateur.
     */
    public static function sInscrire(string $nom, string $prenom, string $email, string $motDePasse, string $numeroTelephone, string $module): Enseignant
    {
        return new Enseignant($nom, $prenom, $email, $motDePasse, $numeroTelephone, $module);
    }
}
