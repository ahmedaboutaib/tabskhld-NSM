<?php

function ajouteproduit($image,$nom,$prix,$desc,$stock){
    if(require("connection.php")){
 $ch="insert into produit(image,nom,prix,description,nbstock) 
 values('$image','$nom','$prix','$desc','$stock');";
  $a=mysqli_query($con,$ch);      
        if(!$a){ 
            $chrr="update produit set nbStock=(nbstock+$stock) where image='$image'";
            $re=mysqli_query($con,$chrr); 
       }
    }
    mysqli_close($con);
    }
    

function ajoute($nom,$prenom,$adrr,$tel,$email,$mot){
if(require("connection.php")){
    $che="insert into client(nom,prenom,adresse,tel,email,motedpasse)
     values('$nom','$prenom','$adrr','$tel','$email','$mot');";
    $a=mysqli_query($con,$che);
    if(!$a){exit("error de l'insertion " );}
    else {return (1);}
    
mysqli_close($con);
}
}
function afficher(){
    if(require("connection.php")){
        $ch="select * from produit  where nbstock!=0  order by idpro desc ";
        $data=mysqli_query($con,$ch);
     
        return ($data);
    mysqli_close($con);
    }
}
function affich(){
    if(require("connection.php")){
        $ch="select * from produit  order by idpro desc ";
        $data=mysqli_query($con,$ch);
     
        return ($data);
    mysqli_close($con);
    }
}

function supprimer($id){
    if(require("connection.php")){
        $chr=" update produit set nbStock=0 where idpro=$id;  ";
        $res=mysqli_query($con,$chr);
        mysqli_close($con);
    }
}


function getadmin($email,$mot){
    if(require("connection.php")){
        $req="select * from admin where email='$email' and modpass='$mot'";
        $res=mysqli_query($con,$req);
        if($res){
            $data=mysqli_fetch_row($res);
            return ($data);
           
            
        }
        mysqli_close($con);
    }
}
function getclient($email,$mot){
  
    if(require("connection.php")){
      
        $req="select * from client where email='$email' and motedpasse='$mot'";
        $res=mysqli_query($con,$req);
        $nm=0;
       $nm=mysqli_num_rows($res);
        if($nm==1){
            $data=mysqli_fetch_row($res);
            $nb=$data[0];
           
            return ($data);
            }

        mysqli_close($con);
    }
}

function ajouteV($idcli,$idpro,$date,$qte){
    if(require("connection.php")){
        $che="insert into vente  values('$idpro','$idcli','$date','$qte');";
        $ch=" select * from vente  where idpro=$idpro and id=$idcli";
       $chr="update vente set qte=(qte+$qte),datepro='$date' where idpro=$idpro and id=$idcli";
       $chrr="update produit set nbStock=(nbstock-$qte) where idpro=$idpro and nbstock>=$qte";
       $chw=" select * from produit  where idpro=$idpro";

       $resw=mysqli_query($con,$chw);
       $ne=mysqli_fetch_row($resw);
       $na=$ne[5];

       $re=mysqli_query($con,$chrr);
       if($na<$qte){
        exit(" la quantite n'exist pas !!");
       }else{
       $res=mysqli_query($con,$ch);
        $nm=mysqli_num_rows($res);
if($nm==1){ 

    $rrrr=mysqli_query($con,$chr); }
else{
        $a=mysqli_query($con,$che);
        if(!$a){exit("error de l'insertion " );}
    }}
    mysqli_close($con);
    }
    }
    
    function affichr($nb){
        if(require("connection.php")){
            $ch="select image,nom,prix,description,datepro,qte 
            from produit,vente where produit.idpro=vente.idpro and id=$nb order by datepro desc;";
            $data=mysqli_query($con,$ch);
         
            return ($data);
        mysqli_close($con);
        }
    }
    function aff($nb){
        if(require("connection.php")){
            $ch="select image,nom,prix,description,datepro,qte,pannel.idpro 
            from produit,pannel where produit.idpro=pannel.idpro and id=$nb order by datepro desc;";
            $data=mysqli_query($con,$ch);
         
            return ($data);
        mysqli_close($con);
        }
    }
    function affichage(){
        if(require("connection.php")){
            $ch="select image,produit.nom,client.nom,client.prenom,prix,description,datepro,qte 
            from produit,vente,client where produit.idpro=vente.idpro and client.id=vente.id  order by client.nom,datepro desc;";
            $data=mysqli_query($con,$ch);
         
            return ($data);
        mysqli_close($con);
        }
    }

    


    function ajoutep($idpro,$idcli,$date,$qte){
        if(require("connection.php")){
            $che="insert into pannel  values('$idpro','$idcli','$date','$qte');";
            $ch=" select * from pannel where idpro=$idpro and id=$idcli";
           $chr="update pannel set qte=(qte+$qte),datepro='$date' where idpro=$idpro and id=$idcli";
           $chrr="update produit set nbStock=(nbstock-$qte) where idpro=$idpro and nbstock>=$qte";
           $chw=" select * from produit  where idpro=$idpro";
    
           $resw=mysqli_query($con,$chw);
           $ne=mysqli_fetch_row($resw);
           $na=$ne[5];
    
           $re=mysqli_query($con,$chrr);
           if($na<$qte){
            exit(" la quantite n'exist pas !!");
           }else{
           $res=mysqli_query($con,$ch);
            $nm=mysqli_num_rows($res);
    if($nm==1){ 
    
        $rrrr=mysqli_query($con,$chr); }
    else{
            $a=mysqli_query($con,$che);
            if(!$a){exit("error de l'insertion " );}
        }}
        mysqli_close($con);
        }
        }
        function ajoutepannel($idcli,$idpro,$date,$qte){
            if(require("connection.php")){
                $che="insert into vente  values('$idpro','$idcli','$date','$qte');";
                $ch=" select * from vente  where idpro=$idpro and id=$idcli";
               $chr="update vente set qte=(qte+$qte),datepro='$date' where idpro=$idpro and id=$idcli";
               
              
               $res=mysqli_query($con,$ch);
                $nm=mysqli_num_rows($res);
        if($nm==1){ 
        
            $rrrr=mysqli_query($con,$chr); }
        else{
                $a=mysqli_query($con,$che);
                if(!$a){exit("error de l'insertion " );}
               
            }
            $chx="delete from pannel where id=$idcli and idpro=$idpro";
            $aa=mysqli_query($con,$chx);
            if(!$aa){exit("error de supprition " );}
            mysqli_close($con);
            }
            }
            
            function supppannel($idcli,$idpro,$qte){
                if(require("connection.php")){
                   $ch="update produit set nbstock=(nbstock+$qte) where idpro=$idpro ";
                   
                  
                   $res=mysqli_query($con,$ch);
            
                $chx="delete from pannel where id=$idcli and idpro=$idpro";
                $aa=mysqli_query($con,$chx);
                if(!$aa){exit("error de supprition " );}
                mysqli_close($con);
                }
                }
                

?>