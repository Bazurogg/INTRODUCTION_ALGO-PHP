<!-- 17/02/2023 -->


<?php

Class Ordinateur{
    private $_marque;
    private $_modele;
    private $_ecran;
    private $_statut = 0;
    public function allumer(){
    $this->_statut = 1;
    }
}

$poste = new Ordinateur();
$poste->allumer();

?>