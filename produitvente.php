<?php
session_start();
require("commande.php");
$a=$_SESSION['AAAAAAAA'];
$nb=$a[0];
$X=affichr($nb);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Album example · Bootstrap v5.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <style>
      nav{
        font-family : bold;
            margin :5px auto;
          font-size:20px;
            color :  #000000;
            background-image: url('https://previews.123rf.com/images/thepixel/thepixel1406/thepixel140600141/28954606-tapis-blanc-fluffy-textile-texture-fond-propre-image-couleur-haute-r%C3%A9solution.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

        }
      body{
        font-family : bold;
            margin :5px auto;
          font-size:20px;
            color :  #000000;
            background-image: url('https://previews.123rf.com/images/thepixel/thepixel1406/thepixel140600141/28954606-tapis-blanc-fluffy-textile-texture-fond-propre-image-couleur-haute-r%C3%A9solution.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

        }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      div{
        font-family : bold;
            margin :5px auto;
          font-size:20px;
            color :  #000000;
            background-image: url('https://previews.123rf.com/images/thepixel/thepixel1406/thepixel140600141/28954606-tapis-blanc-fluffy-textile-texture-fond-propre-image-couleur-haute-r%C3%A9solution.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

        }
       
        button[type="submit"]{
            position :relative;
            margin-top : 5px;
            font-style : bold;
            color :   #ffffff;
            padding : 10px;
            font-size : 18px;
            background-color: #000000;
            border : 2px solid #ffffff;
            border-radius : 20px;
            border: left 5px; 
            
        }
        button:hover{
        box-shadow: 2px 2px 5px #555;
        background-color: rgb(169, 156, 156);
    }

 
    
    </style>

    
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"   href="Cmpersonne.php" ><h3><b>Mon compte</b></h3> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link active" href="produitvente.php"   style="font-weight: bold"><h4>Mon panier </h4> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link  " href="pannel.php" style="font-weight: bold">Conformation d'achat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  " href="1erpage.php" style="font-weight: bold"><h4>deconnecte</h4></a>
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

<b>
<TABLE CELLPADDING=20>
<CAPTION ALIGN=top><center><font color="#000000"><h1>Toutes les achats <h1></font><center></CAPTION>
<tr>
    <th>image de produit </th>
    <th>nom </th>
    <th>prix</th>
    <th>descriptin </th>
    <th>Date </th>
    <th>quantite </th>
  </tr>
  <?php while( ($taa=mysqli_fetch_row($X))  ){?>


<tr>
  <td><img src="<?=$taa[0] ?>" width=30% height=30% ></td>
  <td><?=$taa[1]?></td>
  <td>   <?=$taa[2]?>DH   </td>
  <td>   <?=substr($taa[3],0,100)?>   </td>
  <td>   <?=$taa[4]?>   </td>
  <td>   <?=$taa[5]?>   </td>
  
</tr>

        <?php } ?>
</TABLE>


  </b>
      
  </body>
</html>