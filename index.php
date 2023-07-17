<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LADDING PAGE</title>

    <!--CSS-->
      <link rel="stylesheet" href="assets/css/estilo.css">
    
    <!--LINK FONT AWESSOME-->
    <script src="https://kit.fontawesome.com/e56cfcec1d.js" crossorigin="anonymous"></script>

    <!--LINK DO BOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
       



    <!--LINK DO JQUERY-->
    <script src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>



</head>
<body>
    <!--NAV BAR-->
<div id="fundo1">    
    <div class="container">
      
        <nav class="navbar navbar-light">
 

              <a style="margin-top:20px; font-family: 'Roboto', sans-serif; font-size: 25px; color:#fff; font-weight: bold"  class="navbar-brand" href="#" id="logo">LOGO TIPO</a>

             <span class="navbar-text" style="margin-top:20px; border-radius:10px;
             margin-right:7%; padding:10px; background-color:white; font-family: 'Roboto', sans-serif;">
               <h6 style="font-weight: bold">(81) 91234-5678</h6>
             </span>
            
        </nav>
    
        <div class="row justify-content-between" id="form-area" style="margin-top:15px;">
            
            <div class="col-lg-5" style="display: flex;flex-direction: column; align-items: center; justify-content: center; height:500px; ">
                    <h5 id="chamada1" class="card-title" style="font-size:50px">Aqui vai a sua headline.Foque na transformação que seu produto gera</h5>
                    <p class="card-text" style="font-size:25px">Subtitulo para complemento da headline e para algumas informações que ajude na hora de descrever produto oou serviço</p>
             </div>
   

          

            <div class="col-lg-5" style="height:500px; display: flex;flex-direction: column; align-items: center; justify-content: center; margin:50px;">
             <div id="fundo-form" style="background-color:#fff; padding:20px; border-radius:10px;">
               <form id="formulario" action="enviar.php" method="POST">
                <center>
                <h2 style="font-size:25px; color:#5B6E81;">ENTRE EM CONTATO CONOSCO</h2>
               <div class="mb-3">
                    <input name="nome" type="text" class="form-control" placeholder="NOME:" id="nomeInput">
                    <div id="nomeAviso" class="form-text" style="display:none;">Mensagem de aviso do nome</div>
                </div>



                <div class="mb-3">

                    <input type="email" class="form-control" name="email" id="emailInput" placeholder="EMAIL:">
                    <div id="emailHelp" class="form-text" style="display:none;">Mensagem aviso do email</div>

                    </div>

             

                <div class="mb-3">
                    <input type="text" class="form-control" name="telefone" id="telefoneInput" placeholder="DDD + TELEFONE:">
                    <div id="telefoneAviso" class="form-text" style="display:none;">Mensagem aviso do telefone</div>
                </div>

             

                <div class="mb-3">
                  
                     <textarea id="mensagemInput" type="text" name="mensagemInput" class="form-control"  rows="3" placeholder="DIGITE SUA MENSAGEM" style=" resize: none;"></textarea>
                     
                </div>

                    <button id="botaoInput" type="submit" class="btn btn-primary" style="background-color: #505c66; border-color: #505c66;">Chamada Para Ação</button>
                    </center>
                </form>
                </div><!--FUNDO FORM-->
            </div>


        </div>
    </div><!--FECHAMENTO CONTAINER 1-->

</div><!--FECHAMENTO FUNDO-->

<div class="container" ><!--FUNDO 2-->

    <div class="row justify-content-between" id="quemSomos" >
        <div class="col-lg-6" style="height:400px; ">
        <img id="imagemQuemSomos"  src="./assets/imagem/ImagemQuemSomos.jpg" class="rounded float-end card-img anime ">
    </div>
    <div class="col-lg-6" style="display: flex;flex-direction: column; align-items: center; justify-content: center; height:400px;">

        <h5 class="card-title" style="font-size:40px; text-align:left; color:#5B6E81;">Quem Somos</h5>
  
        <p class="card-text" style="font-size:20px; color:#5B6E81;">Aqui va um texto de uma breve descrição sobre a sua empressa ou o seu serviço e o que você pretende</p>
    </div>

    </div>

</div><!--FUNFDO 2-->

<div id="fundo3" style="color:#5B6E81;"><!--FUNDO 3-->

