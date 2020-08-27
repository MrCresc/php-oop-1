<?php
  class User {
    public $name;
    public $surname;
    public $dateOfBirth;
    public $nationality;
    public $email;

    public function __construct($name,$surname,$dateOfBirth,$nationality,$email)
    {
      $this->name = $name;
      $this->surname = $surname;
      $this->dateOfBirth = $dateOfBirth;
      if (empty($nationality)) {
        $nationality = 'Campo nazionalità vuoto!';
      }
      $this->nationality = $nationality;
      if (empty($email)) {
        $email = 'Campo e-mail vuoto!';
      }
      $this->email = $email;

    }

    public function printInfo()
    {
      $thisDate = strtotime($this->dateOfBirth);
      $thisYear = date('Y',$thisDate);
      return '<hr><ul><li>Nome: '.$this->name.'</li><br><li>Cognome: '
      .$this->surname.'</li><br><li>Anno di nascita: '
      .$thisYear.'</li><br><li>Nazionalità: '
      .$this->nationality.'</li><br><li>Indirizzo e-mail: '
      .$this->email.'</li></ul><br><hr>';
    }
  };
?>
