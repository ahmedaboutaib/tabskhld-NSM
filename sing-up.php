
<?php
require("commande.php");
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
            width : 70%;
            font-family : arial;
            margin :0px auto;
            padding : 10px;
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
        input[type="text"], input[type="number"],input[type="password"], input[type="email"]{
            border-radius : 5px;
            padding : 10px;
            width : 70%;
            background-color : #ffff;
            margin : 20px;
            
        }
        input[type="submit"]{
            position :relative;
            padding : 10px;
            font-size : 18px;
            margin-top : 5px;
            font-style : bold;
            color :   #333;
            background-color: #000000;
            border : 2px solid #ffffff;
            border-radius : 20px;
            border: left 5px; 
            margin-top : 5px;
            font-style : bold;
            
        }
        input:hover{
        box-shadow: 2px 2px 5px #555;
        background-color: rgb(169, 156, 156);
    }
       
    li{
            display : inline;
            padding : 4px;
            
        }
        li a{
            color : #000000;
            padding : 10px;
            margin : 0px;
        }
    </style>


</head>
    <body>
   
  <!--  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
    <a class="navbar-brand" href="1erpage.php">
    <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
</svg>   <strong>  routeur a la page </strong> </a>
    <a class="navbar-brand" href="sing-in.php"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg><strong>   connexion </h4>  </li> </strong> </a></h4> 
     
      
      
    </ul>
    </div>
  
</nav>

  


      <fieldset>
        <legend><h1> Créer un nouveau compte</h1> </legend>
<form method="post">
    <label><h4>nom </h4></label><input type="text" name="nom" size=20 placeholder="votre nom ici"><br>
    <label><h4>prenom </h4></label><input type="text" name="prenom" size=20 placeholder="votre prenom ici"><br>
    <label><h4>adresse</h4></label><input type="text" name="adr" size=20 placeholder="votre adresse ici"><br>
    <label><h4>numero de telephone </h4></label><input type="text" name="tel" size=20 placeholder="votre numero de tel ici"><br>
    <label><h4>email </h4></label><input type="email" name="email" size=20 placeholder="votre email ici"><br>
    <label><h4> mot de passe </h4></label><input type="password" name="pass" size=20 placeholder="votre mot de pass ici"><br>
    <label><h4></h4></label><input type="submit" name="ok"  value="enregistrer">
</form>
</fieldset>




 
</body>
</html>
<?php

if(isset($_POST['ok'])){
  
   if( isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['adr'] ) and isset($_POST['tel']) and isset($_POST['email']) and isset($_POST['pass'])){
     
        if(!empty($_POST['prenom']) and !empty($_POST['nom']) and !empty($_POST['adr'] )and !empty($_POST['tel'])
        and !empty($_POST['email']) and !empty($_POST['pass']))
        {
        $prenom=htmlspecialchars(strip_tags($_POST['prenom']));
       $nom=htmlspecialchars(strip_tags($_POST['nom']));
       $adr=htmlspecialchars(strip_tags($_POST['adr']));
       $tel=htmlspecialchars(strip_tags($_POST['tel']));
       $email=htmlspecialchars(strip_tags($_POST['email']));
       $mot=htmlspecialchars(strip_tags($_POST['pass']));
         
      
       try{
    echo
        $nbb=ajoute($nom,$prenom,$adr,$tel,$email,$mot);
        if($nbb==1){
        header("Location:create.php");}
       }catch(Exception $e){
        $e->getMessage();
       }

        }
    }
}
?>