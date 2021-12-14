<?php
require_once("database.php");
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["cultureName"])) {
  $q = $db->prepare("INSERT INTO culture (Nom_culture, Superficie, Production) VALUES (:nom,:superfice,:production)");
  $q->bindValue(":nom", $_POST["cultureName"]);
  $q->bindValue(":superfice", $_POST["superficie"]);
  $q->bindValue(":production", $_POST["production"]);
  $q->execute();
} else if (isset($_POST["espece"])) {
  $q = $db->prepare("INSERT INTO elevage (Nom_animal, Nombre_tete) VALUES ( :espece,:nombre)");
  echo $_POST["espece"] . " " . $_POST["number"];
  $q->bindValue(":espece", $_POST["espece"]);
  $q->bindValue(":nombre", $_POST["number"]);
  $q->execute();
}
header('Location: admin.php');
exit();
