<?php
// Linko file php in cui è presente la regola della classe e relativa funzione
  require_once(__DIR__ . '/user.php');
  // Array contenente i dati degli utenti
  $users = [
    [
      'name' => 'Crescenzo',
      'surname' => 'De Martino',
      'dateOfBirth' => '1994-10-09',
      'nationality' => 'Italian',
      'email' => 'cresc@alice.it',
    ],
    [
      'name' => 'Mark',
      'surname' => 'Kram',
      'dateOfBirth' => '1980-01-01',
    ],
    [
      'name' => 'Michael',
      'surname' => 'Schumacher',
      'dateOfBirth' => '1969-01-03',
      'nationality' => 'German',
    ]
  ];
// Ciclo che scrive a schermo i dati degli utenti
  foreach ($users as $user) {
     // e crea nuove istanze grazie alla classe linkata nell'users.php
    $user = new User($user['name'],$user['surname'],$user['dateOfBirth'],$user['nationality'],$user['email']);
    echo $user->printInfo();
    var_dump($user);
  }

// Metodo di creazione senza la funzione __construct

  // $crescenzo = new User();
  // $crescenzo->name='Crescenzo';
  // $crescenzo->surname='De Martino';
  // $crescenzo->dateofbirth=date('1994-10-09');
  // $crescenzo->nationality='Italian';
  // $crescenzo->email='cresc@alice.it';
  // var_dump($crescenzo);
?>
