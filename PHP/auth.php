<style>
  <?php include 'css/main.css'; ?>
</style>
<?php
include("navbar.php");
?>
<br>
<h2>ADMIN</h2>
<h2>Se connecter</h2>
<form method="POST" class="container" action="authProvider.php">
  <div class="inputs show auth">
    <input type="text" name="user" placeholder="username">
    <br />
    <input type="password" name="password" placeholder="Mot de passe">
  </div>
  <input type="submit" value="Login" name="submit">
</form>