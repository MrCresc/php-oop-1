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
      return '<hr>Nome: '.$this->name.'<br>Cognome: '
      .$this->surname.'<br>Anno di nascita: '
      .$thisYear.'<br>Nazionalità: '
      .$this->nationality.'<br>Indirizzo e-mail: '
      .$this->email.'<br><hr>';
    }
  };
?>
