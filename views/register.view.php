
<?php $title  = "Inscription"; ?>

<?php include('partials/_header.php'); ?>

<?php include('partials/_nav.php');?>


  <div id="main-content">
      <div class="container">
        <h1>Devenez dès à présent membre ! </h1>
        <?php include('partials/_error.php');?>
      

        <form method="post" class="well col-md-6" autocomplete="" >
          <!-- Name field -->
          <div class="form-group">
              <label for="name" class="control-label">Nom : </label>
              <input type="text" value="<?= get_input('name')?>" name="name" value="" class="form-control"  id="name" required/>
          
          </div>
              <!-- Pseudo field -->
              <div class="form-group">
              <label for="pseudo" class="control-label">Pseudo : </label>
              <input type="text" value="<?= get_input('pseudo')?>" name="pseudo" value="" class="form-control"id="pseudo"required/>
          
          </div>
              <!-- Email field -->
              <div class="form-group">
              <label for="email" class="control-label">Adresse Email : </label>
              <input type="email" value="<?= get_input('email')?>"name="email" value="" class="form-control" id="email" id="email" required/>
          
          </div>  
          
              <!-- Password field -->
              <div class="form-group">
              <label for="password" class="control-label">Mot de passe: </label>
              <input type="password" name="password" value="" class="form-control" id="password" required/>
          
          </div>
          
              <!-- Password confirmation  field -->
              <div class="form-group">
              <label for="password_confirm" class="control-label">Confirmer votre mot de passe : </label>
              <input type="password" name="password_confirm" value="" class="form-control" id="password_confirm" required/>
          
          </div>

          <input type="submit" value="Inscription" name="register" class="btn btn-primary">


        </form>
      </div>
  </div>
  
  <?php include('partials/_footer.php'); ?>