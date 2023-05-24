<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/boletimresult.css" rel="stylesheet">

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
  <a class="nav-link" href="./pesoideal.php"> Cálculo de peso ideal </a>
  <a class="nav-link active" href="./boletim.php"> Cálculo de nota média </a>
</nav>

<br><br><br>

<div class="cartaocinza">
<img src="imagens/FundoAzul.jpg" class="imagem" alt="Imagem de fundo cinza" height="12430px" width="12800px" >
</div>

<div class="tabela">
<img src="imagens/boletimdesenho.png" class="imagem" alt="Desenho de boletim" height="440px" width="440px" >
</div>

<div class="calculo">
<div class="card" style="width: 18rem;">
 
<form method="post" action="./resultadoboletim.php">
  <div class="card-body">
    <h5 class="card-title"> Boletim </h5>
   
<?php 

$nome = $_POST['Nome'];
$nota01 = $_POST['Nota01'];
$nota02 = $_POST['Nota02'];
$nota03 = $_POST['Nota03'];
$nota04 = $_POST['Nota04'];

$notatotal = ($nota01 + $nota02 + $nota03 + $nota04) / 3 ;

echo "🧒🏻 <strong> Nome do aluno: </strong> $nome <br> <br> ";
echo "1️⃣ <strong> Menção 01 do aluno: </strong>  $nota01  <br> <br> ";
echo "2️⃣ <strong> Menção 02 do aluno: </strong>  $nota02  <br> <br> ";
echo "3️⃣ <strong> Menção 03 do aluno: </strong> $nota03   <br> <br> ";
echo "3️⃣ <strong> Menção 04 do aluno: </strong> $nota04   <br> <br> ";
echo " <center> ---------------------------- </center> <br> ";
echo "📑 <strong> Média total do aluno: </strong> $notatotal   <br> <br> ";

echo "<strong>Situação:</strong> <br> <br> ";
if ($notatotal >= 7){
    echo "$nome foi aprovado!";
}
else{
    echo "$nome foi reprovado!";
}


?>
<br><br>
<a href="./boletim.php" class="btn btn-primary"> Voltar </a>
  </div>
</div>
</div>
</form>

  </body>
</html>