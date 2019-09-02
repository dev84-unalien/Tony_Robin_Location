<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire de réservation</title>
</head>

<body>
    <?php
    include_once('co_bdd.php');

    $sql = "SELECT titre FROM location";
    $result = $conn->query($sql);
    ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="appart-select"></label>
            <select name="appart" id="appart-select">
                <?php 
                    while ($row = $result->fetch_assoc()) {
                        echo "
                            <option>{$row['titre']}</option>
                        ";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="email" name="email" placeholder="exemple@gmail.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input type="name" name="name" placeholder="Name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="surname"></label>
            <input type="surname" name="surname" placeholder="Surname" id="surname" class="form-control">
        </div>
        <div class="form-group">
            <label for="address"></label>
            <input type="text" name="address" placeholder="Address" id="address" class="form-control">
        </div>
        <div class="form-group">
            <label for="tel"></label>
            <input type="tel" name="tel" placeholder="06 xx xx xx xx" id="tel" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Valid</button>
    </form>
</body>

</html>