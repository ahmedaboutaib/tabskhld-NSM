<?php
require("commande.php");

$Pr=afficher();


?>

<html>
    <head>
    <title> supprimer </title>
<meta charset="utf-8">

<style>
    
    label{
        width : 20%;
        display : inline-block;
        text-align : left;
    }
    body{   width : 70%;
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
       input[type="number"]{
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
    <body>



      
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
    <a class="navbar-brand" href="compte-admine.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
</svg>   <strong> Mon compte</strong> </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="ajoute-produit.php" >ajoute produit</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link active" href="supprimer-produit.php"style="font-weight: bold">supprimer</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="1erpage.php">deconnecte</a>
      </li>
      
    </ul>
    </div>
    
</nav>
    <fieldset>
        <legend> <h1>suppprimer produit </h1> </legend>
<form method="post">
    <label><h4>identifiant de produit</h4> </label><input type="number" name="idpro" size=20 placeholder="votre id ici"><br>
    <label></label><input type="submit" name="ok"  value="suppimer le produit">
</form>
</fieldset>
<main>

 
<table>

<?php
$i=0;
  ?>
  
  <?php   while(($taa=mysqli_fetch_row($Pr)) ){
    ?> <tr>
   <td> <div class="col">
  <div class="card shadow-sm">
  <img src="<?=$taa[1] ?>"    width=50% height=50%>
  <h3><?=$taa[0] ?></h3>
    <div class="card-body">
    </div>
  </div>
  </div></td>
  </tr>
  <?php } ?>
  
  
   </tabl>
</body>
</html>
<?php

if(isset($_POST['ok'])){
   
   
    if(  isset($_POST['idpro'] )){
    
        if(!empty($_POST['idpro'] ) and is_numeric($_POST['idpro'] ) )
        {
    
       $idpro=htmlspecialchars(strip_tags($_POST['idpro']));
 
         
       
       try{
    
        supprimer($idpro);
       }catch(Exception $e){
        $e->getMessage();
       }

        }
    }
}
?>