<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 5 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center shadow">
          <h1 class="text-white m-2 text-center">Exercice 5</h1>
          <h4 class="text-white m-4 text-center">Traduire ce code avec des if et des else :</h4>
        </div>
      </header>
      <p class="text-center">
        <?php
          $gender = 'homme';
          if ($gender != 'homme') {
            echo 'C\'est une développeuse !!!';
          } else {
            echo 'C\'est un développeur !!!';
          }
        ?>
      </p>
    </div>
  </body>
</html>
