
      <?php 
          session_start();
          include ('connection.php');
         
      if(!isset($email)){
        include('header.php');
      }



?>
      <header>
          <div class="text"><h1><strong>Ǝ</strong>LLE</h1>
        <h2>you deserve to feel beautiful</h2></div>
        <div class="video">
            <video autoplay muted loop class="video">
                <source src="images/header.mp4">
             </video>
        </div>
    </header>
    <main>
      <!-- ----------firstprds----------- -->
      <H1 class="meilleurVentes">Meilleur ventes</H1>        
      <section  style="display:grid;grid-template-columns:repeat(3,1fr);">
      
      <?php
        include('connect.php');

          $selectProduits= $connect->prepare("SELECT * FROM produit LIMIT  3");
          $selectProduits->execute();
          foreach($selectProduits as $result){
            echo'
            <form action="panier.php" method="post">
            <div class="container">
                    <div class="card" style="width: 18rem;">
                    <a href="detailProduit.php?id='.$result["idProduit"].'">
                      <img class="card-img-top" id="pr1" src='.$result["image"].' alt="Card image cap">
                      <input type="hidden" name="image" value="'.$result["image"].'">
                    </a>
                        <div class="card-body">
                          <h5 class="card-title">'.$result["libelle"].'</h5>
                          <h6 class="card-title">'.$result["prix"].'$</h6>
                          <button "?id='.$result["idProduit"].'" name="addToCard" class="btn btn-light">Ajouter au panier</button> 
                          <input type="hidden" name="libelle" value="'.$result['libelle'].'">
                          <input type="hidden" name="prix" value="'.$result['prix'].'">
                        </div>
                      </div>
                  </div>
                  </form>';

         
          }
      ?>
      </section>
   <br><br>
<!-- ---------col--------- -->
    <div class="container-fluid">
        <div class="row">
          <div id="leftmain" class="col-md-5">
              <img src="images/levre.png">
          </div>
          <div id="rightmain" class="col-md-7">
              <div id="text">
              <h1>Découvrez les Double Touch<br>Lipstick Kit en édition limitée</h1></div>
              <a href="http://localhost/produit%20cosm%C3%A9tique/detailProduit.php?id=10" id="btnx" class="btn">ACHETER</a>
          </div>

        </div>  
      </div>
      
      <!-- ----------secondprds----------- -->


<section   style="display:grid;
                  grid-template-columns:repeat(3,1fr);">
    
    <?php
    include("connect.php");

    $selectProduits2=$connect->prepare("SELECT * FROM produit LIMIT 3,6 ");
    $selectProduits2->execute();
    foreach($selectProduits2 as $result){
      echo'
        <form action="panier.php" method="post">
          <div id="sccontainer" class="container">
                
                      <div class="card" style="width: 18rem;">
                      <a href="detailProduit.php?id='.$result["idProduit"].'">
                          <img class="card-img-top" id="pr4" src='.$result["image"].' alt="Card image cap">
                          <input type ="hidden" name="image" value="'.$result['image'].'">
                        </a>
                          <div class="card-body">
                            <h5 class="card-title">'.$result["libelle"].'</h5>
                            <h6 class="card-title">'.$result["prix"].'$</h6>
                            <button ?id='.$result["idProduit"].' name="addToCard" class="btn btn-light">Ajouter au panier </button > 
                            <input type="hidden" name="libelle" value="'.$result['libelle'].'">
                            <input type="hidden" name="prix" value="'.$result['prix'].'">
                            
                            </div>
                      </div>
                  
          </div>
        </form>
      ';
    }
    ?>
</main>
<?php include('frontend/footer.php'); ?>
</body>
</html>




