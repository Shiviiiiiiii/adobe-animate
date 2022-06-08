<?php
    $host="localhost";
    $user="Webmaster";
    $mdp="azerty";
    $bdd="voiturerc";
    
    //récupération des paramètres de configuration dans la variable PHP connect
    $connect = mysqli_connect($host,$user,$mdp,$bdd);
    //fin du code PHP
?>
<?php
      if(isset($_POST['Envoyer'])){
        $Nom = $_POST['Nom'];
        $Prenom  = $_POST['Prenom'];
        $Email = $_POST['Email'];
        $Type = $_POST['Type_de_voiture'];
        $num = $_POST['num_de_voiture'];
        $Licence = $_POST['Licence'];
        $paiement = $_POST['Paiement'];
        //requete pour ajouter des éléments dans la table "utilisateurs"
        $requete = "INSERT INTO inscription(Nom, Prenom, Adresse_electronique, type_de_voiture,numero_de_la_voiture, numero_licence, caution) 
        VALUES('$Nom', '$Prenom', '$Email', '$Type', '$num', '$Licence', '$paiement')";
        mysqli_query($connect,$requete);
      }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    
  <?php include"entete.php"?>

  <br />
  <br />
  <br />
  <br />
    <h2 style="text-align: center;">Formulaire d'inscription</h2>
    <form name="RegForm" onsubmit="return W3docs()" method="POST" class="w3docs">
      <div>
        <label for="Nom">Nom:</label>
        <input type="text" id="Nom" size="60" name="Nom" />
      </div>
      <br />
      <div>
        <label for="adresse">Prenom: </label>
        <input type="text" id="adresse" size="60" name="Prenom" />
      </div>
      <br />
      <div>
        <label for="E-mail">Adresse électronique:</label>
        <input type="text" id="E-mail" size="60" name="Email" />
      </div>
      <br />
      <div>
        <label for="Type de voiture">Type de voiture: </label>
        <select id="Type_de_voiture" name="Type_de_voiture">
          <option value="">-------------------------------Merci de choisir type de voiture---------------------------- </option>
          <option value="Electrique">Electrique</option>
          <option value="Thermique">Thermique</option>
          <option value="Hybride">Hybride</option>
        </select>
      </div>
      <br />
      <div>
        <label for="Voiture_num">Numero de la voiture: </label>
        <input type="text" id="Voiture_num" size="60" name="num_de_voiture" />
      </div>
      <br />
      <div>
        <label for="Licence">N° de Licence: </label>
        <input type="text" id="Licence" size="60" name="Licence" />
      </div>
      <br />  
      <div>
        <label for="Paiement">Paiement: </label>
        <select id="Paiement" name="Paiement">
          <option value="">----------------------Merci de choisir votre moyen de payement---------------------- </option>
          <option value="PayPal">PayPal</option>
          <option value="Espece">Espece</option>
          <option value="Carte Bancaire">Carte Bancaire</option>
        </select>
      </div>
      <br />
      <div class="buttons">
        <input type="submit" value="Envoyer" name="Envoyer"  />
        <input type="reset" value="Réinitialiser" name="Réinitialiser" />
      </div>
    </form>
    <script>
      function W3docs() {
        var name = document.forms["RegForm"]["Nom"];
        var last_name = document.forms["RegForm"]["Prenom"];
        var email = document.forms["RegForm"]["Email"];
        var licence = document.forms["RegForm"]["Licence"];
        var type = document.forms["RegForm"]["Type_de_voiture"];
        var numero = document.forms["RegForm"]["Voiture_num"];
        var paiement = document.forms["RegForm"]["Paiement"];

        if (name.value == "") {
          alert("Mettez votre nom.");
          name.focus();
          return false;
        }
        if (last_name.value == "") {
          alert("Mettez votre prenom.");
          name.focus();
          return false;
        }
        if (email.value == "") {
          alert("Mettez une adresse email valide.");
          email.focus();
          return false;
        }
        if (email.value.indexOf("@", 0) < 0) {
          alert("Mettez une adresse email valide.");
          email.focus();
          return false;
        }
        if (email.value.indexOf(".", 0) < 0) {
          alert("Mettez une adresse email valide.");
          email.focus();
          return false;
        }
        if (type.value == "") {
          alert("Choisisez votre type de voiture");
          type.focus();
          return false;
        }
        if (numero.value == "") {
          alert("Saisissez votre numero de voiture");
          numero.focus();
          return false;
        }
        
        if (Licence.value == ""){
          alert("Écrivez un numéro de Licence. ");
          licence.focus();
          return false;
        }
        if (paiement.value == "") {
          alert("Choisisez un moyen de paiement.");
          paiement.focus();
          return false;
        }
        return true;
      }
    </script>
  </body>
</html>