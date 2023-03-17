<?php

namespace TP\Services;

use TP\Entities\Eleve;
use TP\Entities\Enseignant;
use TP\Entities\Devoir;
use TP\Entities\DevoirRendu;
use TP\Entities\Promotion;

class CoursRepository
{
    /**
     * L'élève rend le travail donné par l'enseignant
     *
     * @param  Eleve $p_eleve L'étudiant qui rend son devoir
     * @param  float $p_note Par défaut 0 lorsque le devoir n'est pas encore noté
     * @param  string $p_contenu Le devoir rendu
     * @param  Devoir $p_devoirEnseignant Sujet du devoir
     * @return DevoirRendu Le devoir rendu
     */
    public function rendreDevoir(Eleve $p_eleve, float $p_note, string $p_contenu, Devoir $p_devoirEnseignant): DevoirRendu
    {
        return new DevoirRendu($p_eleve, $p_note, $p_contenu, $p_devoirEnseignant);
    }

    /**
     * L'enseignant dépose le devoir
     *
     * @param string $p_titre
     * @param string $p_contenu
     * @param integer $p_noteMax
     * @param string $p_deadline
     * @param Enseignant $p_enseignant
     * @return Devoir
     */
    public function deposerDevoir(string $p_titre, string $p_contenu, int $p_noteMax, string $p_deadline, Enseignant $p_enseignant, Promotion $p_promotion): Devoir
    {
        return new Devoir($p_titre, $p_contenu, $p_noteMax, $p_deadline, $p_enseignant, $p_promotion);
    }
}
