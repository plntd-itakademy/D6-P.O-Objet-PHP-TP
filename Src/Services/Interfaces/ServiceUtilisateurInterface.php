<?php

namespace TP\Services\Interfaces;

use TP\Entities\Enseignant;
use TP\Entities\Eleve;

require_once('../Src/Services/ServiceUtilisateurHelper.php');

interface ServiceUtilisateurInterface
{
    // CRUD enseignant
    public function creerEnseignant($p_nom, $p_prenom, $p_email, $p_motDePasse, $p_numeroTelephone, $p_module): Enseignant;
    public function afficherEnseignant($p_email);
    public function modifierEnseignant(Enseignant $p_enseignant, $p_nom, $p_prenom, $p_email, $p_motDePasse, $p_numeroTelephone, $p_module): Enseignant;
    public function supprimerEnseignant($p_email);

    // CRUD élève
    public function creerEleve($p_nom, $p_prenom, $p_email, $p_motDePasse): Eleve;
    public function afficherEleve($p_email);
    public function modifierEleve(Eleve $p_eleve, $p_nom, $p_prenom, $p_motDePasse, $p_email): Eleve;
    public function supprimerEleve($p_email);
}
