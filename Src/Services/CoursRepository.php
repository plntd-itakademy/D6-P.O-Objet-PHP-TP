<?php

namespace TP_Pierre_Louis\Services;

class CoursRepository
{
    public function rendreDevoir(Etudiant $p_etudiant, $p_note, $p_contenu, $p_devoirProf)
    {
        $devoirRendu = new DevoirRendu($p_etudiant, 0, $p_contenu, $p_devoirProf);
    }
}
