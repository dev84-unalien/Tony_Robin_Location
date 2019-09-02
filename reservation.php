<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Location</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <?php
  include_once('co_bdd.php');
  include_once('navbar.php');
  include_once('formulaire.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Rcupere les valeurs des inputs
    $id_appart = $_POST['appart'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];

    // On verifie que tout les champs sont remplis
    if (empty($id_appart) || empty($email) || empty($name) || empty($surname) || empty($address) || empty($tel)) {
      print("Un des champs est vide !");
      exit();
    }

    // On verifie que l'email est correct
    $emailOk = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($emailOk == false) {
      echo "Votre email incorrect";
      exit();
    }

    // Preparer la requete SQL
    $requete = $conn->prepare("INSERT INTO `utilisateurs` (`id_appart`, `email`, `name`, `surname`, `address`, `tel`) VALUES (?, ?, ?, ?, ?, ?)");

    if ($requete) {
      // Ajouter les valeurs a la requete SQL
      $requete->bind_param("isssss", $id_appart, $email, $name, $surname, $address, $tel);
      $requete->execute();
      echo "Votre réservation à bien été prise en compte";
      // Fermer la connexion avec la bdd
      $requete->close();
    } else {
      echo "Erreur 101";
    }

    $conn->close();
  }


  ?>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Location 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>