
<h2>Bienvenue sur votre compte <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']?></h2>

<form method="POST" action="index.php?uc=gererCompte&action=modifierMDP">
<table align="center" border="0">
  <tr>
    <td>Ancien mot de passe :</td>
    <td><input type="password" name="oldMDP" size="30"><br /></td>
  </tr>
  <tr>
    <td>Nouveau mot de passe : </td>
    <td><input type="password" name="newMDP" size="30" ><br /></td>
  </tr>
  <tr>
    <td>Répeter le nouveau mot de passe : </td>
    <td><input type="password" name="newMDP2" size="30" ><br /></td>
  </tr>
  <tr>
    <td><input type="submit" name="valider" value="valider"></td>
  </tr>
</table>
</form>



