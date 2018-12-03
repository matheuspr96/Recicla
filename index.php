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
							<ul class="list-unstyled">							<li>
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMESURBVFhHYxgFo2AUjBDAJC+v5aGqYTZNXctyLSVYTdNsppyitg8DQygz1GzKgJKSlpyKhul1S8fI94GxTf/DUnspwoFxLf+tnWI/AM28K62kqQq1hjygpGTMr6ph+jA0pftfSunS/5HpE/97BJX89wwu/u8RXEIS9got/w8yA4bD0yb8B4bmExUVA1GodaQDNQ2zHs/g0p8gAz1CSv/7RtYADV+CYhEl2Duy+o+qlulcqHWkA1Uti3tJxQv/+0fV/Q9N6sJqCSU4uWTJf1Ut86dQ60gH6jrWz0EGuQcWYrWAGlhDx/aVlpYWG9RK0oCWrt0zkCFeoWVYDUfHySWL/0dlTAZnhvDUPqxq0LGWnv0rUFqHWkkagDnQJ6IKq+HIODm/9393/+T/hw/v/X/h4vH/Le2d/xMK5mFVi4zp4sAkYMh19kz8//fPOzieu2AhXgeCQji5eBF9HBiZOfn/3n07wA6bOXvB/9yS1v/xaVVgB2BTD8J0dSCoTDsEjFqQA0GOw6YGHftG1f5PKJxPewfGZnb9L6tq/f/gwVWwA6fMmPO/vqXvf2I6asGMjunnwPSm/x/eP4anPRiua+nHqh6G6RbF8bkT/ydlVv6/cvkM2GFbt235n1XY9D8xqw2rehgGmQnKRHRPg4RyLwyPOhAZjzoQFxg2DgQ1EErKav5PnDL9f3JaPrh8w6YOGVPVgZ7Axiq6BZRiiJlLKHOguo4V2IFuAQUYFlCKYWZq6Ni8JLsDpaZpcQMUDaEpPdDmPnbLSMUBsY3/gxPa/ycWLvwP7Ck+hFpHOlBSMcq380j5DDIU1KNzC8j/H501FWgJef2SmOzp/92ArXP/6How38k3+6uKmlkd1DpyQCizqobJGffgkh8gAxOLFoIdCupAYeu5EcKgkEssXAB2nHd45U9VddPLZDf3YUBGxoJTTd18GSgxO3ilf8FmMSnYyTvjq5a+wytgd3aNqJYWD9QayoGSkp6YvLxOoJyCVhpFWFE7WE5OQxJq7CgYBaNgFAwsYGAAAKIZITBXXZqAAAAAAElFTkSuQmCC">
								<a class="" style="" href="#!">Facebook</a>						
							</li>
							<li>
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOiSURBVFhH7ZbZTxNRFMb585AlMRpigr74ohaQoGCgKkQiCAShERKWskgXArSdQsJSUKqABuyCQORNgyXKIioVQ1QWOc53maHT5pa2Q1uj4SS/5Gbuued8c7dzU04t3mbUnKky5aZ/dxZfJjDRdJXR11DAaK0oZxhy0uIKcnZdS6+QZPDNeD3dIw/4qdMxaNPEeOJzMmod3xjK4HElL2NGkhNsYucDpeNfEwg0qfclWQHDFCudkiFQEIZpYHKRYROGjr4bRS2SrIApB4JkCJTFySj7JFkBU3aCU4EigjB4JA5tZZ8kK2DKThCNQJv2ErnMdbTiHaetd/O092WZgfZHz1NymeqYT2jsaJBkBSzU4TiBLU4/vXVa6cC/SrS1fiwH/hXmay3JDoofCUlWwPBxornsiJVHNYyNhWbG+EzvIVOLtLu5xpLvba6Sx+Wmli6BtNVtlFvayEC7xSCwPvjAd//rB3oz2BmUIxxhBSr/PBKzbg+VVOmpTGeihu4x6h5xk+3ZAsM84mLfynRGKhHFwpcXIxwnEvjbv0YWu4OKKlups/9F0CnkAZ+iSj1Z+h1sLC9mKCcS2Cc46E6dgazj81xBPKzjc2wMfowXMxTVArFUmA2bM3pxMhCJsXMeLze2ElUCsdmLxT3XORB5WcPR0T/F9u2+dHDCoUqg55WbHQhe4ljAwfG6jj80qgTi2mg0j3GTxgJOd6vRzs0ho0qgtrqdXSW8pEBvm6D8e02MNttzrg8wD7tIW9POzSGjSmBeWSMddzjyy5voilbHyC9v5voAxEAsXg6Z/1MglhgVgpcUYFkhEuLahEmuD2BLLFYXXg4ZVQJbDPa4HJJG8yjpE3FIUPhL6w3cpLGAayZSbVYlEBc1Ltlo6m84OuxTbHkTclGD157DUhdLHZaRS928d5YbW4lqgQAF//CxMMcVwgO+dx+KY8QXDS9mKCcSyJ5bYiLMRjTLjfpbKD7NrAOjyXluyeBVgscoNj1OJq4P3HEAbXwrrTeyPbcwG3lZlcRFIMDBQeFHbb0tli/5yY82rhL0yU/+WIibwETxbwo05mXs7H32cQckk92N92TKy/wlyQpYT1GWd3l6hDsomfimh6in8LxXkhUwoyY106q9uL2zvsQdmAyQ21KSvf1Yk5YuyQq27hvnantvXfjheznEppoXJBHsfFpiM2cpzt7uLjhbLcnhmyH3TAamGPsAmzUZIFfPzSy3ISc1TZJxanGylJQ/usE8UA2gmBQAAAAASUVORK5CYII=">
								<a class="" href="#!">Instagram</a>
							</li>
							<li>
								<img src="data:image/png;base64,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">
								<a class="" href="#!">Twitter</a>
							</li>
						</ul>
					</div>
			</div>
		</footer>
	</main>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
