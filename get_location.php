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