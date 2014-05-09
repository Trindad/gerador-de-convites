<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Convite para Eventos</title>
	<meta http-equiv="content-type" 
		content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
	
	<style type="text/css">
		@font-face {
		    font-family: 'BebasNeueRegular';
		    src: url('../fonts/BebasNeue-webfont.eot');
		    src: url('../fonts/BebasNeue-webfont.eot?#iefix') format('embedded-opentype'),
		         url('../fonts/BebasNeue-webfont.woff') format('woff'),
		         url('../fonts/BebasNeue-webfont.ttf') format('truetype'),
		         url('../fonts/BebasNeue-webfont.svg#BebasNeueRegular') format('svg');
		    font-weight: normal;
		    font-style: normal;

		}
		h1{
			font-family:'BebasNeueRegular';
			text-align: center;	
			color:#fff;	
		}
		p{
			font-family:'BebasNeueRegular';
			text-align: center;	
			color:#fff;	
		}
		body{
			
		}
		fieldset{
			font-family:'BebasNeueRegular';
			margin:25px 6px;
		    border-radius: 10px;
		}
		form{
		   font-family:'BebasNeueRegular';
		   -webkit-border-radius: 25px;
			border-radius: 25px;

		}
		label{
			font-family:'BebasNeueRegular';
			-webkit-border-radius: 25px;
			border-radius: 25px;
		}
		#titulo-login{
			
			background: #006eff;
			border-bottom: 2px solid #009dff;
			padding: 20px;	
		}
		#img1{
			position:absolute;
			top: 200px;
			right:0;
			border-radius: 1000000px ;
			width: 170px;
			height: 170px;

		}
		#img2{
			position:absolute;
			top: 400px;
			right:0;
			
			border-radius: 1000000px ;
			width: 170px;
			height: 170px;
			pading:20px;
		}
		#img3{
			position:absolute;
			top: 600px;
			right:0;
			
			border-radius: 1000000px ;
			width: 170px;
			height: 170px;
			pading:20px;
		}
		#rodape{
			background: #006eff;
			padding: 50px;	
		}
		@media print
		{
		   * {-webkit-print-color-adjust:exact;}
		}
				
	</style>
	
</head>

<body>
	
	<div id="titulo-login">
		<h1>Gerador de Convite</h1>
	</div>
	<div class='container-fluid' >
		<div class='row-fluid'>
			<br />
			<br />
			<div class='span4 visible-desktop'>
				<div>
						<img src="assets/img/amor.jpg"  id="img1"  style="margin-right: 20px" />
				</div>
				<br />
				<div>
						<img src="assets/img/balao1.jpg"  id="img2" style="margin-right: 20px" />
				</div>
				<br />
				<div>
						<img src="assets/img/casa.jpg"  id="img3" value="img3" style="margin-right: 20px" />
				</div>
			</div>
			<div class='span8' style="min-height: 600px">
				<form id="form" action="condicao.php" method="post" enctype="multipart/form-data">
					<div id="tipo">
						<br />
						<label> Layout:</label>
						<input  type="radio"  name="tipo" value="personalizado"  class="input-medium search-query" onchange="mudaTipo(this.value);"/> Personalizar
						<input type="radio"  name="tipo" value="automatico"  class="input-medium search-query" onchange="mudaTipo(this.value);"/> Usar imagens do sistema
					</div>
					<div id="titulo">
						<br />
						<label for="titulo">Título do cartão:</label>
						<input  name="titulo" class="input-xlarge" type="text" class="input-medium search-query" placeholder="Meu aniversario"/>
					</div>
					<div id="mensagem">
						<label for="mensagem">Mensagem:</label>
						<textarea rows="3"  name="mensagem" id="mensagem"  class="input-medium search-query" placeholder="Convido..."></textarea>
						<br />
					</div>
					<div id="file">
						<br />
						<label for="mens">Faça upload da sua imagem de fundo:</label>
						<input type="file"  class="input-medium search-query" name="arq" />
						<input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
						<br />
					</div>	
					<div id="evento">
						<label for="evento">Evento:</label>
						<input  name="evento" class="input-xlarge" type="text" placeholder="formatura ..."/>
					</div>
					<div id="local">
						<label for="local">Local:</label>
						<input type="text" name="local"  placeholder="Universidade ..." class="input-xlarge"/>
					</div>
					<div id="data">
						<label for="data">Data:</label>
						<input type="date" name="data"  placeholder="08/07/2013..." class="input-xlarge"/>
						<br />
					</div>
					<div id="convidado">
						<label for="convidado">Convidado(a):</label>
						<input type="text" name="convidado"  placeholder="Maria de Jesus..." class="input-xlarge" onblur="validaNome(this,this.value);"/>
					</div>
					<div id="email">
						<br />
						<label for="Email">Email:</label>
						<input class="span3" type="email" name="email"  placeholder="maria@uffs.edu.br" required>
						<br />
					</div>
					<div id="sex">
						<label>Gênero:</label>
						<input type="radio" name="sex" value="male"/> Masculino
						<input type="radio" name="sex" value="female"/> Feminino
						<input type="radio" name="sex" value="female"/> Não Especificado
					</div>	
					<div id="imagemevento">
						<br />
						<label>Escolha uma figura :</label> 
						<input type="radio"  name="imagemevento" value="sale"/> <img src="assets/img/Sale-tag-256.png" alt="liquidação" width="40px" height="45px" />
						<input type="radio"  name="imagemevento" value="inauguracao"/> <img src="assets/img/tesourainaugural.png" alt="inauguracao" width="40px" height="45px" />
						<input type="radio"  name="imagemevento" value="happyhour"/>  <img src="assets/img/martini.png" alt="happyhour" width="40px" height="45px" />
						<input type="radio"  name="imagemevento" value="casamento"/> <img src="assets/img/casamento.png" alt="casamento" width="40px" height="45px" />
						<input type="radio"  name="imagemevento" value="forum"/>  <img src="assets/img/Exclamation.png" alt="forum" width="40px" height="45px" />
						<input type="radio"  name="imagemevento" value="formatura"/> <img src="assets/img/formatura.png" alt="formatura" width="40px" height="45px" />
						<input type="radio"  name="imagemevento" value="curso"/><img src="assets/img/Courses-256.png" alt="curso" width="40px" height="45px" />
						<input type="radio"  name="imagemevento" value="aniversario"/> <img src="assets/img/Red.png" alt="aniversario" width="50px" height="45px" />
						
					</div>
					<div id="pos">
						<br />
						<label>Posição da figura :</label>
						<input type="radio" name="pos" value="direita"/> Direita
						<input type="radio" name="pos" value="esquerda"/> Esquerda
					</div>
					<div>
						<br />
						<button type="submit" value="Criar Convite" id="name" name="enviar" class=" btn btn-primary">Criar Convite</button>
					</div>	
				</form>
			</div>
		</div>
	</div>
	<div id="rodape">
		<p>Silvana Trindade</p>
	</div>
	<script type="text/javascript" src="convite.js"></script>
</body>
</html>