<div class="row" style="margin-top:4%;">
  <div class="col-12">
  <h1 id="#tituloServico" style="text-align: center; color:#505c66;">Com este serviço você:</h1>
  </div>
</div>


<div class="container" style="margin-top:4%;">
  <div class="row justify-content-center efeitoFade" style="margin-top:20px;">
    <div class="col-md-6">
      <div class="d-flex justify-content-center">
        <i class="fas fa-sack-dollar fa-3x align-self-top" style="margin-right:20px; color:#505c66;"></i>
        <div class="ml-3" style="width:70%;">
          <h4 style="color:#505c66;">Benefício do Serviço</h4>
          <p>Insira o beneficio do seu produto gera bem aqui.Mais Tempo ? Mais Dinheiro ? Mais Produtividade ? Prazo de atendimento ? Economia ? Preço ? </p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="d-flex justify-content-center">
        <i style="margin-right:20px; color:#505c66;" class="fa-solid fa-shop fa-3x align-self-top"></i>
        <div class="ml-3" style="width:70%;">
          <h4 style="color:#505c66;">Benefício do Serviço</h4>
          <p>Insira o beneficio do seu produto gera bem aqui.Mais Tempo ? Mais Dinheiro ? Mais Produtividade ? Prazo de atendimento ? Economia ? Preço ?</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center efeitoFade" style="margin-top:20px;">
    <div class="col-md-6">
      <div class="d-flex justify-content-center">
        <i style="margin-right:20px; color:#505c66;" class="fa-solid fa-shop fa-3x align-self-top"></i>
        <div class="ml-3" style="width:70%;"><!--LEMBRAR DE MEXER AQUI DPS NO STYLE DESSA DIV-->
          <h4 style="color:#505c66;">Benefício do Serviço</h4>
          <p>Insira o beneficio do seu produto gera bem aqui.Mais Tempo ? Mais Dinheiro ? Mais Produtividade ? Prazo de atendimento ? Economia ? Preço ?</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="d-flex justify-content-center">
        <i style="margin-right:20px; color:#505c66;" class="fa-solid fa-shop fa-3x align-self-top"></i>
        <div class="ml-3" style="width:70%;">
          <h4 style="color:#505c66;">Benefício do Serviço</h4>
          <p>Insira o beneficio do seu produto gera bem aqui.Mais Tempo ? Mais Dinheiro ? Mais Produtividade ? Prazo de atendimento ? Economia ? Preço ?</p>
        </div>
      </div>
    </div>
  </div>

  <div style="margin-top:20px;" class="row justify-content-center efeitoFade">
    <div class="col-md-6">
      <div class="d-flex justify-content-center">
        <i style="margin-right:20px; color:#505c66;" class="fa-solid fa-shop fa-3x align-self-top"></i>
        <div class="ml-3" style="width:70%;">
          <h4 style="color:#505c66;">Benefício do Serviço</h4>
          <p>Insira o beneficio do seu produto gera bem aqui.Mais Tempo ? Mais Dinheiro ? Mais Produtividade ? Prazo de atendimento ? Economia ? Preço ?</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="d-flex justify-content-center">
     
        <i style="margin-right:20px; color:#505c66;" class="fa-solid fa-shop fa-3x align-self-top"></i>
        <div class="ml-3" style="width:70%;">
          <h4 style="color:#505c66;">Benefício do Serviço</h4>
          <p>Insira o beneficio do seu produto gera bem aqui.Mais Tempo ? Mais Dinheiro ? Mais Produtividade ? Prazo de atendimento ? Economia ? Preço ?</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12" style="text-align: center; margin-top:25px;">
  <button id="botaoInput" type="submit" class="btn btn-primary" style="background-color: #505c66; border-color: #505c66;">Chamada Para Ação</button>
    </div>
  </div>
  
</div>
<!--TESTE-->

</div><!--FUNDO 3-->

        <h2 style="text-align:center; color:#5B6E81;margin-top:30px;">Perguntas Frequentes(Clique nas perguntas)</h2>


<div style="height:550px;"><!--FUNDO 4-->

<div class="container" style="margin-top:30px;">

