<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Exercice 6</title>
    </head>
    <body>
        <!-- container Bootstrap -->
        <div class="container-fluid">
            <!-- header -->
            <header>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-3">Partie 7 - Exercice 6</h1>
                        <p class="lead">Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET,
                            le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
                            Utiliser qu'une seule page.</p>
                    </div>
                </div>
            </header>
            <!-- main -->
            <main>
                <?php
                    if (!empty($_POST['gender']) && !empty($_POST['firstName']) && !empty($_POST['lastName'])) {
                        echo 'Bonjour, ' . $_POST['gender'] . ' ' . $_POST['firstName'] . ' ' . $_POST['lastName'];
                    } else {
                ?>
                <!-- Ici, on place le formulation à la suite de la condition afin que ce dernier ne s'affiche plus une fois les valeurs rentrées et validées. -->
                <div class="row">
                    <div class="col-md-4">
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <label for="gender">Civilité :</label>
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
                                <label for="firstName"> Prénom :</label> 
                                <input class="form-control" type="text" name="firstName">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success font-weight-bold">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="text-danger font-weight-bold mt-3">Veuillez remplir les informations ci-dessus.</p>
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
