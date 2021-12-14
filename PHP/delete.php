<?php
require_once("database.php");
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['id'])) {
  if (isset($_POST["animal"])) {
    $q = $db->prepare("DELETE FROM elevage WHERE Id_elevage = :id");
  } else if (isset($_POST["culture"])) {
    $q = $db->prepare("DELETE FROM culture WHERE Id_culture = :id");
  }
  $q->bindValue(":id", $_POST["id"]);
  $q->execute();
}
header('Location: admin.php');
exit();
