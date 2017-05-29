
<h2>Bienvenue sur votre compte <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']?></h2>

<form method="POST" action="index.php?uc=gererCompte&action=modifierINFO">
<table class="tabNonQuadrille">
  <tr>
    <td>Modifier nom :</td>
    <td><input type="text" value= "<?php echo $_SESSION['nom']?>"" name="newNOM" size="30"><br /></td>
  </tr>
  <tr>
    <td>Modifier prenom : </td>
    <td><input type="text" value= "<?php echo $_SESSION['prenom']?>"" name="newPRENOM" size="30"  ><br /></td>
  </tr>
  <tr>
    <td>Modifier adresse : </td>
    <td><input type="text" value= "<?php echo $_SESSION['adresse']?>"" name="newADRESSE" size="30" ><br /></td>
  </tr>
  <tr>
    <td>Modifier code postal : </td>
    <td><input type="text" value= "<?php echo $_SESSION['cp']?>"" name="newCP" size="30" ><br /></td>
  </tr>
  <tr>
    <td>Modifier ville : </td>
    <td><input type="text" value= "<?php echo $_SESSION['ville']?>"" name="newVILLE" size="30" ><br /></td>
  </tr>
  <tr>
    <td><input type="submit" name="valider" value="valider"></td>
  </tr>
</table>
</form>

<div id="menuGauche">
</div>


<form method="POST" action="index.php?uc=gererCompte&action=modifierMDP">
<table class="tabNonQuadrille">
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
