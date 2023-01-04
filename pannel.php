<?php
session_start();
require("commande.php");
$a=$_SESSION['AAAAAAAA'];
$nb=$a[0];
$Pr=aff($nb);


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
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }   label{
        width : 70%;
        display : inline-block;
        text-align : left;
        color :  #000000;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      input[type="number"]{
            border-radius : 4px;
            padding : 10px;
            width : 25%;
            background-color : #ffff;
            margin : 20px;

        }
        input[type="submit"]{
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
  <body><b>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"   href="Cmpersonne.php" >Mon compte </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="produitvente.php" >les produits  </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active " href="pannel.php"  style="font-weight: bold" >Confirmation d'achat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  " href="1erpage.php" style="font-weight: bold">deconnecte</a>
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

<main>

 

  <div class="album py-5 bg-light"   width=40% height=40%>
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<?php while($taa=mysqli_fetch_row($Pr)){?>

        <div class="col"  >
          <div class="card shadow-sm">
           <title><?=$taa[1] ?></title><img src="<?=$taa[0] ?>" >

            <div class="card-body">
              <p class="card-text"><?=substr($taa[3],0,100)?> </p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">



              <form  method="post" >
                     
  <button type="submit"   name="<?=$taa[6]?>" >confirme </button>
          
  <button type="submit"   name="<?=$taa[6].$taa[2]?>" >supprimer</button>
</form>

                </div>
                <small class="text-muted"><FONT COLOR="#000000" ><?=$taa[2]?> DH</font></small>
              </div>
            </div>
          </div>
          </div>
          <?php } ?>
         </div>
    </div>
  </div>
</main>
<?php
do{$idpro=0;
  $E=aff($nb);
  while($taa=mysqli_fetch_row($E)){
$chain=$taa[4];
$tab=explode(" ",$chain);
$anne=explode("-",$tab[0]);
$time=explode(":",$tab[1]);


$mint=$time[0]*60+$time[1]+$anne[0]*365*24*60+$anne[1]*30*24*60+$anne[2]*24*60;

$mintt=$mint+60;
$aj=getdate();
$day=$aj['mday'];
$mm=$aj['mon']; $y=$aj['year'];
  $j=$aj['hours'];
  $m=$aj['minutes'];
  $de=$j*60+$m+$y*365*24*60+$mm*30*24*60+$day*24*60;
if($de>=$mintt){
    $qte=$taa[5];
    $idpr=$taa[6];
    supppannel($nb,$idpr,$qte);
}


 if(isset($_POST[$taa[6]])){
  
  $aj=getdate();
  $j=$aj['mday'];
  $m=$aj['mon'];
  $y=$aj['year'];
  $date="$y-$m-$j";
  $qte=$taa[5];
  $idpro=$taa[6];
  ajoutepannel($nb,$idpro,$date,$qte);
}
}}while($idpro=0);

do{$idpr=0;
  $s=aff($nb);
  while($taa=mysqli_fetch_row($s)){
 if(isset($_POST[$taa[6].$taa[2]])){
  
  
  $qte=$taa[5];
  $idpr=$taa[6];
  supppannel($nb,$idpr,$qte);
}
}}while($idpr=0);
?></b>