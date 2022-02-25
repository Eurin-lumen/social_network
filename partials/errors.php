
<?php
echo '<div class="alert alert-danger">';
            echo '<button class="close " data-dismiss="alert" arial-hidden="true">&times;</button>';

            if(isset($errors) && count($errors) != 0){

                 include('partials/_error.php');
                        foreach($errors as $error){
                            echo $error.'<br/>';
                        }
    '</div>';

            }

            ?>
