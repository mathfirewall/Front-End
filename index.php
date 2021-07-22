<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "shortcut icon" type="image/x-icon" href="imagens/favicon.ico">
    <!---classe css editavel a ajustes -->
    <link href="css/estilo.css" rel="stylesheet">
    
    <!---classe css do bootstrap não mexer -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <title>Evolution Technology</title>
</head>
<body>
  
    <h1 class="titulo">Evolution Technology</h1>
    <!---esse container é usado pela nav os menus -->  
    <div class="container">
      <nav class="navbar ">
        <div style="padding-left: 25%;" >
          <a class="btn btn-outline-dark" style="color: white;" href="index.php">Home</a>
          <a class="btn btn-outline-dark" style="color: white;" href="sobre.php">Sobre</a>
          <a class="btn btn-outline-dark" style="color: white;" href="produtos.php">Produtos</a>
          <a class="btn btn-outline-dark" style="color: white;" href="servicos.php">Serviços</a>
          <a class="btn btn-outline-dark" style="color: white;" href="faleconosco.php">Fale Conosco</a>
      </div>
        </nav>
    </div>
      <!---carrousel --> 
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active ">
            <img class="d-block w-100" style="height: 425px;"  src="imagens/humano.png" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 425px;" src="imagens/investimento.jpg" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 425px;" src="imagens/setor-comercial.jpg" alt="Terceiro Slide">
          </div>
        </div>
      </div>

      <footer>

        <p>Criado Por Thiago Araújo -> Aluno Da Estácio - AM</p>
    </footer> 

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>