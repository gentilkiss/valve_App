<?php
// user_log($nom,$pass);
if (isset($_POST['log'])) 
{
// recuperation des valeur du emmit par le formulaire
    $nom_user = $_POST['nom_user'];
    $pass_user = sha1($_POST['pass_user']);
    $pri =1;
    $priv=2;
    $row_Admin = isadmin($pass_user,$pri);
    $row_Etudiant = isadmin($pass_user,$priv);
    //  verification du nom et mot de passe
    if (user_log($nom_user,$pass_user)>0) 
    {
        
        //  verification si ce le chef de Adminulter
        if ($row_Admin>0)
        {
            // verification si il est connecter
            $row = user_est_connecter($nom_user,$pass_user);
            if ($row>0) 
            {
                // si ce vrai initialisation de la session en tant ayant droit d'accée au system
                $_SESSION['userA']=user_log($nom_user,$pass_user);
                $_SESSION['admin']=isadmin($pass_user,$pri);
                header('Location:pages/Admin/index.php?page=Acceuille');
            }
            // si il l'admin veut se connecter avec un autre appareil
            elseif (session_ouvert($nom_user)>0) 
            {
                // si ce vrai initialisation de la session en tant ayant droit d'accée au system
                $_SESSION['userA']=user_log($nom_user,$pass_user);
                $_SESSION['admin']=isadmin($pass_user,$pri);
                header('Location:pages/Admin/index.php?page=Acceuille');
            }
            else 
            {
                echo'<script>alert("Impossible de vous connecter cela due à des raisons inconue veuille vous connecter ulterieurement")';
            }

        }
        elseif($row_Etudiant >0)
        {
            $_SESSION['user']=user_log($nom_user,$pass_user);
            $_SESSION['normal']=isadmin($pass_user,$priv);
            header('Location:index.php?page=Acceuille');
        }
    }
    else 
    {
        echo'<script> alert("Nom ou mot de pass incorect") </script>';
    }
}

?>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><span class="splash-description">SVP! enter les informations de votre compte.</span></div>
            <div class="card-body">
                <form method="POST" autocomplete="off" >
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" name="nom_user" type="text" placeholder="Nom d'utilisateur" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="pass_user" type="password" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="remember" type="checkbox"><span class="custom-control-label">Se souvenir de moi</span>
                        </label>
                    </div>
                    <button type="submit" name="log" class="btn btn-success btn-lg btn-block">Connecter</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="index.php?page=register" class="footer-link">Créer un compte</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Code oublé</a>
                </div>
            </div>
        </div>
    </div>
  
    