<?php

namespace TP_Pierre_Louis\Services;

use TP_Pierre_Louis\Services\Interfaces\ServiceUtilisateurInterface;
use TP_Pierre_Louis\Entities\Enseignant;

class ServiceUtilisateur implements ServiceUtilisateurInterface
{
    public function creerEnseignant($p_nom, $p_prenom, $p_email, $p_motDePasse, $p_numeroTelephone, $p_module): Enseignant
    {
        return new Enseignant($p_nom, $p_prenom, $p_email, $p_motDePasse, $p_numeroTelephone, $p_module);
    }

    public function afficherEnseignant($p_email)
    {
        return ServiceHelper::getUtilisateurByEmail($p_email);
    }

    public function modifierEnseignant(Enseignant $p_enseignant, $p_nom, $p_prenom, $p_motDePasse, $p_email)
    {
        $p_enseignant->setNom($p_nom);
        $p_enseignant->setPrenom($p_prenom);
        $p_enseignant->setMotDePasse($p_motDePasse);
        $p_enseignant->setEmail($p_email);
    }

    public function supprimerEnseignant($p_email)
    {
        $enseignant = ServiceHelper::getUtilisateurByEmail($p_email);
        if ($enseignant) {
            unset($enseignant);
        }
    }
}
