<?php $title  = "Accueil"; ?>

<?php include('includes/constants.php'); ?>
<?php include('partials/_header.php'); ?>

<?php include('partials/_nav.php');?>


  <div id="main-content">
    <div class="container">
      <div class="jumbotron">
          <h1><?= WEBSITE_NAME ; ?> ?</h1>
            <p>
            <?= WEBSITE_NAME ; ?>est un réseau social pour développeurs &#9993;. <br>
            Et qui dit développeur dite code source! &#9997; <br>

            Grace à cette plateforme, vous avez la possibilité de tisser de nouveaux liens d'amitiés avec 
            d'autre développeurs,échangers des codes sources. &#9786; <br>
            Recevoir de l'aide si vous rencontrer des problèmes sur l'un de vos projets et bien plus encore.  <br>

            Alors n'hésitez plus et <a href="register.php">Rejoingnez-nous dès maintenant</a> &#9786; <br>
            </p>

            <a href="register.php" class="btn btn-primary btn-lg">Créer un compte</a>
      </div>
    </div>
  </div>
  
  <?php include('partials/_footer.php'); ?>
