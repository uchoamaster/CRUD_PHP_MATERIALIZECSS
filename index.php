<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" type="text/css" href="css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <nav class="light-blue accent-3">
        <div class="nav-wrapper container">
            <div class="brand-logo light">Sistema de Cadastro</div>
            <ul class="right">
                <li><a href=""><i class="material-icons left">account_circle</i> Cadastro</a></li>
                <li><a href=""><i class="material-icons left">search</i> Consultas</a></li>
            </ul>
        </div>
    </nav>

    <!-- formulário de cadastro -->
    <div class="row container">
    <p>&nbsp;</p>
        <form action="banco_de_dados/create.php" method="post" class="col s12">
            <fieldset class="formulario">
                <legend><img src="imagens/user1.png" alt="[imagem]" width="100"></legend>
                <h5 class="light center">Cadastro de Clientes</h5>
                <!-- campo nome -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
                    <label for="nome">Nome do Cliente </label>

                </div>

                <!-- campo email -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="text" name="email" id="email" maxlength="50" required >
                    <label for="email">Email do Cliente </label>
                </div>

                <!-- campo email -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input type="tel" name="telefone" id="telefone" maxlength="15" required >
                    <label for="telefone">Telefone do Cliente </label>
                </div>
                
            </fieldset>
        </form>
    </div>
 


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <!-- inicialização JQUERY -->
<script type="text/javascript">
    $(document).ready(function(){
        // alert("olá mundo");
    });
</script>
    </body>
  </html>
        