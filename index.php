<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Ciclo Sustentável</title>
	<meta charset="utf-8">
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<!--Import materialize.css-->
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link  rel="stylesheet" href="css/index.css"/>
      	<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- Compiled and minified JavaScript -->
	<!--
	<style>

	body {
		padding-top: 30px;
	
	h2 {
		border-bottom: solid 1px black;
		padding-bottom: 5px;
		margin-bottom: 30px;
	}
  
	</style>
	
	<script>
     
	function sendForm()
	{
		$("#divSuccessMsg").hide();
		$("#divErrorMsg").hide();

		document.getElementById("btnCadastraAluno").disabled = true;    
		var formAluno = document.getElementById("formCadAluno");
		var formData = new FormData(formAluno);  // Ver datalhes em https://developer.mozilla.org/pt-BR/docs/Web/API/FormData/FormData

		$.ajax({
			url: 'adicionaNovoAluno.php',
			method: "POST",
			data: formData,
			
			cache: false,
			processData: false,  // Diz ao jQuery para não processar os dados do formulário (ver detalhes em http://api.jquery.com/jquery.ajax/)   
			contentType: false,  // Diz ao jQuery para não definir cabeçalho de contentType (ver detalhes em http://api.jquery.com/jquery.ajax/)   

			success: function (result) {

				if (result.substring(0, 2) == "OK")
				{
					document.getElementById('divSuccessMsg').innerHTML = "Dados salvos com sucesso: " + result;    
					$("#divSuccessMsg").stop().fadeIn(200).delay(2500).fadeOut(200);
					document.getElementById("btnCadastraAluno").disabled = false;
					document.getElementById("formCadAluno").reset(); 
				}
				else
					showMessageError(result);
			},

			error: function (xhr, status, error) {

				var errorMsg = xhr.responseText;
				document.getElementById("errorMsg").innerText = errorMsg;
				$("#divErrorMsg").fadeIn(200);
				document.getElementById("btnCadastraAluno").disabled = false;
			}
		});
	}
	
	function showMessageError(message)
	{
		document.getElementById("errorMsg").innerHTML = message;
		$("#divErrorMsg").fadeIn(200);
	}	
	
	</script>
	-->
</head>
<body>
	<!-- Navbar -->
	<nav class="light-green lighten-1">
		<div class="nav-wrapper container ">
			<a href="#" class="brand-logo">Logo</a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger right">
				<i class="material-icons">menu</i>
			</a>
			<ul class="right hide-on-med-and-down">
				<li><a id="home" href="#"><i class="material-icons left">home</i>Home</a></li>
				<li><a id="cadastroUsuario" href="#">Cadastro Usuario</a></li>
				<li><a id="pontoColeta" href="#"> Ponto Login</a></li>
				<li><a id="login" href="/login.php">Login</a></li>
			</ul>		
		</div>
		</nav>
			<!-- Navbat Colappsible -->
			<ul id="mobile-demo" class="sidenav" >
		<li><a href=""><i class="material-icons left"> home </i>Home</a></li>
		<li><a href="#">Cadastro Residências</a></li>
		<li><a href="">Solicitar Coleta</a></li>
		<li><a href=""><i class="material-icons left"> location_on </i>Pontos de Coleta</a></li>
	</ul>

	<!-- Formulário de cadastro de residencia -->
	<main class="pagina">

		<article class="container" id="conteudo"> 
			
		</article>

		<footer class="page-footer  light-green lighten-1 ">
			<div class="container ">
				<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Ciclo Sustentável</h5>
					<p class="grey-text text-lighten-4">
					Ajude nosso planeta. Faça sua parte de um jeito prático e simples com apenas um click!</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
					<li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
					</ul>
				</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
				© 2018 Copyright Text
				<a class="grey-text text-lighten-4 right" href="https://www.instagram.com/matheuspr96/">Developed with XPimenta</a>
				</div>
			</div>
		</footer>

	
	</main>
	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="js/index.js"></script>
	</body>
</html>