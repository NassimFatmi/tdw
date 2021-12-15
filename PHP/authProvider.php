<?php
if (isset($_POST["user"]) && isset($_POST["password"])) {
  if ($_POST["user"] === "admin" && $_POST["password"] == "admin") {
    header('Location: admin.php');
  } else {
    header('Location: auth.php');
  }
} else {
  header('Location: auth.php');
}
