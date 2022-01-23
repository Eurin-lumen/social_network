<?php 
// creation des fonction 
// verifier si on n'a  donné des elements 
// verifier si chaque champs n'est pas vide 
// des qu'on trouve un champs qui est vide on retourne false 
// dans le cas contraire on retourne true
if(!function_exists('e')){
    function e($string ){
        if($string){
            return htmlspecialchars($string);
        }
        
    }
}

if(!function_exists('not_empty')){
    function not_empty($fields = []){
        if(count($fields) != 0 ){
            foreach($fields as $field){
                if(empty($_POST[$field])|| trim($_POST[$field]) == ""){
                    return false;
         
                }
            }return true;
        }

    }
}

/* une fonction qui verifie si l'addresse mail existe déja


*/
if(! function_exists('is_already_in_use')){
    function is_already_in_use($field, $value, $table){
        global $db;

        $q = $db->prepare("SELECT  id FROM $table WHERE  $field = ? ");
        $q ->execute([$value]);

        $q ->rowCount();// compter ke resultat

        // stocker le résultat

        $count = $q -> rowCount();

        $q -> closeCursor();
        // quand vous faites des requete de selection il faut a la fin fermer le curseur

        return $count;


    }
}


if(!function_exists('set_flash')){
    function set_flash($message, $type = 'info'){
        $_SESSION['notification']['message'] = $message;
        $_SESSION['notification']['type'] = $type;

    }
}


if(!function_exists('redirect')){
    function redirect($page){
        header('Location:' .$page);
        exit();
    }
}

if(!function_exists('save_input_data')){
    function save_input_data(){
        foreach($_POST as $key => $value){
            if(strpos($key, 'password') == false ){
                $_SESSION['input'][$key]= $value;


            }
        }
     }
}


if(!function_exists('get_input')){
    function get_input($key){
       /*  if(!empty($_SESSION['input'][$key])){
           return $_SESSION['input'][$key];
        }else{
            return null;
        }
     */

    return !empty($_SESSION['input'][$key])
    ? e($_SESSION['input'][$key])
    : null;
    } 

}
if(!function_exists('clear_input_data')){
    function clear_input_data(){
        if(isset($_SESSION['input']['input'])){
            $_SESSION['input'] = []; 
        }
    }
}

