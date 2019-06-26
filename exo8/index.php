<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 8</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 7 - Exercice 8</h1>
                <p class="lead">Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent,
                vérifier que le fichier transmis est bien un fichier pdf.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
              if (!empty($_POST['gender']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])) {
                  var_dump($_FILES['myFile']);
                  if (isset($_FILES['myFile']) && $_FILES['myFile']['error'] === 0) {
                      $path = pathinfo($_FILES['myFile']['name']);
                      if ($path['extension'] == 'pdf') {
                          echo 'bonjour ' . $_POST['gender'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . '. Vous avez envoyé le fichier ' . $path['basename'];
                          move_uploaded_file($_FILES['myFile']['tmp_name'], 'upload/toto.' . $path['extension']);
                      } else {
                          echo 'Veuillez utiliser la bonne extension.';
                      }
                  }
              } else { ?>
              <div class="row">
                <div class="col-7 col-sm-6 col-md-5 col-lg-4">
                    <form class="text-center" method="post" action="index.php" enctype="multipart/form-data">
                      <div class="form-group">
                          <select name="gender" class="form-control">
                            <option value="Mr">Mr</option> 
                            <option value="Mme" selected>Mme</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <input name="lastname" type="text" placeholder="Nom" class="form-control"/>
                      </div>
                      <div class="form-group">
                          <input name="firstname" type="text" placeholder="Prénom" class="form-control"/>
                      </div>
                      <div class="form-group">
                         <input type="file" name="myFile" class="form-control"/>
                      </div>
                      <div class="form-group">
                          <input type="submit" value="Valider" accept=".html" class="form-control"/>
                      </div>
                    </form>
                </div>
              </div>
            <?php } ?>
          </main>
          <!-- footer -->
          <footer>

          </footer>
      </div>
      <!-- scripts JQuery, Popper, Angular et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
  </body>
</html>
