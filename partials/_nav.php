
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"> <?= WEBSITE_NAME ?></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?= set_active('index')?>"><a href="index.php">Accueil</a></li>
            <li class="<?= set_active('login')?>" ><a href="login.php">Connexion</a></li>
            <li class="<?= set_active('register')?>"><a href="register.php">Inscription</a></li>
          </ul>
        </div>
      </div>
</div>

