<?php

namespace TP\Services;

use TP\Services\Interfaces\ServiceUtilisateurInterface;
use TP\Entities\Eleve;
use TP\Entities\Enseignant;
use TP\Entities\Module;

class ServiceUtilisateur implements ServiceUtilisateurInterface
{
    /**
     * Créer un enseignant
     *
     * @param string $p_nom
     * @param string $p_prenom
     * @param string $p_email
     * @param string $p_motDePasse
     * @param string $p_numeroTelephone
     * @param Module $p_module
     * @return Eleve L'enseignant créé
     */
    public function creerEnseignant(string $p_nom, string $p_prenom, string $p_email, string $p_motDePasse, string $p_numeroTelephone, Module $p_module): Enseignant
    {
        return new Enseignant($p_nom, $p_prenom, $p_email, $p_motDePasse, $p_numeroTelephone, $p_module);
    }

    /**
     * Obenir un enseignant
     *
     * @param string $p_email
     * @return Enseignant
     */
    public function afficherEnseignant(string $p_email): Enseignant
    {
        $helperUtilisateur = new UtilisateurRepository;
        return $helperUtilisateur->getUtilisateurByEmail($p_email);
    }

    /**
     * Modifier un enseignant
     *
     * @param Enseignant $p_enseignant
     * @param string $p_nom
     * @param string $p_prenom
     * @param string $p_email
     * @param string $p_motDePasse
     * @param string $p_numeroTelephone
     * @param Module $p_module
     * @return Enseignant L'enseignant modifié
     */
    public function modifierEnseignant(Enseignant $p_enseignant, string $p_nom, string $p_prenom, string $p_email, string $p_motDePasse, string $p_numeroTelephone, Module $p_module): Enseignant
    {
        // On modifie chaque attribut de l'objet enseignant par ceux passés en paramètre
        $p_enseignant->setNom($p_nom);
        $p_enseignant->setPrenom($p_prenom);
        $p_enseignant->setEmail($p_email);
        $p_enseignant->setMotDePasse($p_motDePasse);
        $p_enseignant->setNumeroTelephone($p_numeroTelephone);
        $p_enseignant->setModule($p_module);

        // On retourne l'objet modifié
        return $p_enseignant;
    }

    /**
     * Supprimer un enseignant
     *
     * @param string $p_email
     * @return void
     */
    public function supprimerEnseignant(string $p_email): void
    {
        $helperUtilisateur = new UtilisateurRepository;
        // On obtient l'utilisateur par son email
        $enseignant = $helperUtilisateur->getUtilisateurByEmail($p_email);
        // Si l'utilisateur existe, on le supprime
        if ($enseignant) {
            unset($enseignant);
        }
    }

    /**
     * Créer un élèveur
     *
     * @param string $p_nom
     * @param string $p_prenom
     * @param string $p_email
     * @param string $p_motDePasse
     * @return Eleve L'élève créé
     */
    public function creerEleve(string $p_nom, string $p_prenom, string $p_email, string $p_motDePasse): Eleve
    {
        return new Eleve($p_nom, $p_prenom, $p_email, $p_motDePasse);
    }

    /**
     * Obenir un élève
     *
     * @param string $p_email
     * @return Eleve
     */
    public function afficherEleve(string $p_email): Eleve
    {
        $helperUtilisateur = new UtilisateurRepository;
        return $helperUtilisateur->getUtilisateurByEmail($p_email);
    }

    /**
     * Modifier un élève
     *
     * @param Eleve $p_enseignant
     * @param string $p_nom
     * @param string $p_prenom
     * @param string $p_email
     * @param string $p_motDePasse
     * @return Eleve L'élève modifié
     */
    public function modifierEleve(Eleve $p_eleve, string $p_nom, string $p_prenom, string $p_motDePasse, string $p_email): Eleve
    {
        $p_eleve->setNom($p_nom);
        $p_eleve->setPrenom($p_prenom);
        $p_eleve->setEmail($p_email);
        $p_eleve->setMotDePasse($p_motDePasse);

        return $p_eleve;
    }

    /**
     * Supprimer un élève
     *
     * @param string $p_email
     * @return void
     */
    public function supprimerEleve(string $p_email): void
    {
        $helperUtilisateur = new UtilisateurRepository;
        $eleve = $helperUtilisateur->getUtilisateurByEmail($p_email);
        if ($eleve) {
            unset($eleve);
        }
    }
}
