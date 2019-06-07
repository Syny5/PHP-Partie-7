<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 5</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 7 - Exercice 5</h1>
                <p class="lead">
                    <p>Créer un formulaire sur la page index.php avec :</p>
                    <ul>
                        <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
                        <li>Un champ texte pour le nom</li>
                        <li>Un champ texte pour le prénom</li>
                    </ul>
                    <p>Ce formulaire doit rediriger vers la page index.php.
                    Vous avez le choix de la méthode.</p>
                </p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
              <!-- On renvoie le formulaire vers la page "user.php" avec la méthode POST -->
              <form action="index.php" method="POST">
                <!-- On ajoute une liste déroulant avec la balise HTML select suivi des options. -->
                <label> Civilité :
                    <select class="form-control" name="gender">
                        <option value="Monsieur">Monsieur</option>
                        <option value="Madame">Madame</option>
                    </select>
                </label>
                <p><label>Nom : <input type="text" name="lastName" class="form-control"></label></p>
                <p><label>Prénom : <input type="text" name="firstName" class="form-control"></label></p>
                <p><button type="submit" class="btn btn-success font-weight-bold">Valider</button></p>
              </form>
              <?php if(isset($_POST['gender']) && (isset($_POST['firstName']) && (isset($_POST['lastName'])))){
                  echo 'Bonjour, ' . $_POST['gender'] . ' ' . $_POST['firstName'] . ' ' . $_POST['lastName'];
                  // On dit que si les champs sont définis, on les affiche. Autrement, on affiche un message d'erreur.
              } else {
                  echo 'Veuillez remplir les informations ci-dessus.';
              }
              ?>
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
