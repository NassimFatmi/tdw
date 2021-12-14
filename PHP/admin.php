<style>
  <?php include 'css/main.css'; ?>
</style>

<?php
include("navbar.php");
?>

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
              <td>" . "<form action='delete.php' method='POST'>
              <input type='hidden' value=" . $row["Id_elevage"] . " name='id'>
              <input type='submit' value='supprimer' name='animal'>
               </form>" . "</td>	
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
							<td>" . "<form action='delete.php' method='POST'>
              <input type='hidden' value=" . $row["Id_culture"] . " name='id'>
              <input type='submit' value='supprimer' name='culture'>
               </form>" . "</td>
						</tr>";
    }
    echo "</table>";
    ?>
  </div>

</section>

<section class="add">
  <h2 class="title">Ajouter une nouvelle culture</h2>
  <form action="add.php" class="container" method="POST">
    <div class="inputs show vgt">
      <input name="cultureName" id="culture" type="text" placeholder="Culutre" required />
      <input name="superficie" id="superficie" type="number" placeholder="Superficie cultivé" required />
      <input name="production" id="total" type="number" placeholder="Production totale" required />
    </div>
    <input type="submit" value="Ajouter" />
  </form>
</section>

<section class="add">
  <h2 class="title">Ajouter un elevage</h2>
  <form action="add.php" class="container" method="POST">
    <div class="inputs show anm">
      <input name="espece" type="text" id="espece" placeholder="Espece" required />
      <input name="number" type="number" id="number" placeholder="Nombre" required />
    </div>
    <input type="submit" value="Ajouter" />
  </form>
</section>