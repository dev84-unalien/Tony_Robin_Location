<?php
include_once('co_bdd.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $titre = $_POST['titre'];
  $description = $_POST['description'];

  $requete = $conn->prepare("INSERT INTO location (titre, description) VALUES (?, ?)");

  if ($requete) {
    $requete->bind_param('ss', $titre, $description);
    $requete->execute();
    echo "Ajout effectué";
    $requete->close();
  } else {
    echo "Erreur";
  }
  $conn->close();
}
?>