<div class="accordion" id="accordionExample" >

  <div class="accordion-item" style="border:none;">
    <h2 class="accordion-header" id="headingOne" style="border: 2px solid #5B6E81;">
      <button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="box-shadow: none; background-color:transparent; width:90%; border:none; margin:10px;text-align:start; color:#5B6E81;">
        Quando vou começar a ver os resultados da minha campanha ?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Aqui uma resposta mais completa para essa pergunta que esta acima podendo se responder varios questionamentos
      </div>
    </div>
  </div>

  <div class="accordion-item" style="border:none; margin-top:30px;">
    <h2 class="accordion-header" id="headingTwo" style="border: 2px solid #5B6E81;">
      <button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="box-shadow: none; background-color:transparent; width:90%; border:none; margin:10px;text-align:start; color:#5B6E81;">
        Quando vou começar a ver os resultados da minha campanha ?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Aqui uma resposta mais completa para essa pergunta que esta acima podendo se responder varios questionamentos
      </div>
    </div>
  </div>

  <div class="accordion-item" style="border:none; margin-top:30px;">
    <h2 class="accordion-header" id="headingThree" style="border: 2px solid #5B6E81;">
      <button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="box-shadow: none; background-color:transparent; width:90%; border:none; margin:10px;text-align:start; color:#5B6E81;">
        Quando vou começar a ver os resultados da minha campanha ?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Aqui uma resposta mais completa para essa pergunta que esta acima podendo se responder varios questionamentos
      </div>
    </div>
  </div>

  <div class="accordion-item" style="border:none; margin-top:30px;">
    <h2 class="accordion-header" id="heading" style="border: 2px solid #5B6E81;">
      <button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="box-shadow: none; background-color:transparent; width:90%; border:none; margin:10px;text-align:start; color:#5B6E81;">
        Quando vou começar a ver os resultados da minha campanha ?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Aqui uma resposta mais completa para essa pergunta que esta acima podendo se responder varios questionamentos
      </div>
    </div>
  </div>

  <div class="accordion-item" style="border:none; margin-top:30px;">
    <h2 class="accordion-header" id="heading" style="border: 2px solid #5B6E81;">
      <button  class="button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive" style="box-shadow: none; background-color:transparent; width:90%; border:none; margin:10px;text-align:start; color:#5B6E81;">
        Quando vou começar a ver os resultados da minha campanha ?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse " aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Aqui uma resposta mais completa para essa pergunta que esta acima podendo se responder varios questionamentos
      </div>
    </div>
  </div>



</div>
</div>
</div><!--FUNDO 4-->

<!--FUNDO 5-->
<div style="height:650px; background-color: #505c66;margin-top:120px;">




<div class="container" >
  <div class="row">

    <div class="col-md-6 d-flex align-items-center justify-content-end" style="margin-top:100px;">
  <div class="justify-content-end" style="margin-right:50px;">
      <h2 style=" font-size:40px; word-break: break-word;max-width: 350px; color:#fff;">Faça uma Chamada Final</h2>
  
      <p style=" font-size:20px; word-break: break-word;max-width: 400px;color:#fff;">Isso é uma chamada final.Chegou até aqui e ainda mão se cadasstrou ? Aproveite...</p>

  </div>
 
</div>
    <div class="col-md-6 justify-content-end" style="margin-top:100px;">
      <div style="background-color: #fff;padding:30px; border-radius:20px;">

    <div style="text-align: center;">
      <p>Descrição chamadam para a última ação.Converse com nossa equipe sem compromisso.Não Perca a chance de...</p>
      <button id="botaoInput" class="btn btn-primary" style="background-color: #505c66; border-color: #505c66; width:80%;">Chamada Para Ação</button>

      <p style="margin-top:20px;">Nossos especialistas vão entrar em contato com você hoje</p>

        </div>

      </div>
    </div>
  </div>
  </div><!--FUNDO 5-->
<!--FUNDO 5-->


</div>

<div style="background-color:#111416; color:#fff; text-align: center; padding:10px;">
<h1 style=" font-size:15px;">Nome da empressa &copy; Todos os DIreitos Reservados - 2023</h1>
<h2 style="font-size:15px;">CNPJ 99.999.999-0009-99 &bull; TERMOS DE USO</h2>
</div>






<!--SCRIPT-->
<script src="assets/js/script.js"></script>

<!--SCRIPT BOTSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>