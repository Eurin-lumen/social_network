<?php
session_start();
include('filters/guest_filter.php');
// inclure la connexion à la base de donnée de
require('config/database.php');
// requérir la fonction 
require('includes/functions.php');
// ajputer les constance
require('includes/constants.php');

// si le formulaire à eté soumis
    if(isset($_POST['login'])){
        // si tout les champs ont été remplis
        if(not_empty(['identifiant','password'])){
            extract($_POST);

            $q = $db->prepare("SELECT id, pseudo FROM users 
                               WHERE ( pseudo = :identifiant OR email = :identifiant)
                               AND password = :password  AND active ='1' ");
            $q->execute([
                'identifiant' => $identifiant,
                'password' => sha1($password)
            ]);

            $userHasBeenFound = $q->rowCount();

            if($userHasBeenFound){

                $user = $q->fetch(PDO::FETCH_OBJ);
                    die($user->pseudo);

                $_SESSION['user_id'] = $user->id;
                $_SESSION['pseudo'] = $user->pseudo;
                redirect('profile.php');
            }else{
                set_flash('Combination Identifiant/ Password Incorrect ! ', 'danger');
                save_input_data();
            }
        }


    }else{

        clear_input_data();
    }
?>

<?php require('views/login.view.php');?>
