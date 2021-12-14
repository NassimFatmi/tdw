<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ingenieur</title>
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>
  <header>
    <h1>Ingénieurs Agricols</h1>
    <div class="slider">
      <img class="slider-img" src="assets/1.jpg" alt="" />
      <img class="slider-img" src="assets/2.jpg" alt="" />
      <img class="slider-img" src="assets/3.jpg" alt="" />
      <img class="slider-img" src="assets/4.jpg" alt="" />
    </div>
  </header>
  <?php
  include("navbar.php");
  ?>
  <main>
    <div class="container">
      <video autoplay loop muted>
        <source src="assets/Top Features in Android 11.mp4" />
      </video>
    </div>
    <section>
      <h2>Statistiques</h2>
      <div>
        <?php
        include_once("database.php");

        $q = "SELECT * FROM elevage";
        echo "<table id='table-anm' class='tableau'>
<thead>
  <th scope='col'>Espèce</th>
  <th scope='col'>Nombre (1000 tetes)</th>
</thead>";
        $result = $db->query($q);
        foreach ($result as $row) {
          echo "<tr>
							<th>" . $row["Nom_animal"] . "</th>
							<td>" . $row["Nombre_tete"] . "</td>
						</tr>";
        }
        echo "</table>";

        $q = "SELECT * FROM culture";
        echo "<table id='table-vgt' class='tableau'>
<thead>
<th scope='col'>Superficie cultivé (1000 ha)</th>
<th scope='col'>Culture</th>
<th scope='col'>Production totale (1000 tonnes)</th>
</thead>";
        $result = $db->query($q);
        foreach ($result as $row) {
          echo "<tr>
							<th>" .  $row["Nom_culture"] . "</th>
							<td>" . $row["Superficie"] . "</td>
							<td>" . $row["Production"]  . "</td>
						</tr>";
        }
        echo "</table>";
        ?>
      </div>
    </section>
  </main>
  <footer>
    <a href="mailto:engineer@esi.dz">Contact-us</a>
  </footer>
</body>

</html>