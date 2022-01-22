<?php 
session_start();
// inclure la connexion à la base de donnée de
require('config/database.php');
// requérir la fonction 
require('includes/functions.php');
// ajputer les constance
require('includes/constants.php');

// si le formulaire à eté soumis
    if(isset($_POST['register'])){
        // si tout les champs ont été remplis
        if(not_empty(['name', 'pseudo','email', 'password', 'password_confirm'])){

                    $errors = [];
                    extract($_POST);

                    if(mb_strlen($pseudo) < 3 ){
                        $errors[] = "Pseudo trop court (Minimum trois caractères)";
                    }

                    if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $errors[] = "Addresse email invalide";
                    }
                    
                    if(mb_strlen($password) < 6 ){
                        $errors[] = " Mot de passe trop court (Minimum six caractères)";
                    }else{
                        if($password != $password_confirm){
                            $errors[] = "Les deux mots de passe ne concordent pas!";
                        }
                    }
                    // la fonction is_already_use sera developper plus tard
        
                    if(is_already_in_use('pseudo', $pseudo, 'users')){
                    
                        $errors[] = "Pseudo déja utilisé";
                    }

                    if(is_already_in_use('email', $email, 'users')){
                    
                        $errors[] = "Adress email déja utilisé";
                    }

                    if(is_already_in_use('pseudo', $pseudo, 'users')){
                    
                        $errors[] = "Pseudo déja utilisé !";
                    }

                    // compter le nombre d'erreur
                    if(count($errors) == 0){
                        // envoi de mail d'activation
                        $to = $email;
                        $subject = WEBSITE_NAME."- ACTIVATION DE COMPTE";
                        $token = sha1($pseudo.$email.$password);
                        //garder les informations au niveau de la memoire tampon
                        ob_start();
                        require('templates/emails/activation.php');
                        $content = ob_get_clean();// inclure des fichiers sans pour autant afficher son contenue

                        $headers = "MIME-Version: 1.0"."\r\n";
                        $headers .= "Content-Type: text/html; charset=UTF-8"."\r\n";

                        mail($to, $subject, $content, $headers);



                        // informer l'utilisateurs
                        //echo '<div class="alert alert-success"> Mail Activaction Envoyé </div>';

                        set_flash('<div class="alert alert-success"> Mail Activaction Envoyé </div>', "Success");
                        header('Location:index.php');
                        exit();

                    }
                }else
                    $errors[] = "Veuillez remplir tout les champs";

        }
?>

<?php require('views/register.view.php');?>
