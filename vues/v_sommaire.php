﻿    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
      </div>  
        <ul id="menuList">
			<li >
				  Visiteur :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
   	       </li>
            <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
            </li>
            <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
            </li>
 	          <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
           <li class="smenu">
             <a href="index.php?uc=gererCompte&action=gererMDP" title="modifier mot de passe">Mon compte</a>
           </li>
         </ul>
        
    </div>
    