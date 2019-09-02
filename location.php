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
  ?>

  <div class="container">

    <h1 class="my-4">Biens disponibles</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">
      Ajouter
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter un bien</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" id="titre" placeholder="Titre...">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" placeholder="Description...">
              </div>
              <div class="form-group">
                <label for="image">Photo du bien</label>
                <input type="file" class="form-control-file" id="image">
              </div>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="assets/4.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Appartement 1</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="assets/5.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Appartement 2</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="assets/6.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Appartement 3</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
          </div>
        </div>
      </div>

      <?php
      $sql = "SELECT * FROM location";
      $result = $conn->query($sql);
      $article_debut = "
        <div class='col-lg-4 col-sm-6 portfolio-item'>
          <div class='card h-100'>
      ";
      $article_fin = "
          </div>
        </div>
      ";

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo $article_debut;
          echo "
            <a href='#'><img class='card-img-top' src='{$row["image"]}'></a>
            <div class='card-body'>
              <h4 class='card-title'>
                <a href='#'>{$row["titre"]}</a>
              </h4>
              <p class='card-text'>{$row["description"]}</p>
            </div>";
          echo $article_fin;
        }
      }
      ?>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

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
