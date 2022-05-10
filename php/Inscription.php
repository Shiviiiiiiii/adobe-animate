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
        $Telephone = $_POST['Telephone'];
        $Licence = $_POST['Licence'];
        echo $Nom;
        //requete pour ajouter des éléments dans la table "utilisateurs"
        $requete = "INSERT INTO inscription (Nom, Prenom, Adresse_electronique, Type_de_voiture, telephone, numero_licence) VALUES('$Nom','$Prenom','$Email','$Type','$Telephone', '$Licence')";
        mysqli_query($connect,$requete);
        echo "Enregistre";
        header('Location:../index.php');
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
    <form name="RegForm" action="#" onsubmit="return W3docs()" method="post" class="w3docs">
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
        <label for="E-mail" l>Adresse électronique:</label>
        <input type="text" id="E-mail" size="60" name="Email" />
      </div>
      <br />
      <div>
        <label for="Type de voiture">Type de voiture: </label>
        <input type="text" id="Type de voiture" size="60" name="Type_de_voiture" />
      </div>
      <br />
      <div>
        <label for="Voiture_num">Numero de la voiture: </label>
        <input type="text" id="Voiture_num" size="60" name="Type_de_voiture" />
      </div>
      <br />
      <div>
        <label for="Téléphone">Téléphone: </label>
        <input type="tel" id="Téléphone" size="60" name="Telephone" />
      </div>
      <br />
      <div>
        <label for="Licence">N° de Licence: </label>
        <input type="text" id="Licence" size="60" name="Licence" />
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
        var email = document.forms["RegForm"]["Email"];
        var phone = document.forms["RegForm"]["Téléphone"];
        var licence = document.forms["RegForm"]["Licence"];
        var type = document.forms["RegForm"]["Type_de_voiture"];
        var numero = document.forms["RegForm"]["Voiture_num"];
        var address = document.forms["RegForm"]["Adresse"];
        var comment = document.forms["RegForm"]["Commentaire"];

        if (name.value == "") {
          alert("Mettez votre nom.");
          name.focus();
          return false;
        }
        if (address.value == "") {
          alert("Mettez votre adresse.");
          address.focus();
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
        if (phone.value == "") {
          alert("Mettez votre numéro de téléphone.");
          phone.focus();
          return false;
        }
        if (type.value == "") {
          alert("Saisissez votre type de voiture");
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
        if (comment.value == "") {
          alert("Écrivez un commentaire.");
          comment.focus();
          return false;
        }
        return true;
      }
    </script>
  </body>
</html>