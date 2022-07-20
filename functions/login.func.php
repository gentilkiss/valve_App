<?php
   function user_log($nom,$pass)
   {
    global $conn;
    // tableau des donnée 
    $data = array(
        'nom_user'=>$nom,
        'pass_user'=>$pass,
    );
    // requette sql
    $sql = "SELECT * FROM tb_utilisateur WHERE nom_user=:nom_user AND pass_user=:pass_user LIMIT 1";
    // preparation de la requette
    $req = $conn->prepare($sql);
    // execution de la requette et passation du tableau en parametre
    $req->execute($data);
    // verification des nombres des lignes
    $numrow = $req->rowCount();

    return $numrow;
   }
   function user_est_connecter($nom,$pass)
   {
    global $conn;
    $data = array
    (
        'nom_user'=>$nom,
        'pass_user'=>$pass,
    );
    $sql ="UPDATE tb_utilisateur SET isConnected='1' WHERE nom_user=:nom_user AND pass_user=:pass_user";
    $req = $conn->prepare($sql);
    $req->execute($data);
    $numrow = $req->rowCount();

    return $numrow;
   }
   function isadmin($passwrd,$privilege)
{
    global $conn;
    $sql = "SELECT * FROM tb_utilisateur WHERE  pass_user=:pass_user AND roleid=:roleid";
    $sql =$conn->prepare($sql);
    $sql->bindParam('pass_user',$passwrd,PDO::PARAM_STR);
    $sql->bindParam('roleid',$privilege,PDO::PARAM_STR);
    $sql->execute();
    $admin = $sql->rowCount();
    
    return $admin;
}
function session_ouvert($nom)
{
    global $conn;
    $sql = "SELECT * FROM tb_utilisateur WHERE nom_user=:nom_user AND  isConnected=1";
    $sql =$conn->prepare($sql);
    $sql->bindParam('nom_user',$nom,PDO::PARAM_STR);
    $sql->execute();
    $admin = $sql->rowCount();
    
    return $admin;
}
?>