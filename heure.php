<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of heure
 *
 * @author ludosky
 */
class heure {
    private $heures;
    private $minutes;
    private $secondes;
    public function afficher()
    {
        echo $this->heures;
    }
    public function getHeures() {
        return $this->heures;
    }

    public function getMinutes() {
        return $this->minutes;
    }

    public function getSecondes() {
        return $this->secondes;
    }

    public function setHeures($heures) {
        $this->heures = $heures;
    }

    public function setMinutes($minutes) {
        $this->minutes = $minutes;
    }

    public function setSecondes($secondes) {
    
        $this->secondes = $secondes;
    }

    //put your code here
}

?>
