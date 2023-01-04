
<?php
session_start();
include "commande.php";



?>

<html>
    <head>
   
        <title> compte </title>
        <meta charset="utf-8">
        <style>
    
    label{
        width : 20%;
        display : inline-block;
        text-align : left;
    }
    body{
            width : 50%;
            overflow: hidden;
            font-family : arial;
            margin :5px auto;
            padding : 50px;
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
        input[type="password"], input[type="email"]{
            border-radius : 5px;
            padding : 10px;
            width : 70%;
            background-color : #ffff;
            margin : 20px;

        }
        input[type="submit"]{
            position :retative;
            padding : 10px;
            background-color: #000000;
            font-size : 18px;
            border : 2px solid #ffffff;
            border-radius : 20px;
            border: left 5px; 
            margin-top : 5px;
            font-style : bold;
            color :   #333;
           
        }
        input:hover{
        box-shadow: 2px 2px 5px #555;
        background-color: rgb(169, 156, 156);
    }/*
        ul{
            list-style-type : none;
            padding : 20px;
            overflow : hidden;
            margin : 10px;
            background-color :  #C0C0C0;
            margin : 10px;
        }*/
        li{
            display : inline;
            padding : 14px;
            
        }
        li a{
            color : #000000;
            padding : 10px;
            margin : 0px;
        }
    </style>
</head>
    <body>
      <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">-->
      <li class="nav-item active">
        
      <a class="navbar-brand" href="1erpage.php">
        <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg></svg>   <strong>  routeur a la page </h4> </strong> </a>
    
      
     </ul>
     </div>
    
    </nav>

      <fieldset>
        <legend> <h1> Compte </h1> </legend>
<form method="post">
    <label><h4>Email</h4> </label><input type="email" name="email" size=20 placeholder="votre email "><br>
    <label><h4>Mot de passe</h4></label><input type="password" name="pass" size=20 placeholder="votre mot de passe "><br>
    <label><h4></h4></label><input type="submit" name="ok"  value="connexion"><br>

</form>
</fieldset>
<a href="sing-up.php" >vous n'avez pas de compte?</a>
</body>
</html>
<?php

if(isset($_POST['ok'])){
  
   if( isset($_POST['email']) and isset($_POST['pass'])){
     
        if(!empty($_POST['email']) and !empty($_POST['pass'])){
       
       $email=htmlspecialchars(strip_tags($_POST['email']));
       $mot=htmlspecialchars(strip_tags($_POST['pass']));
         
       
      $admin=getadmin($email,$mot);
      $client=getclient($email,$mot);

if($admin){
  $_SESSION['zWuppkgTT6o0Y44']=$admin;
  header("Location: compte-admine.php");
}else if($client){
  $_SESSION['AAAAAAAA']=$client;
  header("Location: Cmpersonne.php");

}else{echo " Problime de connection !!!";}
    }
    }
}
?>