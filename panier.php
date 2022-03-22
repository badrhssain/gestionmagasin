
<?php include('connect.php');

session_start();
if(isset($_POST['passerCommand.php'])){
  $email = $_SESSION['email'];

if(!isset($email)){
  header('location:login.php');
}
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(isset($_POST["addToCard"])){
    if(isset($_SESSION["card"])){

      $produits = array_column($_SESSION['card'],'libelle');
      if(in_array($_POST["libelle"],$produits)){
        echo'<script>alert("cette ptoduit deja en panier");window.location.href="produit.php";</script>';

      }
      else{
          $count = count($_SESSION['card']);
      $_SESSION["card"][$count]=array('libelle'=>$_POST['libelle'],'prix'=>$_POST['prix'],'image'=>$_POST['image']);
      echo'<script>alert("cette ptoduit add en panier");window.location.href="produit.php";</script>';  
      
      }
     
     
    }
    else{
      $_SESSION["card"][0]=array('libelle'=>$_POST['libelle'],'prix'=>$_POST['prix'],'image'=>$_POST['image']);
      echo'<script>alert("cette ptoduit add en panier");window.location.href="produit.php";</script>';  

    }
  }
  if(isset($_POST['remove'])){
    foreach($_SESSION['card'] as $key => $value){
      if($value['removeProduit']==$_POST['remove']){
        unset($_SESSION['card'][$key]);
        $_SESSION['card']=array_values($_SESSION['card']);
        echo '<script>alert("cette ptoduit est supprimer");
        window.location.href="panier.php";
        </script>';
      }
    }
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="frontend/panier.css" rel="stylesheet">
    <title>Panier</title>
</head>
<body>
  <div>
    <ul id="firstul" class="list-group list-group-horizontal">
        <li >LIVRAISON OFFERTE DÈS 40€</li>
        <li class="li2">RETOURS ET ÉCHANGES PENDANT 60 JOURS</li>
        <li class="li3">FAQ CORONAVIRUS</li>
      </ul>

</div>
</div>
<nav id="navbar" class="navbar">
    <div class="container-fluid">
      <a href="produit.php"><img id="logo" src="images/logo.png"></a>
        

    
    </div>
  </nav>
  <header>

    <img src="images/nav (2).png">
    </header>
    <main>
      <section class="bigsection">
      <section class="firstsc">
      <table class="table">
        <thead>
          <tr>
            <th scope="col-2">Produit</th>
            <th scope="col-2">Prix</th>

            <th scope="col-2"></th>
            <th scope="col-2"></th>
          </tr>
        </thead>
        <tbody>
          <?php 

          $total = 0;
          if(isset($_SESSION['card'])){
              foreach($_SESSION['card']as $key =>$value){
                            $total= $total+$value["prix"];
                echo'
                <tr>
                    <td scope="col">'.$value["libelle"].'</td>
                    <td scope="col">'.$value["prix"].' $</td> 
                    <td scope="col">
                    <form action="panier.php" method="post">
                    <button name="remove" class="btn btn-primary">Effacer</button>
                    </form>
                    </td>';
                }
          }
          

          ?>

        </tbody>
      </table>
    </section>
    <section class="secondsc">
      <form action="login.php" method="post">
      <h3>Carte Total</h3>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          
          <div class="card-title">
            <h5>Totals</h5>
            <h5><?php echo $total?> $</h5>
          </div>
          <button type="submit" name="passerCommand" class="btn btn-primary">Passer a la caisse</a>
        </div>
      </div>
      </form>
    </section>
  </section>

    </main>










    
</body>
</html>
<script>
               const plus = document.querySelector(".plus"),
                minus = document.querySelector(".minus"),
                num = document.querySelector(".num");
                let a = 1;
                plus.addEventListener("click", ()=>{
                  a++;
                  a = (a < 10) ? "0" + a : a;
                  num.innerText = a;
                });

                minus.addEventListener("click", ()=>{
                  if(a > 1){
                    a--;
                    a = (a < 10) ? "0" + a : a;
                    num.innerText = a;
                  }
                });

              </script>







