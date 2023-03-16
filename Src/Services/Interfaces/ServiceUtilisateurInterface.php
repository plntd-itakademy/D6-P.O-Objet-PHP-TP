<?php

namespace TP_Pierre_Louis\Services\Interfaces;

use TP_Pierre_Louis\Entities\Enseignant;

require_once('../Src/Services/ServiceUtilisateurHelper.php');

interface ServiceUtilisateurInterface
{
    // CRUD enseignant
    public function creerEnseignant($p_nom, $p_prenom, $p_email, $p_motDePasse, $p_numeroTelephone, $p_module): Enseignant;
    public function afficherEnseignant($p_email);
    public function modifierEnseignant(Enseignant $p_enseignant, $p_nom, $p_prenom, $p_motDePasse, $p_email);
    public function supprimerEnseignant($p_email);
}
