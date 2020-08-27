<?php
  class Admin extends User {

    public function getNameAdmin($grade)
    {
      if ($grade === 1) {
        $nomenclature = 'CEO';
      } else if ($grade === 2) {
        $nomenclature = 'Amministratore Delegato';
      }
      return '<h2><strong>'.$this->name .' '.$this->surname . ' : '. $nomenclature.'</strong></h2>';
    }
  };
?>
