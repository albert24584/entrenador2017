<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Entrenador 2017</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="justified-nav.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  </head>
  <body>
    <?php require_once "section/header.php"; ?>
    <?php require_once "section/nav.php"; ?>
  <form>
      <div class="form-group col-lg-12">
        <label for="exampleInputEmail1">Pregunta</label>
        <input type="pregunta" class="form-control" id="exampleInputEmail1">
      </div>
      <div class="form-group col-lg-12">
        <label for="exampleInputPassword1">Tema</label>
          <select class="form-control">
            <option value="1">select</option>
            <option value="1">Mates</option>
            <option value="1">Fisica</option>
            <option value="1">Quimica</option>


          </select>


      </div>
      <div class="form-group col-lg-12">
        <label for="exampleInputFile">Respuesta</label>


      </div>
      <div class="form-group col-lg-12">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Text input with checkbox">
            <span class="input-group-addon">
              <input type="radio" name="a" aria-label="Checkbox for following text input">
            </span>
          </div>
      </div>
      <div class="form-group col-lg-12">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Text input with checkbox">
            <span class="input-group-addon">
              <input type="radio" aria-label="Checkbox for following text input">
            </span>
          </div>
      </div>
      <div class="form-group col-lg-12">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Text input with checkbox">
            <span class="input-group-addon">
              <input type="radio" aria-label="Checkbox for following text input">
            </span>
          </div>
      </div>
      <div class="form-group col-lg-12">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Text input with checkbox">
            <span class="input-group-addon">
              <input type="radio" aria-label="Checkbox for following text input">
            </span>
          </div>
      </div>



      <button type="submit" class="btn btn-default">Crear</button>
 </form>
  </body>
</html>
