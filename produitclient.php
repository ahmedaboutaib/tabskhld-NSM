<?php
require("commande.php");




?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <title> cccc</title>

</head>
    <body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="compteclient.php">Mon compte </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link active" href="produitclient.php" style="font-weight: bold">ajoute produit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="supperimmerproduit.php">supprimer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="1erpage.php">deconnecte</a>
      </li>
      
    </ul>
    </div>
    <div>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
</nav>

    <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <form  method="post"su>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">tetre de l'image </label>
    <input type="name" class="form-control" name="image" id="exampleInputEmail1" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">nom du produit </label>
    <input type="text" class="form-control"  name="nom" id="exampleInputPassword1"   required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">prix</label>
    <input type="number" class="form-control" name="prix" id="exampleInputPassword1"  required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">description </label>
    <textArea  class="form-control" name="desc" required></textArea>
  </div>
  <label for="exampleInputPassword1" class="form-label">nembre des produit dans le stock</label>
    <input type="number" class="form-control" name="stock" id="exampleInputPassword1"  required>
  </div>
  <button type="submit" name="ok" class="btn btn-primary">ajoute un produit </button>
  <button type="button"  onclick="self.history.back();" class="btn btn-primary">retour </button>
  
</form>

      </div></div></div>


   
</body>
</html>

<?php

if(isset($_POST['ok'])){
   
   
    if( isset($_POST['image']) and isset($_POST['nom']) and isset($_POST['prix'] )and isset($_POST['desc']) and isset($_POST['stock'])){
    
        if(!empty($_POST['image']) and !empty($_POST['nom']) and !empty($_POST['prix'] )and !empty($_POST['desc']) and !empty($_POST['stock']))
        {
        $image=htmlspecialchars(strip_tags($_POST['image']));
       $nom=htmlspecialchars(strip_tags($_POST['nom']));
       $prix=htmlspecialchars(strip_tags($_POST['prix']));
       $desc=htmlspecialchars(strip_tags($_POST['desc']));
       $stock=htmlspecialchars(strip_tags($_POST['stock'])); 
       
       try{
    
        ajouteproduit($image,$nom,$prix,$desc,$stock);
       }catch(Exception $e){
        $e->getMessage();
       }

        }
    }
}
?>