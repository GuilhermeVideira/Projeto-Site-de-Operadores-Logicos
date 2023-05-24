<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/estilosresult.css" rel="stylesheet">

  <link rel="icon" href="./imagens/Calculo.png">

	<title> Cálculos </title>
	</head>

  <link rel="shortcut icon" href="./src/imagens/notebook.png" type="image/x-icon">

  <body style  background-color: text="black" link="Brown"  vlink="Brown"  alink="Brown"
  background="./src/imagens/fundo.png">


<nav class="navbar col-12 m-auto position-fixed navbar-expand-lg navbar-dark bg-primary" style="z-index:999;">
    <a class="navbar-brand" href="#"> Cálculos artméticos </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
      
      <button class="btn btn-light"><a href="SobreNos.html" type="button"> Sobre nós </button>
      
    </div>
    <br><br>
    
</nav>

<div class="fundo-video">
			<video class="video" autoplay loop muted>
				<source src="./Video/VideoFundo.mp4" type="video/mp4" />
			</video>
		</div>

<br><br><br>

<nav class="nav nav-pills nav-fill">
  <a class="nav-link" aria-current="page" href="index.php"> Home </a>
  <a class="nav-link active" href="temperatura.php"> Cálculo de temperatura </a>
  <a class="nav-link" href="./pesoideal.php"> Cálculo de peso ideal </a>
  <a class="nav-link" href="./boletim.php"> Cálculo de nota média </a>
</nav>

<br><br><br>

<div class="cartaocinza">
<img src="imagens/FundoAzul.jpg" class="imagem" alt="Imagem de fundo cinza" height="800px" width="1300px" >
</div>

<div class="tabela">
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
  <div class="card-footer">
    Temperatura (°C)
  </div>
    <li class="list-group-item"> Menor que 0: <strong>  <i> Congelante </i> </strong>  </li>
    <li class="list-group-item"> Maior ou igual a 0 e menor que 15: <strong>  <i> Muito Frio </i> </strong> </li>
    <li class="list-group-item"> Maior ou igual a 15 e menor que 25: <strong>  <i> Razoável </i> </strong> </li>
    <li class="list-group-item"> Maioe ou igual a 25: <strong>  <i> Calor  </i> </strong>  </li>
</ul>
 
</div>
</div>

<div class="calculo">
<div class="card" style="width: 18rem;">
 
  <div class="card-body">
    <h5 class="card-title"> Cálculo de temperatura</h5>
    <p class="card-text"> Regitre um valor e receba a mensagem da classificação social da temperatura. </p>
    <input type="number" name="1Valor" placeholder="Graus celsius"> <br><br>
    <a href="#" class="btn btn-primary"> Mensagem </a>
  </div>

</div>
</div>

<div class="resultado">

<div class="card">
  <div class="card-header">
    Resultado
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p> Mensagem: </p>
      <p> <span class="texto01">  A temperatura registrada pode ser classificado como: </span>  </p>
      
      <span class="texto02"> <strong> 

<?php 
$graus = $_POST['1Valor'];

if ($graus < 0 ){
    echo " Congelante ";
}
else if (($graus >= 0 ) && ($graus < 15 )) {
    echo " Muito frio";
}
else if (($graus >= 15 ) && ($graus < 25 )) {
    echo " Razóavel ";
}
else if ($graus >= 25 ) {
    echo " Calor ";
}
?>

 </span> </strong> <br><br>
 
 <a href="./temperatura.php" class="btn btn-primary"> Voltar </a> 

    </blockquote>

  </div>
</div>

</div>

<div class="termometro">
<img src="./imagens/Termometro.png" alt="Imagem de desenho de termometro" height="300px" width="300px" >
</div>


<div class="carossel">

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="./imagens/Termometro04.png" class="card-img-top" alt="Frio">
      <div class="card-body">
        <h5 class="card-title"> Muito Frio </h5>
        <p class="card-text">  o conceito de frio refere-se às temperaturas baixas (quando não são negativas) e à sensação que se transmite perante esse fenômeno. Posto noutros termos, o frio é a ausência total ou parcial de calor.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagens/Termometo05.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> Razoável </h5>
        <p class="card-text"> O conceito de temperatura razoável refere-se a um nível de calor adequado para os seres vivos, resultando na melhor sensação transmitida. A temperatura razóvel é classificada: 15 C° a 25 C°</p>
      </div>
    </div>
  </div>
 
  <div class="col">
    <div class="card">
      <img src="./imagens/Termometor02.png" height="404px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> Calor </h5>
        <p class="card-text">O calor é a energia térmica que passa de um corpo com maior temperatura para outro com menor temperatura. Quando não há diferença de temperatura entre dois corpos, não existe calor.  </p>
      </div>
    </div>
  </div>
</div>

  </body>
</html>