<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 7</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 7 - Exercice 7</h1>
                <p class="lead">Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier.
                    Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
              <?php if(!empty($_POST['gender']) && !empty($_POST['firstName']) && !empty($_POST['lastName'])){ // Si la variable a été déclarée et qu'elle n'est pas vide
                  var_dump($_FILES);
                  echo 'Bonjour, ' . $_POST['gender'] . ' ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ' au CV ' . $_POST['cv']; // On affiche le contenu des variables.
                  } else {
              ?>
              <form enctype="multipart/form-data" action="index.php" method="POST">
                <div class="form-group">
                    <label for="gender"> Civilité :</label>
                    <select class="form-control" name="gender">
                        <option value="Monsieur">Monsieur</option>
                        <option value="Madame">Madame</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="lastName">Nom :</label>
                    <input class="form-control" type="text" name="lastName">
                </div>
                <div class="form-group">
                    <label for="firstName">Prénom :</label> 
                    <input class="form-control" type="text" name="firstName">
                </div>
                <!-- On ajoute un champs d'envoi de fichier avec le input type="file" -->
                <div class="form-group">
                    <label for="CV">CV (au format pdf) :</label> 
                    <input class="form-control" type="file" name="cv">
                </div>
                <button type="submit" class="btn btn-success font-weight-bold">Valider</button>
              </form>
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
