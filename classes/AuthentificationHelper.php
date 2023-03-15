<?php

namespace TP_Pierre_Louis;

require_once('AuthentificationHelperInterface.php');

class AuthentificationHelper implements AuthentificationHelperInterface
{
    // Design pattern singleton
    private static $authentificationHelper = null;

    private function __construct()
    {
    }

    public static function getInstance(): AuthentificationHelper
    {
        if (Self::$authentificationHelper === null) {
            return new AuthentificationHelper;
        }
        return Self::$authentificationHelper;
    }

    public static function seConnecter($email, $motDePasse, $utilisateurs): mixed
    {
        // On récupère l'utilisateur qui correspond à l'email
        $utilisateur = Self::getUtilisateurByEmail($email, $utilisateurs);

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

    public static function getUtilisateurByEmail($email, $utilisateurs): mixed
    {
        // Pour chaque utilisateur parcouru, on vérifie si son email correspond à l'email demandée. Si elle correspond, on retourne l'utilisateur parcouru. Sinon, on retourne false
        foreach ($utilisateurs as $utilisateur) {
            if ($utilisateur->getEmail() === $email) return $utilisateur;
        }
        return false;
    }
}
