<?php

    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Evolution Technology</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "shortcut icon" type="image/x-icon" href="imagens/favicon.ico">
        <!---classe css editavel a ajustes -->
        <link href="css/estilo.css" rel="stylesheet"/>
        <link rel="stylesheet" href="js/sweetalert2.min.css"/>
        

        <!---classe css do bootstrap não mexer -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <!--Sweet alert -->
        <script src="js/sweetalert2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.mask.min.js"></script>

        <script>
            
        $(document).ready(function(){
            
            $("#celular").mask("(00) 0 0000-0000")
        });
            
        </script>
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

        <!---aqui é o formulário -->
            <form id="formulario" method="POST" action="enviar.php">
                    <!--Mensagem Alerta Modal-->
                    <?php echo $_SESSION['mensagem'];
                        unset($_SESSION['mensagem']);
                    ?>
                <!---form-group é do bootstrap -->
                <div class="form-group">
                    <label for="nome" style="color: floralwhite;">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo" required="required" >
                </div>
                <!---form-group é do bootstrap -->
                <div class="form-group">
                    <label for="celular" style="color: floralwhite;">Celular</label>
                    <input type="text" name="celular" id="celular" class="form-control" placeholder="(92) 0 0000-0000" required="required">
                </div>

                
                <!---form-group é do bootstrap -->
                <div class="form-group">
                    <label for="email" style="color: floralwhite;">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required="required">
                </div>
            
                <!---form-group é do bootstrap -->
                <div class="form-group">
                    <label style="color:white">Mensagem</label>
                    <textarea id="mensagem" name="menssagem" class="form-control texto"></textarea>
                </div>

                <input type="submit" name="enviar" class="btn btn-outline-primary" value="Enviar"/>
          </form>

          
        
          <a href="https://api.whatsapp.com/send?phone=5592988415264&text=Ola!" target="_blank"><img class="imagem" src="imagens/whatsapp.png" alt="Flowers in Chania"></a>
            <footer>

                <p>Criado Por Thiago Araújo -> Aluno Da Estácio - AM</p>
            </footer> 
    
</body>
</html>