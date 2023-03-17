<?php

namespace TP\Services;

use TP\Test\Classes\TestProjet;

class UtilisateurRepository
{
    /**
     * Vérifie si le login correspond à un mot de passe
     *
     * @param  string $login
     * @param  string $motDePasse
     * @param  array $utilisateurs
     * @return mixed Retourne l'utilisateur si le login corresond au mot de passe, sinon retourn false.
     */
    public static function seConnecter(string $login, string $motDePasse): mixed
    {
        // On récupère l'utilisateur qui correspond à l'email
        $utilisateur = Self::getUtilisateurByEmail($login);

        // On vérifie si on a bien récupéré un utilisateur et si le mot de passe de l'utilisateur correspond au mot de passe hashé
        if ($utilisateur && password_verify(
            $motDePasse,
            $utilisateur->getMotDePasse()
        )) {
            return $utilisateur;
        } else {
            return false;
        }
    }

    /**
     * Obtenir un utilisateur à partir d'un email
     *
     * @param  string $email
     * @param  array $utilisateurs
     * @return mixed Retourne l'utilisateur si trouvé, retourne false si non trouvé.
     */
    public static function getUtilisateurByEmail(string $email): mixed
    {
        $testProjet = TestProjet::getInstance();
        $testProjet->initData();
        $utilisateurs = $testProjet->getUtilisateurs();

        // Pour chaque utilisateur parcouru, on vérifie si son email correspond à l'email demandée. Si elle correspond, on retourne l'utilisateur parcouru. Sinon, on retourne false
        foreach ($utilisateurs as $utilisateur) {
            if ($utilisateur->getEmail() === $email) return $utilisateur;
        }
        return false;
    }
}
