
<?php $title  = "Connexion"; ?>

<?php include('partials/_header.php'); ?>

<?php include('partials/_nav.php');?>


  <div id="main-content">
      <div class="container">
        <h1 class="">Connexion </h1>
        <?php include('partials/_error.php');?>

        <form data-parsley-validate method="post" class="well col-md-6"  >
          <!-- Name field -->
          <div class="form-group">
          </div>
              <!-- Identifiant field -->
              <div class="form-group">
              <label for="identifiant" class="control-label">Pseudo ou Addresse e-mail: </label>
              <input type="text" value="<?= get_input('identifiant')?>" data-parsley-minlenght="3" name="identifiant" value="" class="form-control"id="pseudo"required/>


              <!-- Password field -->
              <div class="form-group">
              <label for="password" class="control-label">Mot de passe: </label>
              <input type="password" name="password" value="" class="form-control" id="password" required/>

          </div>
          <input type="submit" value="Connexion" name="login" class="btn btn-primary">


        </form>
      </div>
  </div>

  <?php include('partials/_footer.php'); ?>