<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 1</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 7 - Exercice 1</h1>
                <p class="lead">Créer un formulaire demandant le nom et le prénom.
                Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <form action="user.php" method="GET">
              <!-- On renvoie le formulaire vers la page "user.php" avec la méthode GET -->
              <div class="form-group">
                <label for="lastName">Nom :</label>
                <input class="form-control" type="text" name="lastName">
              </div>
              <div class="form-group">
                <label for="firstName">Prénom :</label>
                <input class="form-control" type="text" name="firstName">
              </div>
              <button type="submit" class="btn btn-success font-weight-bold">Valider</button>
            </form>
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
