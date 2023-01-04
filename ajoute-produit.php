<!DOCTYPE html>
<html>
    <head>
<title> ajoute </title>
<meta charset="utf-8">

<style>

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

        }/*
        fieldset{
            border-radius : 8px;
        }
        legend{
            font-size :1.4em;
            margin- botm : 10px;
        }
        input[type="text"], input[type="number"]{
            border-radius : 5px;
            padding : 10px;
            width : 70%;
            background-color : #ffff;
            margin : 12px;

        }
        input[type="submit"]{
            position :relative;
            padding : 20px;
            font-size : 18px;
            border : 1px solid #16a085;
            border-radius : 2px;
            margin-top : 5px;
            font-style : bold;
            color :   #800000;
            
        }*/
        ul{
            list-style-type : none;
            padding : 20px;
            margin : 10px;
            margin : 10px;
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
    <li class="nav-item ">
    <a class="navbar-brand" href="compte-admine.php">
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
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


<h2>Choisissez comment télécharger le produit</h2><br>
<a class="nav-link" href="charger.php"><h3> Entrez par téléchargement depuis l'ordinateur</h3></a><br>
<h1>ou</h1> <br>
<a class="nav-link" href="ajoutep-par-addresse.php"><h3>entre par addresse de l'image</h3></a>







</body>
</html>
