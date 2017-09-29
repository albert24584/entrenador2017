
        <?php require_once "section/header.php"; ?>
        <?php require_once "section/nav.php"; ?>
        <main class="container">
          <div class="row">
      <div class="col-md-8">
        <h1><?php echo $data["tema"]['titulo']; ?></h1>
        <h2><?php echo $data["pregunta"]['pregunta']; ?></h2>
        <?php
        foreach($data["respostes"] as $resposta){

          echo "<p>".$resposta['respuesta']."</p>";
        } 
        
         ?>
      </div>
    </div>
  </main>

        <?php require_once "section/footer.php"; ?>
    