<?php
    $host="localhost";
    $user="Webmaster";
    $mdp="azerty";
    $bdd="voiturerc";
    
    //récupération des paramètres de configuration dans la variable PHP connect
    $connect = mysqli_connect($host,$user,$mdp,$bdd);
    //fin du code PHP

?>

<DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Le Grand Rush De Baggio</title>
        <link rel="stylesheet" href="../css/Style-Tab.css">
        <meta  http-equiv="refresh" content="5">
    </head>
    <body>
        
    <?php include"entete.php"?>

      <br><br><br><br>
      
        <table class="table-style">

            <thead>
                <tr>
                 <th>Nom</th>
                 <th>Prénom</th>
                 <th>Type de voiture</a></th>
                 <th>Numero de la voiture</th>
                 <th>Caution d'inscription</th>
                 <th>Licence validé</th>
                </tr>
            </thead>
    

            <tbody>
            <?php
                $req = 'SELECT * FROM inscription';
                $exec = mysqli_query($connect,$req);
                $players=mysqli_fetch_all($exec);

                foreach($players as $player){?>
                    <tr>
                    <td><?= $player[1];?></td>
                    <td><?= $player[2];?></td>
                    <td><?= $player[4];?></td>
                    <td><?= $player[5];?></td>
                    <td></td>
                    <td><?= $player[7];?></td>
                </tr>
              <?php  } ?>
            </tbody>

</table>

<?php include"pied.php"?>

</body>
</html>