<?php include('connect.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="frontend/detailCommande.css" rel="stylesheet">
    <link rel="stylesheet" href="frontend/style.css">
    <title></title>
</head>
<body>
<header>
<nav class = "navbarDetail">
          <a href = "produit.php" class = "navbar-brand">
            <img class="logo" src ="images/logo.png" alt = "site ">
          </a>
          <ul class="nav">
          <li>Maquillage Visage</li>
          <li>Maquillage Yeux </li>
          <li>Lèvres</li>
          </ul>

        </nav>

    <?php
      if(isset($_GET['id'])){
        $detailProduit = $connect->prepare('SELECT * FROM produit WHERE idProduit =:id');
        $detailProduit->bindParam('id', $_GET['id']);
        $detailProduit->execute();
        foreach ($detailProduit as $result){
                }
      }
    ?>
          <form action="panier.php" method="post" class="form">
            <div class="divFormLeft">
              
              <img src='<?php echo $result["image"]?>'alt="">

            </div>
            <div class="divFormRight">
            <h2 class="libelleProduit"><?php echo $result["libelle"]?></h2>
            <h3 class="descriptionProduit"><?php echo $result["description"]?></h3>
            <h2 class="libelleProduit"><?php echo $result["prix"]?>$</h2>
            <h5 class="quantite">Select QUANTITE</h5>
              <div class="wrapper">
                <span class="minus">-</span>
                <span class="num">01</span>
                <span class="plus">+</span>
              </div>
              <button name="addToCard" class="btn btn-light">Ajouter au panier </button > 
              <input type="hidden" name="libelle" value="<?php echo $result['libelle']?>">
              <input type="hidden" name="prix" value="<?php echo $result['prix']?>">
              


            </div>

          </form>
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
<?php include('frontend/footer.php'); ?>


</body>
</html>