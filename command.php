<?php
session_start();
include('connection.php');
if(isset($_POST['passerCommand'])){
    $emailClient = $_SESSION['email'];
$select='SELECT * FROM client WHERE email=:email';
$result= mysqli_query($db, $select);
foreach($result as $row){
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="frontend/insc.css" rel="stylesheet">
        <title>Detail Adress</title>
    </head>
    <?php
    include('header.php');
?>
    <body>
        
        <form method="post" >
            <h4>'<?php echo $_SESSION['name']; ?></h4>'
            <input type ="text" name="prenom"  id="prenom" placeholder="Prénom"required value="<?php echo $_SESSION['Prenom'];?>"><br>
            <input type ="text" name="adresse"  id="adr" placeholder="Adresse"required VALUE="<?php echo $_SESSION['adresse'];?>"><br>
            <input type ="text" name="telephone"  id="num" placeholder=" Numéro de tel"required value="<?php echo $_SESSION['telephone'];?>"><br>
        <button type="submit" name="confirmerCommande" class="btn btn-primary">Submit</button>
        </form>

        </body>
    </html>
