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
              <?php if(isset($_POST['gender']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['cv'])){ // Si la variable a été déclarée et qu'elle n'est pas vide
                  echo 'Bonjour, ' . $_POST['gender'] . ' ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ' au CV ' . $_POST['cv']; // On affiche le contenu des variables.
                  } else {
              ?>
              <div class="row">
                <div class="col-md-4">
                    <form action="index.php" method="POST" class="form-group" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="gender"> Civilité :</label>
                          <select class="form-control" name="gender">
                              <option value="Monsieur">Monsieur</option>
                              <option value="Madame">Madame</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="lastName">Nom :</label>
                          <input class="form-control" type="text" name="lastName"></label>
                      </div>
                      <div class="form-group">
                          <label for="firstName">Prénom :</label>
                          <input class="form-control" type="text" name="firstName"></label>
                      </div>
                      <!-- Avec le accept=".pdf", l'utilisateur n'aura que ses fichiers .pdf qui lui seront disponibles lors de sa recherche dans ses dossiers. -->
                      <div class="form-group">
                          <label for="cv">CV (au format pdf) :</label>
                          <input class="form-control" type="file" name="cv" accept=".pdf">
                      </div>
                      <button type="submit" class="btn btn-success font-weight-bold">Valider</button>
                    </form>
                </div>
              </div>
              <p class="text-danger font-weight-bold">
                <?php
                    echo 'Veuillez remplir les informations ci-dessus.';
                   }
                ?>
              </p>
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
