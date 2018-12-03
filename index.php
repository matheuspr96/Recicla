<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Ciclo Sustentável</title>
  </head>
  <body>
	<div class="spinner-wrapper">
		<div class="spinner"></div>
	</div>

	<nav class="container-fluid"  style="background-color: #e5fde3;">
		<nav class="navbar navbar-light navbar-expand-md container" style="background-color: #e5fde3;" onmouseover="mudaIN();" onmouseout="mudaOUT();">
			<a id="textologo" class="navbar-brand" href="#">
				<img id="logo" src="./images/logo-escura.png" width="35" height="35" class="d-inline-block align-top" alt="">
				Ciclo Sustentável
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
				<ul class="navbar-nav justify-content-end">
					<li class="nav-item active">
						<a id="home" class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
					</li>
					<li class="nav-item">
						<a id="cadastroUsuario" class="nav-link" href="#">Cadastro Usuario</a>
					</li>
					<li class="nav-item">
						<a id="solicitacaoC" class="nav-link " href="#">Solicitação de Coleta</a>
					</li>
				</ul>
				<div  class="nav-item justify-content-end">
				<button class="btn btn-outline-success" id="login" type="button">Login</button>
				</div>
			</div>
		</nav>
	</nav>

	<main class="pagina">

		<article class="container" id="conteudo"> 

		</article><br>

		<footer class="footer mt-auto py-3" style="background-color: #e5fde3;">
			<div class="container">
				<div class="row">
					<div class="col col-sm-6">
						<h5 class="card-title">Ciclo Sustentável</h5>
						<p>
							Ajude nosso planeta. Faça sua parte de um jeito prático e simples 
							com apenas um click!
						</p>
					</div>
					<div class="col col-sm-4 offset-sm-2">
						<h5 class="card-title">Links</h5>
					<ul class="list-unstyled">
							<li>
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMESURBVFhHYxgFo2AUjBDAJC+v5aGqYTZNXctyLSVYTdNsppyitg8DQygz1GzKgJKSlpyKhul1S8fI94GxTf/DUnspwoFxLf+tnWI/AM28K62kqQq1hjygpGTMr6ph+jA0pftfSunS/5HpE/97BJX89wwu/u8RXEIS9got/w8yA4bD0yb8B4bmExUVA1GodaQDNQ2zHs/g0p8gAz1CSv/7RtYADV+CYhEl2Duy+o+qlulcqHWkA1Uti3tJxQv/+0fV/Q9N6sJqCSU4uWTJf1Ut86dQ60gH6jrWz0EGuQcWYrWAGlhDx/aVlpYWG9RK0oCWrt0zkCFeoWVYDUfHySWL/0dlTAZnhvDUPqxq0LGWnv0rUFqHWkkagDnQJ6IKq+HIODm/9393/+T/hw/v/X/h4vH/Le2d/xMK5mFVi4zp4sAkYMh19kz8//fPOzieu2AhXgeCQji5eBF9HBiZOfn/3n07wA6bOXvB/9yS1v/xaVVgB2BTD8J0dSCoTDsEjFqQA0GOw6YGHftG1f5PKJxPewfGZnb9L6tq/f/gwVWwA6fMmPO/vqXvf2I6asGMjunnwPSm/x/eP4anPRiua+nHqh6G6RbF8bkT/ydlVv6/cvkM2GFbt235n1XY9D8xqw2rehgGmQnKRHRPg4RyLwyPOhAZjzoQFxg2DgQ1EErKav5PnDL9f3JaPrh8w6YOGVPVgZ7Axiq6BZRiiJlLKHOguo4V2IFuAQUYFlCKYWZq6Ni8JLsDpaZpcQMUDaEpPdDmPnbLSMUBsY3/gxPa/ycWLvwP7Ck+hFpHOlBSMcq380j5DDIU1KNzC8j/H501FWgJef2SmOzp/92ArXP/6How38k3+6uKmlkd1DpyQCizqobJGffgkh8gAxOLFoIdCupAYeu5EcKgkEssXAB2nHd45U9VddPLZDf3YUBGxoJTTd18GSgxO3ilf8FmMSnYyTvjq5a+wytgd3aNqJYWD9QayoGSkp6YvLxOoJyCVhpFWFE7WE5OQxJq7CgYBaNgFAwsYGAAAKIZITBXXZqAAAAAAElFTkSuQmCC">
								<a class="" style="" href="#!">Facebook</a>						
							</li>
							<li><a class="" href="#!">Instagram</a></li>
							<li><a class="" href="#!">Twitter</a></li>
						</ul>
					</div>
			</div>
		</footer>
		<div id="modal" class="modal">
		<div class="col s12 z-depth-4 modal-content">
		<form class="login-form">
			<div class="row">
			<div class="input-field col s12 center">
				<img src="images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
				<p class="center login-form-text">Login</p>
			</div>
			</div>
			<div class="row margin">
			<div class="input-field col s12">
				<i class="mdi-social-person-outline prefix"></i>
				<input id="username" type="text">
				<label for="username" class="center-align">Nome de Usuario</label>
			</div>
			</div>
			<div class="row margin">
			<div class="input-field col s12">
				<i class="mdi-action-lock-outline prefix"></i>
				<input id="password" type="password">
				<label for="password">Sena</label>
			</div>
			</div>
			<div class="row">          
			<div class="input-field col s12 m12 l12  login-text">
				<input type="checkbox" id="remember-me" />
				<label for="remember-me">Lembrar Login</label>
			</div>
			</div>
			<div class="row">
			<div class="input-field col s12">
				<a href="index.html" class="btn waves-effect waves-light col s12">Login</a>
			</div>
			</div>
			<div class="row">
			<div class="input-field col s6 m6 l6">
				<p class="margin medium-small"><a href="page-register.html">Registrar!</a></p>
			</div>       
			</div>
		</form>
		</div>
	</div>	
</div>
	</main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/index.js"></script>
	<script>
		$(document).ready(function() {
			//Preloader
			$(window).on("load", function() {
				preloaderFadeOutTime = 500;
				function hidePreloader() {
				var preloader = $('.spinner');
				preloader.fadeOut(preloaderFadeOutTime);
				}
				hidePreloader();
			});
		});
	</script>
</body>
</html>
