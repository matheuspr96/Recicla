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
				<li><a id="pontoColeta" href="#"><i class="material-icons left"> location_on </i>Pontos de Coleta</a></li>
				<li><a id="login" href="#">Login</a></li>
			</ul>		
		</div>
	</nav>
			<!-- Navbat Colappsible -->
 			<ul id="mobile-demo" class="sidenav" >
				<li><a id="home" href="#"><i class="material-icons left"> home </i>Home</a></li>
				<li><a id="cadastroUsuario" href="#">Cadastro Usuario</a></li>
				<li><a id="pontoColeta" href="#"><i class="material-icons left"> location_on </i>Pontos de Coleta</a></li>
				<li><a id="login" href="#">Login</a></li>
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
				 		<li>
							<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMESURBVFhHYxgFo2AUjBDAJC+v5aGqYTZNXctyLSVYTdNsppyitg8DQygz1GzKgJKSlpyKhul1S8fI94GxTf/DUnspwoFxLf+tnWI/AM28K62kqQq1hjygpGTMr6ph+jA0pftfSunS/5HpE/97BJX89wwu/u8RXEIS9got/w8yA4bD0yb8B4bmExUVA1GodaQDNQ2zHs/g0p8gAz1CSv/7RtYADV+CYhEl2Duy+o+qlulcqHWkA1Uti3tJxQv/+0fV/Q9N6sJqCSU4uWTJf1Ut86dQ60gH6jrWz0EGuQcWYrWAGlhDx/aVlpYWG9RK0oCWrt0zkCFeoWVYDUfHySWL/0dlTAZnhvDUPqxq0LGWnv0rUFqHWkkagDnQJ6IKq+HIODm/9393/+T/hw/v/X/h4vH/Le2d/xMK5mFVi4zp4sAkYMh19kz8//fPOzieu2AhXgeCQji5eBF9HBiZOfn/3n07wA6bOXvB/9yS1v/xaVVgB2BTD8J0dSCoTDsEjFqQA0GOw6YGHftG1f5PKJxPewfGZnb9L6tq/f/gwVWwA6fMmPO/vqXvf2I6asGMjunnwPSm/x/eP4anPRiua+nHqh6G6RbF8bkT/ydlVv6/cvkM2GFbt235n1XY9D8xqw2rehgGmQnKRHRPg4RyLwyPOhAZjzoQFxg2DgQ1EErKav5PnDL9f3JaPrh8w6YOGVPVgZ7Axiq6BZRiiJlLKHOguo4V2IFuAQUYFlCKYWZq6Ni8JLsDpaZpcQMUDaEpPdDmPnbLSMUBsY3/gxPa/ycWLvwP7Ck+hFpHOlBSMcq380j5DDIU1KNzC8j/H501FWgJef2SmOzp/92ArXP/6How38k3+6uKmlkd1DpyQCizqobJGffgkh8gAxOLFoIdCupAYeu5EcKgkEssXAB2nHd45U9VddPLZDf3YUBGxoJTTd18GSgxO3ilf8FmMSnYyTvjq5a+wytgd3aNqJYWD9QayoGSkp6YvLxOoJyCVhpFWFE7WE5OQxJq7CgYBaNgFAwsYGAAAKIZITBXXZqAAAAAAElFTkSuQmCC">
							<a class="hide-on-med-and-down" style="padding:2px 0 0 2px" href="#!">Facebook</a>						
						</li>
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