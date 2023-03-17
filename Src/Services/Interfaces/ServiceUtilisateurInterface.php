<?php

namespace TP\Services\Interfaces;

use TP\Entities\Enseignant;
use TP\Entities\Eleve;
use TP\Entities\Module;

require_once('../Src/Services/ServiceUtilisateurHelper.php');

interface ServiceUtilisateurInterface
{
    // CRUD enseignant
    public function creerEnseignant(string $p_nom, string $p_prenom, string $p_email, string $p_motDePasse, string $p_numeroTelephone, Module $p_module): Enseignant;
    public function afficherEnseignant(string $p_email): Enseignant;
    public function modifierEnseignant(Enseignant $p_enseignant, string $p_nom, string $p_prenom, string $p_email, string $p_motDePasse, string $p_numeroTelephone, Module $p_module): Enseignant;
    public function supprimerEnseignant(string $p_email): void;

    // CRUD élève
    public function creerEleve(string $p_nom, string $p_prenom, string $p_email, string $p_motDePasse): Eleve;
    public function afficherEleve(string $p_email): Eleve;
    public function modifierEleve(Eleve $p_eleve, string $p_nom, string $p_prenom, string $p_motDePasse, string $p_email): Eleve;
    public function supprimerEleve(string $p_email): void;
}
