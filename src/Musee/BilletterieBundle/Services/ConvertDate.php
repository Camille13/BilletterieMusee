<?php

// src/Musee/BilletterieBundle/Services/ConvertDate.php

namespace Musee\BilletterieBundle\Services;

class ConvertDate {

    public function dateEnTexte($date) {
        // Format de date texte
        setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
        return utf8_encode(strftime("%d %B %Y", strtotime($date)));
    }

}
