<?php
session_start();
require("commande.php");
$a=$_SESSION['AAAAAAAA'];
$nb=$a[0];
$Pr=afficher();


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
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
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
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"   href="Cmpersonne.php" style="font-weight: bold">Mon compte </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="produitvente.php"   style="font-weight: bold">les produits  </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link  " href="pannel.php" style="font-weight: bold">Conformation d'achat</a>
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
<center><p style="color:red"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
  <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
</svg><b>important de confirmer l'operation d'achat avant 1h.</b></p></center>
<main>

 <b>

  <div class="album py-5 bg-light"   width=40% height=40%>
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<?php while($taa=mysqli_fetch_row($Pr)){?>

        <div class="col"  >
          <div class="card shadow-sm">
           <title><?=$taa[2] ?></title><img src="<?=$taa[1] ?>" >

            <div class="card-body">
              <p class="card-text"><?=substr($taa[4],0,100)?> </p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">



              <form  method="post" >
                 la qauntite :
              <input type="number" name="<?=$taa[0].$taa[3]?>"  required><br>
  <button type="submit"   name="<?=$taa[0]?>" >acheter </button>

</form>

                </div>
                <small class="text-muted"><FONT COLOR="#000000" ><?=$taa[3]?> DH</font> </small>
              </div>
            </div>
          </div>
          </div>
          <?php } ?>
         </div>
    </div>
  </div>

</b>

</main>



      
  </body>
</html>
<?php
do{$idpro=0;
  $qte=0;
  $E=afficher();
  while($taa=mysqli_fetch_row($E)){
 if(isset($_POST[$taa[0]])){

  $date=date("Y-m-d H:i:s");
  $idpro=$taa[0];
  $qte=$_POST[$taa[0].$taa[3]];
  
  if( $qte!=0){
  ajoutep($idpro,$nb,$date,$qte);}
 }
 $qte=0;

}}while($idpro=0);
?>
