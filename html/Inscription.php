<?php
    $host="localhost";
    $user="root";
    $mdp="";
    $bdd="voiturerc";
    
    //récupération des paramètres de configuration dans la variable PHP connect
    $connect = mysqli_connect($host,$user,$mdp,$bdd);
    //fin du code PHP
?>
<?php
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
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="popUp"></div>
    <div class="dimmer"></div>
    
    <header class="header clearfix">
        <div class="clearfix display-flex align-items contentHolder" data-items="center">
            <div class="logo"><a href="../index.php"><img src="../imgs/logo.png" alt="logo Placeholder"></a></div>
            <nav class="menu">
              
                <ol>
                    <li class="mainMenu"><a href="">Fédération</a>
                      <ul class="submenu">
                        <li class="subOption"><a href="">Membre du bureau</a></li>
                        <li class="subOption"><a href="">Origine du site</a></li>
                        <li class="subOption"><a href="Reglement.html">Réglement</a></li>
                        <li class="subOption"><a href="Inscription.php">Fiches d'inscription</a></li>
                      </ul>
                    </li>
                    <li class="mainMenu"><a href="">Licenciés</a>
                      <ul class="submenu">
                            <li class="subOption"><a href="">Pourquoi étre licencié ?</a></li>
                            <li class="subOption"><a href="Licence_et_tarif.html">Licence et tarifs</a></li>
                      </ul>
                    </li>
                    <li class="mainMenu"><a href="">Piste</a>
                      <ul class="submenu">
                          <li class="subOption"><a href="">Piste 1/10 electrique</a></li>
                      </ul>
                    </li>
                      
                    <li class="mainMenu"><a href="">Classement</a>
                      <ul class="submenu">
                        <li class="subOption"><a href="Tableau-participants.php">Liste participants</a></li>
                        <li class="subOption"><a href="">Résultats courses</a></li>
                      </ul>
                    </li>
                </ol>
            </nav> 
<ul class="social">
  <li><a target="_blank" href="http://www.Facebook.fr"><svg viewBox="0 0 33 33"><g><path d="M 17.996,32L 12,32 L 12,16 l-4,0 l0-5.514 l 4-0.002l-0.006-3.248C 11.993,2.737, 13.213,0, 18.512,0l 4.412,0 l0,5.515 l-2.757,0 c-2.063,0-2.163,0.77-2.163,2.209l-0.008,2.76l 4.959,0 l-0.585,5.514L 18,16L 17.996,32z"></path></g></svg></a></li>
  <li><a target="_blank" href="http://www.twitter.com"><svg viewBox="0 0 33 33"><g><path d="M 32,6.076c-1.177,0.522-2.443,0.875-3.771,1.034c 1.355-0.813, 2.396-2.099, 2.887-3.632 c-1.269,0.752-2.674,1.299-4.169,1.593c-1.198-1.276-2.904-2.073-4.792-2.073c-3.626,0-6.565,2.939-6.565,6.565 c0,0.515, 0.058,1.016, 0.17,1.496c-5.456-0.274-10.294-2.888-13.532-6.86c-0.565,0.97-0.889,2.097-0.889,3.301 c0,2.278, 1.159,4.287, 2.921,5.465c-1.076-0.034-2.088-0.329-2.974-0.821c-0.001,0.027-0.001,0.055-0.001,0.083 c0,3.181, 2.263,5.834, 5.266,6.438c-0.551,0.15-1.131,0.23-1.73,0.23c-0.423,0-0.834-0.041-1.235-0.118 c 0.836,2.608, 3.26,4.506, 6.133,4.559c-2.247,1.761-5.078,2.81-8.154,2.81c-0.53,0-1.052-0.031-1.566-0.092 c 2.905,1.863, 6.356,2.95, 10.064,2.95c 12.076,0, 18.679-10.004, 18.679-18.68c0-0.285-0.006-0.568-0.019-0.849 C 30.007,8.548, 31.12,7.392, 32,6.076z"></path></g></svg></a></li>
  <li><a target="_blank" href="http://www.instagram.com"><svg viewBox="0 0 512 512">><path d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z"/><path d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z"/><circle cx="351.5" cy="160.5" r="21.5"/></g></svg></a></li>
</ul>
      </div>
  </header>
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