<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 2 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2">Exercice 2</h1>
          <h4 class="text-white m-4 text-center">Créer une variable isEasy de type booléan et l'initialiser avec une valeur. Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!. Bonus : L'écrire de deux manières différentes.</h4>
        </div>
      </header>
      <p class="text-center">
        <?php
          $isEasy = true;
          if ($isEasy == true) {
            echo 'C\'est facile!!';
          } else {
            echo 'C\'est difficile!!';
          }
        ?>
      </p>
    </div>
  </body>
</html>
