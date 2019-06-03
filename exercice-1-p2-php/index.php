<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 1 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2">Exercice 1</h1>
          <h4 class="text-white m-4 text-center">Créer une variable age et l'initialiser avec une valeur. Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</h4>
        </div>
      </header>
      <p class="text-center">
        <?php
          $age = 22;
          if ($age >= 18) {
            echo 'Vous ête majeur';
          } else {
            echo 'Vous ête mineur';
          }
        ?>
      </p>
    </div>
  </body>
</html>
