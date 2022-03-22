<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="frontend/insc.css" rel="stylesheet">
    <title>Inscripton</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          <div id="leftmain" class="col-md-6">
          <a href="produit.php">
          <img id="logo" src="images/logo.png"></a>
          <h1>Bonjour, beauté !<strong > Inscrivez-vous.</strong></h1>
          <form action="inscription_code.php" method="POST">
          <input type ="text" name="email" id="email" placeholder="Adresse e-mail"required><br>
          <input type ="text" name="nom"  id="nom" placeholder="Nom"required>
          <input type ="text" name="prenom"  id="prenom" placeholder="Prénom"required><br>
          <input type ="text" name="adresse"  id="adr" placeholder="Adresse"required><br>
          <input type ="text" name="telephone"  id="num" placeholder=" Numéro de tel"required><br>
          <input type ="password" name="password"  id="mdp" placeholder="Mot de passe"required><br>
          <div id="svn"><a><input type="checkbox"  id="ho"> Se souvenir de moi</a><br></div>
          <button type="submit" name="submit" id="submit">S'inscrire</button><br>
        </form>
    </div>
    <div id="rightmain" class="col-md-6">
      <h1 class="textimg">You deserve it beauty</h1>
      <hr>
    </div>
  </div>
</div>

</body>
</html>