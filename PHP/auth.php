<style>
  <?php include 'css/main.css'; ?>
</style>
<?php
include("navbar.php");
?>
<form method="GET" class="container">
  <div class="inputs show auth">
    <input type="text" name="user" placeholder="username">
    <br />
    <input type="password" name="password" placeholder="Mot de passe">
  </div>
  <input type="submit" value="Login" name="submit">
</form>