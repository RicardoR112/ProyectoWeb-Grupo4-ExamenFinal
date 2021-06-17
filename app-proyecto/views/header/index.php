
  <header id="navegacion">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a href="index.php" id="ancla"><img  class="navbar-brand" style="width: 120px; height: 88px;" src="assets/images/logo.png" alt="logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo constant('URL'); ?>/login">Iniciar Sesion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo constant('URL'); ?>/signup">Registrarse</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>