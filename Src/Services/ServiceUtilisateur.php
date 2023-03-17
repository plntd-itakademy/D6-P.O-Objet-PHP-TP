<?php

namespace TP\Services;

use TP\Services\Interfaces\ServiceUtilisateurInterface;
use TP\Entities\Eleve;
use TP\Entities\Enseignant;

class ServiceUtilisateur implements ServiceUtilisateurInterface
{
    public function creerEnseignant($p_nom, $p_prenom, $p_email, $p_motDePasse, $p_numeroTelephone, $p_module): Enseignant
    {
        return new Enseignant($p_nom, $p_prenom, $p_email, $p_motDePasse, $p_numeroTelephone, $p_module);
    }

    public function afficherEnseignant($p_email)
    {
        $helperUtilisateur = new UtilisateurRepository;
        return $helperUtilisateur->getUtilisateurByEmail($p_email);
    }

    public function modifierEnseignant(Enseignant $p_enseignant, $p_nom, $p_prenom, $p_email, $p_motDePasse, $p_numeroTelephone, $p_module): Enseignant
    {
        $p_enseignant->setNom($p_nom);
        $p_enseignant->setPrenom($p_prenom);
        $p_enseignant->setEmail($p_email);
        $p_enseignant->setMotDePasse($p_motDePasse);
        $p_enseignant->setNumeroTelephone($p_numeroTelephone);
        $p_enseignant->setModule($p_module);

        return $p_enseignant;
    }

    public function supprimerEnseignant($p_email)
    {
        $helperUtilisateur = new UtilisateurRepository;
        $enseignant = $helperUtilisateur->getUtilisateurByEmail($p_email);
        if ($enseignant) {
            unset($enseignant);
        }
    }

    public function creerEleve($p_nom, $p_prenom, $p_email, $p_motDePasse): Eleve
    {
        return new Eleve($p_nom, $p_prenom, $p_email, $p_motDePasse);
    }

    public function afficherEleve($p_email)
    {
        $helperUtilisateur = new UtilisateurRepository;
        return $helperUtilisateur->getUtilisateurByEmail($p_email);
    }

    public function modifierEleve(Eleve $p_eleve, $p_nom, $p_prenom, $p_motDePasse, $p_email): Eleve
    {
        $p_eleve->setNom($p_nom);
        $p_eleve->setPrenom($p_prenom);
        $p_eleve->setEmail($p_email);
        $p_eleve->setMotDePasse($p_motDePasse);

        return $p_eleve;
    }

    public function supprimerEleve($p_email)
    {
        $helperUtilisateur = new UtilisateurRepository;
        $eleve = $helperUtilisateur->getUtilisateurByEmail($p_email);
        if ($eleve) {
            unset($eleve);
        }
    }
}
