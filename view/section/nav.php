
  <div class="container">
      <div class="masthead">
        <h3 class="text-muted">Home</h3>

        <nav class="navbar navbar-light bg-faded rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="glyphicon glyphicon-align-justify"></span>
          </button>
          <div class="collapse navbar-toggleable-md" id="navbarCollapse">
            <ul class="nav navbar-nav text-md-center justify-content-md-between">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Preguntas por tema</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Crear preguntas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Estadistica</a>
              </li>

               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Preguntas por temas <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <?php 

                    foreach($data['tema'] as $tema){

                      echo '<li><a href="temas/'.$tema["id"].'">'.$tema["titulo"].'</a></li>';
                    }
                    ?>
                  </ul>
                </li>


            </ul>
          </div>
        </nav>
      </div>
