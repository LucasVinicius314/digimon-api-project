<?php

require_once './inc/config.php';
require_once './model/Digimon.php';

header('charset=utf-8');

$digimons = Digimon::ReadAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digimon</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery-3.4.1.min.js"></script>
  <script src="./js/bootstrap.js"></script>
</head>

<body>
  <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Digimon</span>
  </nav>
  <main class='container py-3'>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <h3>Digimons</h3>
            <button id="request" class="btn btn-primary">Request</button>
            <hr>
            <div class="row">
              <?php foreach ($digimons->data as $digimon) { ?>
                <div class="col-4">
                  <div class="card my-2">
                    <img src="<?= $digimon->img ?>" class="card-img-top" alt="<?= $digimon->name ?>">
                    <div class="card-body">
                      <h4><?= $digimon->name ?></h4>
                      <small><?= $digimon->level ?></small>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    <script>
      $(document).ready(() => {

        const {
          log
        } = console

        $('#request').on('click', () => {

          $.get('data.php')
            .then(log)
            .catch(log)

        })

      })
    </script>
  </main>
</body>

</html>