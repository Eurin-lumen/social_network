<?php
   if(isset($errors)&& count($errors) !=0){
    echo '<div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" arial-hidden="true">&times;<button>';
        foreach($errors as $error){
            echo $error.'<br>';
        }
    echo '</div>';
}