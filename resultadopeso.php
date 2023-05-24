<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/pesoresult.css" rel="stylesheet">

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
 
<form method="post" action="./resultadotemperatura.php">
  <div class="card-body">
    <h5 class="card-title"> Cálculo peso ideal </h5>
    <p class="card-text"> <strong> Dados registrados: </strong> </p>
<p>

<?php 
$nome = $_POST['Nome'];
$peso = $_POST['Peso'];
$altura = $_POST['Altura'];

$resultado = $peso / ($altura * $altura);

echo " <center><strong> ----------------- </strong><br><br> </center>"; 

if ($resultado < 18.5 ){
    echo "$nome você está abaixo do peso ideal! ";
}
else if (($resultado >= 18.5 ) && ($resultado <= 24.9 )) {
    echo "$nome você está no peso normal! ";
}
else if (($resultado >= 25.0 ) && ($resultado <= 29.9 )) {
    echo "$nome você está em excesso de peso! ";
}
else if (($resultado >= 30.0 ) && ($resultado <= 34.9 )) {
    echo "$nome você está em obesiade classe I ";
}
else if (($resultado >= 35.0 ) && ($resultado <= 39.9 )) {
    echo "$nome você está em obesiade classe II ";
}
else if ($resultado >= 40.0 ) {
    echo "$nome você está obesiade classe III ";
}


?>

<br> <br> 


<?php 

$nome = $_POST['Nome'];
$peso = $_POST['Peso'];
$altura = $_POST['Altura'];

echo " <center> <strong> -------- Dados --------- </strong> <br><br> </center>"; 
echo "<strong> Nome: </strong> $nome <br> ";
echo " <strong> Peso: </strong>  $peso <br>";
echo " <strong> Altura: </strong> $altura <br>";
echo " <strong> Classificação: </strong> $resultado <br>";



?>

<br>
<a href="./pesoideal.php" class="btn btn-primary"> Voltar </a>


</p>
  </div>


</div>
</div>
</form>



  </body>
</html>