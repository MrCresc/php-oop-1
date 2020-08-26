<?php
// Linko file php in cui è presente la regola della classe e relativa funzione
  require_once(__DIR__ . '/users.php');
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
      'name' => 'Michael',
      'surname' => 'Schumacher',
      'dateOfBirth' => '1969-01-03',
      'nationality' => 'German',
    ]
  ];
// Ciclo che scrive a schermo i dati degli utenti
  foreach ($users as $user) {
    $dataNascita= strtotime($user['dateOfBirth']);
    echo '<hr>Nome: '.$user['name'].'<br>Cognome: '
    .$user['surname'].'<br>Anno di nascita: '
    .date('Y', $dataNascita).'<br>Nazionalità: '
    .$user['nationality'].'<br>Indirizzo e-mail: '
    .$user['email'].'<br><hr>';
     // e crea nuove istanze grazie alla classe linkata nell'users.php
    $user = new User($user['name'],$user['surname'],date('d/M/Y', $dataNascita),$user['nationality'],$user['email']);
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
