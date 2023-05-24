<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/pesoideal.css" rel="stylesheet">

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
  <a class="nav-link" href="temperatura.php"> Cálculo de temperatura </a>
  <a class="nav-link active" href="./pesoideal.php"> Cálculo de peso ideal </a>
  <a class="nav-link" href="./boletim.php"> Cálculo de nota média </a>
</nav>

<br><br><br>

<div class="cartaocinza">
<img src="imagens/FundoAzul.jpg" class="imagem" alt="Imagem de fundo cinza" height="12430px" width="12800px" >
</div>

<div class="tabela">
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
  <div class="card-footer">
    IMC - Classificações
  </div>
    <li class="list-group-item"> Menor que 18,5: <strong>  <i> Abaixo do peso ideal </i> </strong>  </li>
    <li class="list-group-item"> 18,5 - 24,9 <strong>  <i> Peso normal </i> </strong> </li>
    <li class="list-group-item"> 25,0 - 29,9 <strong>  <i> Excesso de peso </i> </strong> </li>
    <li class="list-group-item"> 30,0 - 34,9 <strong>  <i> Obesiade classe I  </i> </strong>  </li>
    <li class="list-group-item"> 35,0 - 39,9 <strong>  <i> Obesiade classe II  </i> </strong>  </li>
    <li class="list-group-item"> Maior ou igual a 40,0 <strong>  <i> Obesiade classe III </i> </strong>  </li>

</ul>
 
</div>
</div>

<div class="calculo">
<div class="card" style="width: 18rem;">
 
<form method="post" action="./resultadopeso.php">
  <div class="card-body">
    <h5 class="card-title"> Cálculo peso ideal </h5>
    <p class="card-text"> Regitre alguns dados e saiba o nível de classificação do seu peso, segunda e conforme a OMS a partir o IMC </p>
    <input type="text" name="Nome" placeholder="Digite seu nome"> <br><br>
    <input type="number" name="Peso" placeholder="Digite seu peso em Kg"> <br><br>
    <input type="number" name="Altura" placeholder="Digite o valor de sua altura"> <br><br>
     <input type="submit" class="btn btn-primary" value="Cálculo"/>
  </div>
</div>
</div>
</form>

  </body>
</html>