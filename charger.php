<?php
require("commande.php");




?>
<!DOCTYPE html>
<html>
    <head>
<title> ajoute </title>
<meta charset="utf-8">

<style>
    
    label{
        width : 20%;
        display : inline-block;
        text-align : left;
    }
    body{
        width : 70%;
            font-family : arial;
            font-size:20px;
            margin :5px auto;
            padding : 20px;
            color :  #000000;
            background-image: url('https://previews.123rf.com/images/thepixel/thepixel1406/thepixel140600141/28954606-tapis-blanc-fluffy-textile-texture-fond-propre-image-couleur-haute-r%C3%A9solution.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

        }
        fieldset{
            padding : 10px;
            border-radius : 8px;
            background:local ;
        }
        legend{
            font-size :1.4em;
            margin-bottom: 20px;
        }
        input[type="text"], input[type="number"]{
            border-radius : 5px;
            padding : 10px;
            width : 70%;
            background-color : #ffff;
            margin : 20px;

        }
        input[type="submit"]{
            position :relative;
            margin-top : 5px;
            font-style : bold;
            color :   #333;
            padding : 10px;
            font-size : 18px;
            background-color: #000000;
            border : 2px solid #ffffff;
            border-radius : 20px;
            border: left 5px; 
            
        }
        input:hover{
        box-shadow: 2px 2px 5px #555;
        background-color: rgb(169, 156, 156);
    }
        li{
            display : inline;
            padding : 14px;
            
        }
        li a{
            color : #000000;
            padding : 20px;
            margin : 10px;
        }
    </style>
</head>
<body  >

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
    <a class="navbar-brand" href="compte-admine.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
</svg>   <strong> Mon compte</strong> </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link active" href="ajoute-produit.php" style="font-weight: bold">ajoute produit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="supprimer-produit.php">supprimer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="1erpage.php">deconnecte</a>
      </li>
      
    </ul>
    </div>
    
</nav>










    <fieldset>
        <legend> <h1>ajoute un produit</h1> </legend>
        <form enctype="multipart/form-data" method="POST">
<label>chareger l'image </label> 
<Input type="hidden" name="max_file_size" value="1000000000">
<input name="fich" type="file" size=60><br>
   
    <label><h4>nom du produit</h4></label><input type="text" name="nom" size=20 placeholder="votre nom ici"><br>
    <label><h4>prix </h4></label><input type="number" name="prix" size=20 placeholder="votre prix ici"><br>
    <label><h4>description </h4></label><input type="text" name="desc" size=20 placeholder="votre description ici"><br>
    <label><h4>nembre des produit dans le stock </h4></label><input type="number" name="stock" size=20 placeholder="votre nembre ici"><br>
 <label></label><input type="submit" name="ok"  value="ajoute un produit">
</form>
</fieldset>



<?php
if(isset($_POST['ok'])){
  
   if(  isset($_POST['nom']) and 
   isset($_POST['prix'] )and isset($_POST['desc']) and isset($_POST['stock'])){
   
        if( !empty($_POST['nom']) and !empty($_POST['prix'] )and !empty($_POST['desc']) and !empty($_POST['stock']))
        {
        
       $nom=htmlspecialchars(strip_tags($_POST['nom']));
       $prix=htmlspecialchars(strip_tags($_POST['prix']));
       $desc=htmlspecialchars(strip_tags($_POST['desc']));
       $stock=htmlspecialchars(strip_tags($_POST['stock'])); 
       if(!($_FILES['fich']['error'] >0)){
       $infosfichier=pathinfo($_FILES['fich']['name']);
              $extension_upload = $infosfichier['extension'];
              $extension_upload=strtolower($extension_upload);
               $tab=array("jpg","jpeg","png");
               if(!in_array($extension_upload,$tab))
               exit("error de type <br>");
               $photo=$nom.$desc.".".$extension_upload;
               if(isset($_FILES['fich'])){
                  $dossier = 'C:\xampp\htdocs\rom/mini_projet/';
                 $fichier = basename($_FILES['fich']['name']);
                 if(move_uploaded_file($_FILES['fich']['tmp_name'],$dossier.$photo))
                 {$image=$photo;
                
                    try{
     
                        ajouteproduit($image,$nom,$prix,$desc,$stock);
                     }catch(Exception $e){
                      $e->getMessage();
                     }
                
                
                }
                 else{
                      exit("Echec de l'upload !"); 
                     }}


                    }else{
                        echo " les informatoin un corecte !!";}







        }
    }
    
}
?></body>
</html>