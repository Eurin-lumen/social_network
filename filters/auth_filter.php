<?php
if(!isset($_SESSION['user_id']) && !isset($_SESSION['pseudo'])){
    header('Location:login.php');
    exit();
}