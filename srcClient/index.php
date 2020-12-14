<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style/style.css"/>
		<link rel="stylesheet" href="style/hamburgers.css"/>
		<link rel="stylesheet" href="style/carousel.css">
		<link rel="stylesheet" href="style/cardapio.css">
		<link rel="stylesheet" href="style/inicio.css">
		<link rel="stylesheet" href="style/sobre.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="scripts/main.js"></script><script src="scripts/rodizio.js"></script>
        <script src="scripts/cardapio.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<title>TCC</title>
    </head>
    <body class="classBody" background="img/bg1.png" onload="StartPage()">
		<div id=nav>
			<div class="navBar" id="navBarID">
				<img id="logoRestaurant" src="img/bbqLogo.png" class="logoImage" alt="Missing Logo" style="color:white"></img>
				<p class="navHeader" id="restaurantName">Gado Demais</p>
				<section class="navDiv">
					<a class="navButton" onclick="OpenTab(event, 'navInicio')" id="defaultOpen">Início</a>
					<a class="navButton" onclick="OpenTab(event, 'navCardapio')" id="cardapioTab">Cardápio</a>
					<a class="navButton" onclick="OpenTab(event, 'navSobre')">Sobre</a>
				</section> 
				<button class="hamburger hamburger--squeeze" onclick="OpenNavMobile()" id="icon" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
		</div>
		
		<div id="container" class="box-shadow">
			<div id="navInicio" class="tabContent">
			
				<div><h3>Escolha seu Rodízio:</h3></div>

				<div id="rodizioDiv"> 
				</div>
				
            </div>
			
            <div id="navCardapio" class="tabContent">
				<h3 class="tabHeader">Cardápio</h3>
				<button type="button" class="btn btn-success pedirCardapio" onClick="PedirCardapio()">
					Pedir
				</button>
				
				<div class="line"></div>
				<br>
				<div id="itemsCardapio">
					<!--<div class="cardapioItemDiv">
						<div class="cardapioPedir">
							<input class="checkboxPedir" type="checkbox">
						</div>
						<div class="cardapioImg"></div>
						<div class="cardapioName">
							<p>dsfsdf</p>
						</div>
						<div class="cardapioDescDiv">
							<p>hdsugdsgfjcvbkuidsgfjsdhfbvjvcdsvfksdhbdnjsvfikufjhd</p>
							<p>hdsugdsgfjcvbkuidsgfjsdhfbvjvcdsvfksdhbdnjsvfikufjhd</p>
							<p>hdsugdsgfjcvbkuidsgfjsdhfbvjvcdsvfksdhbdnjsvfikufjhd</p>
							<p>hdsugdsgfjcvbkuidsgfjsdhfbvjvcdsvfksdhbdnjsvfikufjhd</p>
						</div>
						<div class="cardapioTag">
							<label for="tagCardapio5">
								#Exemplo 5, 
							</label>
							<label for="tagCardapio6">
								#Exemplo 6   
							</label> 
						</div>
					</div>-->
                    <br>
				</div>
                
            </div>
			  
			<div id="navSobre" class="tabContent">
				<h3>Sobre</h3>
				<div class="line"></div>
				<div class="infoRestaurante">
					<p><b id="enderecoSobre">Endereço</b>, <b id="cidadeSobre">Cidade</b> - <b id="estadoSobre">Estado</b>. <b id="cepSobre">CEP</b></p>
					<p id="telefoneSobre">Telefone</p>
					<p id="emailSobre">E-mail</p>
				</div>
			</div>
			            
		</div>

		<footer>
			<p>Rodizeira © Copyright 2020. Todos os direitos reservados</p>
		</footer>
		<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!--?php
            include 'C:\wamp64\www\TCC-Rodizeira\srcClient\php\startPage.php';
            fillSobre();
            fillRodizio();
            fillCardapio();
		?-->
		
		<script>
            SetRestaurantInfo('Gado Demais', 'img/bbqLogo.png', '(51) 3387-3733', 'gadodemais@contato.com.br', '90470-340', 'Rio Grande do Sul', 'Porto Alegre', 'Avenida Soledade, Número 374');
			
			alert('script1');
            CreateDivItemCardapio('Peito de Frango', '', '#Galeto~', 1);
            CreateDivItemCardapio('Coxa de Frango', '', '#Galeto~', 2);
            CreateDivItemCardapio('Sobrecoxa de Frango', '', '#Galeto~', 3);
            CreateDivItemCardapio('Coração de Frango', '', '#Galeto~', 4);
            CreateDivItemCardapio('Asa de Frango', '', '#Galeto~', 5);
            CreateDivItemCardapio('Sassami Grelhado', '', '#Galeto~', 6);
            CreateDivItemCardapio('Costela Suína', '', '#Galeto~', 7);
            CreateDivItemCardapio('Salsichão', '', '#Galeto~', 8);
            CreateDivItemCardapio('Filé Suíno com Bacon', '', '#Galeto~', 9);
            CreateDivItemCardapio('Filé de Costela', '', '#Galeto~', 10);
            CreateDivItemCardapio('Costelinha Suína com Molho Barbecue', '', '#Classico~', 11);
            CreateDivItemCardapio('Filé de Costela', '', '#Classico~', 12);
            CreateDivItemCardapio('Costela', '', '#Classico~', 13);
            CreateDivItemCardapio('Costelão 12 Horas', '', '#Classico~', 14);
            CreateDivItemCardapio('Cupim', '', '#Classico~', 15);
            CreateDivItemCardapio('Maminha', '', '#Classico~', 16);
            CreateDivItemCardapio('Vazio', '', '#Classico~', 17);
            CreateDivItemCardapio('Picanha', '', '#Completo~', 18);
            CreateDivItemCardapio('Alcatra', '', '#Completo~', 19);
            CreateDivItemCardapio('Filé Mignon', '', '#Completo~', 20);
            CreateDivItemCardapio('Contrafilé', '', '#Completo~', 21);
            CreateDivItemCardapio('Fraldinha', '', '#Completo~', 22);
            CreateDivItemCardapio('Linguiça Calabresa', '', '#Completo~');
            CreateDivItemCardapio('Pão de Alho', 'Pão francês com alho e maionese da casa', '#Acompanhamentos~', 23);
            CreateDivItemCardapio('Queijo Coalho', '', '#Acompanhamentos~', 24);
            CreateDivItemCardapio('Polenta Frita', '', '#Acompanhamentos~', 25);
            CreateDivItemCardapio('Batata Frita', '', '#Acompanhamentos~', 26);
			alert('script2');

            CreateDivRodizio('Rodízio de Galeto', '37.90', 'Sequência inclui TODOS os cortes de frango da casa mais TRÊS cortes suínos [costela suína, salsichão e filé suíno com bacon], mais UM corte bovinho [filé de costela], além de acompanhamentos.', '#Galeto~#Acompanhamentos~');
            CreateDivRodizio('Rodízio Clássico', '57.90', 'Sequência inclui TODOS os cortes de frango da casa mais QUATRO cortes suínos [costela suína, salsichão, filé suíno com bacon e costelinha suína com molho barbecue], mais SEIS cortes bovinhos [filé de costela, costela, costelão 12 horas, cupim, maminha e vazio], além de acompanhamentos.', '#Galeto~#Classico~#Acompanhamentos~');
            CreateDivRodizio('Rodízio Completo', '79.90', 'Sequência de Carnes Nobres incluindo TODOS os cortes da casa, entre eles frango , suíno, bovino e cordeiro, além de acompanhamentos.', '#Galeto~#Classico~#Completo~#Acompanhamentos~');
        </script>
    </body>
</html>