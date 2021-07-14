<?php
     session_start();
     $_SESSION['tab_user']=array('moussa'=>'diouf','samba'=>'fall','ndeye'=>'penda','nouha'=>'badji');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
     <div class="row">
        <div class="col-md-4 offset-md-4">
        <form action="" method="POST">
        <div class="field">
            <label class="label">Username</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="text" placeholder="Text input" name="login">
                <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
                </span>
            </div>
            <p class="help is-success">This username is available</p>
            </div>
            <div class="field">
            <p class="control has-icons-left">
                <input class="input" name="password" type="password" placeholder="Password">
                <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
                </span>
            </p>
            </div>
            <div class="form-group">
                 <button  type="submit" name="btn_connecter" class="button is-link is-outlined">Connecter</button>
                 <button  type="reset"  class="button is-danger is-outlined">Annuler</button>
            </div>

        </form>
        </div>
     </div>
    </div>
    <?php
            if(isset($_POST['btn_connecter'])){
                if(!empty($_POST['login']) and !empty($_POST['password'])  ){
                    $login=$_POST['login'];
                    $password=$_POST['password'];
                    $trouve=false;
                     foreach( $_SESSION['tab_user'] as $loginT=>$passT){
                         if($loginT==$login AND $passT==$password){
                            $trouve=true;
                            $_SESSION['user']=$loginT;
                         }
                     }
                     if($trouve==true){
                        header("location:http://localhost/ACS/TEST/Projet2/?page=menu");
                        
                     }else {
                        unset($_SESSION['tab_user']);
                       
                    }
                    
                   
                }else {
                    echo "Merci de renseigner les valeur";
                }
                
                
            }
    ?>
</body>
</html>