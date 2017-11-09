<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Dayvison Barbosa - Web Design e Design Gráfico</title>
		<meta name="description" content="">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content=""/>
		<meta property="og:description" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:image" content=""/>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/png" href="img/logo.png">
		<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,900" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script>
		jQuery(document).ready(function($) { 
		    $(".scroll").click(function(event){        
		        event.preventDefault();
		        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
		   });
		});
		</script>

	</head>
<body id="menu">
	<header class="menu-bg">
		<div class="menu">
			<div class="menu-logo">
				<a href="#menu" class="scroll"><img src="img/logo.png" alt="logo Dayvison Barbosa"></a>
			</div>
			<nav class="menu-nav">
				<ul>
					<li><a href="#webdesign" class="scroll">web design</a></li>
					<li><a href="#designgrafico" class="scroll">design gráfico</a></li>
					<li><a href="#orcamentos" class="scroll">orçamentos</a></li>
					<li><a href="tel:+5513997962893" class="telefone">+55 13 99796-2893</a></li>
				</ul>
			</nav>
		</div>
	</header>

	@yield('content')

	<footer class="rodape">
		<div class="container">
			<a href="#webdesign" class="scroll">web design</a>
			<a href="#designgrafico" class="scroll">design gráfico</a>
			<a href="#orcamentos" class="scroll">orçamento</a>

	<p class="corporation">Desenvolvido por Dayvison Barbosa - 2018 - Todos os direitos reservados.</p>	
		</div>
	</footer>
</body>
</html>