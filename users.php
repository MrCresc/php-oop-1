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
      $this->nationality = $nationality;
      $this->email = $email;
    }
  };
?>
