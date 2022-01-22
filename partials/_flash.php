<?php
if(isset($_SESSION['notification'] ['message'])):?>
   <div class="container">
    <div class="alert alert-<?= $_SESSION['notification'] ['type']?>" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4><?= $_SESSION['notification'] ['message']?></h4>
        </div>
   </div>

    <?php  $_SESSION['notification']=[];?>

<?php endif;?>