<?php
// Linko file php in cui è presente la regola della classe e relativa funzione
  require_once(__DIR__ . '/user.php');
  require_once(__DIR__ . '/admin.php');

  // Array contenente i dati degli amministratori
  $admins = [
    [
      'name' => 'Crescenzo',
      'surname' => 'De Martino',
      'dateOfBirth' => '1994-10-09',
      'nationality' => 'Italian',
      'email' => 'cresc@alice.it',
      'grade' => 1
    ],
    [
      'name' => 'Michael',
      'surname' => 'Schumacher',
      'dateOfBirth' => '1969-01-03',
      'nationality' => 'German',
      'grade' => 2
    ]
  ];
  
  // Array contenente i dati degli utenti
  $users = [
    [
      'name' => 'Sergio',
      'surname' => 'De Martino',
      'dateOfBirth' => '1997-11-29',
      'nationality' => 'American',
      'email' => 'Sergey@alice.it'
    ],
    [
      'name' => 'Mark',
      'surname' => 'Kram',
      'dateOfBirth' => '1980-01-01',
    ]
  ];

  // Ciclo che scrive a schermo i dati degli amministratori
    foreach ($admins as $admin) {
      $grade = $admin['grade'];
       // e crea nuove istanze grazie alla classe linkata nell'users.php
      $admin = new Admin($admin['name'],$admin['surname'],$admin['dateOfBirth'],$admin['nationality'],$admin['email']);
      echo $admin->getNameAdmin($grade);
      echo $admin->printInfo();
      // var_dump($admin);
    }
    // Ciclo che scrive a schermo i dati degli utenti
      foreach ($users as $user) {
         // e crea nuove istanze grazie alla classe linkata nell'users.php
        $user = new User($user['name'],$user['surname'],$user['dateOfBirth'],$user['nationality'],$user['email']);
        echo '<h3>Utente</h3>';
        echo $user->printInfo();
        // var_dump($user);
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
