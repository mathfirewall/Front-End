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
       <!---container usado pela card -->
      <div class="container" style="padding-left: 10%;">
         <!---card é a classs bootstrap -->
        <div class="card card-serv">
          <img class="card-img-top" src="imagens/02.png" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Desenvolvimento de Web Sites</h5>
            <p class="card-text">Desenvolvemos Sites Profissionais, Seguros e Rápidos. Aproveite Nosso Desconto de Dezembro</p>
            <a href="#" class="btn btn-primary btnserv">Saiba Mais</a>
          </div>
        </div>
        <!---card é a classs bootstrap -->
        <div class="card card-serv">
          <img class="card-img-top" src="imagens/03.png" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Hospedagem de Dominios</h5>
            <p class="card-text">Hospedagem de sites com SSL e domínio grátis no primeiro mês. A partir de R$ 33,00 mensais você conta com um servidor de qualidade e com o melhor preço.</p>
            <a href="#" class="btn btn-primary " style="margin-top: -5px;">Saiba Mais</a>
          </div>
        </div>
        <!---card é a classs bootstrap -->
        <div class="card card-serv" >
          <img class="card-img-top" src="imagens/01.png" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Manutenção de Computadores</h5>
            <p class="card-text">Para o correto funcionamento o Windows deve ser limpo e otimizado em determinados períodos.</p>
            <a href="#" class="btn btn-primary" style="margin-top: 100px;">Saiba Mais</a>
          </div>
        </div>
        <!---card é a classs bootstrap -->
        <div class="card card-serv">
          <img class="card-img-top" src="imagens/04.png" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Consultoria em TI</h5>
            <p class="card-text">Ajudaremos nas melhores soluções para montar sua estrutura de tecnologia, a estabelecer processos e investir em novos projetos.</p>
            <a href="#" class="btn btn-primary" style="margin-top: 90px;">Saiba Mais</a>
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