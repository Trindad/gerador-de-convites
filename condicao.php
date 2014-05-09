<?php
	
	require_once("funcoes.php");
verificadados();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Convite Personalizado</title>
	<meta http-equiv="content-type" 
		content="text/html;charset=iso-8859-1" />
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Rye' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Londrina+Solid' rel='stylesheet' type='text/css'>
	<style type="text/css" media="all">
		@font-face {
		    font-family: 'WindsongRegular';
		    src: url('Windsong-webfont.eot');
		    src: url('Windsong-webfont.eot?#iefix') format('embedded-opentype'),
		         url('Windsong-webfont.woff') format('woff'),
		         url('Windsong-webfont.ttf') format('truetype'),
		         url('Windsong-webfont.svg#WindsongRegular') format('svg');
		    font-weight: normal;
		    font-style: normal;

		}
		@font-face {
		    font-family: 'Lily Script One';
		    src: url('assets/fonts/LilyScriptOne-Regular.ttf') format('truetype');
		    font-weight: normal;
		    font-style: normal;

		}

		h3{
			font-size: 30px;
			line-height: 50px;
			text-align: center;
		}
		p{
			font-size: 20px;
			line-height: 40px;
			text-align: justify;
		}
		.clearfix:before,
		.clearfix:after {
		  display: table;
		  content: "";
		  line-height: 0;
		}
		.clearfix:after {
		  clear: both;
		}
		#casamento{
			background-image: url("assets/img/buque.jpg");
			margin: 20px auto;
			padding: 150px;
			border: thick  groove  rgb(252, 215, 65);
			width: 480px;
			font-family: 'Lily Script One', cursive;

		}
		#curso{
			background: #cffcf3;
			margin: 20px auto;
			padding: 100px;
			text-align: center;
			border: 1px solid rgb(252, 215, 65);
			width: 500px;
			font-family: 'Lily Script One', cursive;
		}
		#aniversario{
			background: url('assets/img/balao1.jpg');
			margin: 20px auto;
			border: thick  groove rgb(219, 244, 203);
			padding: 120px;
			width: 380px;
			text-align: justify;
			text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #f9f9f9, 0 0 70px #f9f9f9, 0 0 80px #f9f9f9, 0 0 100px #f9f9f9, 0 0 150px #f9f9f9;
			font-family: 'Rye', cursive;
		}
		#sale{
			background: #f9dabd;
			margin: 20px auto;
			padding: 150px;
			width: 300px;
			text-shadow: 0px 2px 3px #666;
			text-align: center;
			font-family: 'Londrina Solid', cursive;
			
		}
		#inauguracao{
			background: -moz-linear-gradient(bottom, #ffd400, #fff 50%); 
			background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #ffd400), color-stop(0.20, #fff));  
			border-top: 50px solid rgb(255, 0, 0);
			margin: 20px auto;
			padding: 150px auto;
			width: 500px;
			text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #ffd400, 0 0 70px #ffd400, 0 0 80px #ffd400, 0 0 100px #ffd400, 0 0 150px #ffd400;
			text-align: center;
			font-family: 'Lily Script One', cursive;
		}
		#happyhour{
			background: #3d3a3a;
			margin: 20px auto;
			padding: 100px;
			border: thick groove rgb(208, 0, 255);
			width: 300px;
			color:#6a0d9b;
			text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #ff00de, 0 0 70px #ff00de, 0 0 80px #ff00de, 0 0 100px #ff00de, 0 0 150px #ff00de;
			text-align: center;
			font-family: 'Merienda', cursive;
		}
		#forum{

			background: #fff;
			margin: 20px auto;
			padding: 100px;
			border: thick  groove rgb(0, 114, 255);
			width: 200px;
			text-align: justify;
			text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #000cff, 0 0 70px #000cff, 0 0 80px #000cff, 0 0 100px #000cff, 0 0 150px #000cff;
			font-family: 'Fauna One', serif;
		}
		#formatura{
			
			background: -moz-linear-gradient(bottom, #b6ebf7, #fff 50%); 
			background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #b6ebf7), color-stop(0.20, #fff));  
			margin: 20px auto;
			padding: 150px;
			border: 1px solid #000;
			width: 500px;
			text-align: center;
			font-family: 'Lily Script One', cursive;
		}
		#personalizado{

			background: rgb(239, 244, 244);
			margin: 10px auto; 
			padding: 150px;
			border: 1px solid #000;
			width: 350px;
			text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #f9f9f9, 0 0 70px #f9f9f9, 0 0 80px #f9f9f9, 0 0 100px #f9f9f9, 0 0 150px #f9f9f9;
			font-family: 'Lily Script One', cursive;
			white-space: pre-line;
			
		}
		@media print
		{
		   * {-webkit-print-color-adjust:exact;}

		   .imgfundo {
		   	 opacity: 0.5;
		   }

		   a.btn, button {
		   	display: none;
		   }
		}
	</style>
</head>

<body>
<div class='container-fluid'>
	<p>&nbsp;</p>
	<?php
		
		$tipos = array("casamento","curso", "aniversario", 'sale', 'inauguracao', 'happyhour', 'forum','formatura');
		$convidado= isset($_POST['convidado']) ? $_POST['convidado'] : '';
		$local= isset($_POST['local'])  ? $_POST['local'] : '';
		$data= isset($_POST['data']) ? $_POST['data'] : '';
		$evento= isset($_POST['evento']) ? $_POST['evento'] : '';
		$titulo= isset($_POST['titulo']) ? $_POST['titulo'] : '';
		$posicao= isset($_POST['pos']) ? $_POST['pos'] : '';
		$mensagem= isset($_POST['mensagem']) ? $_POST['mensagem'] : '';
		$imagemevento= isset($_POST['imagemevento']) ? $_POST['imagemevento'] : '';
		$url_img= isset($_FILES['arq']['name']) && !empty($_FILES['arq']['name']) ? "Uploads/" . $_FILES['arq']['name'] : '' ;
		$pos = isset($_POST['pos'])&& $_POST['pos'] == 'direita' ? 'pull-right' : 'pull-left';
		/*var_dump($_POST['imagemevento']);*/
		require_once 'templates.php';
		if (isset($_POST['evento']) and !empty($_POST['evento']) and in_array($imagemevento, $tipos)) {
			/*$pos = ($_POST['pos'] == 'direita' ? 'pull-right' : 'pull-left')*/
			
			echo $templates[$imagemevento];
			$pdf=pdf($templates[$imagemevento]);
		}
		elseif(!empty($url_img)){
			echo $templates['personalizado'];
			$pdf=pdf($templates['personalizado']);
		}

	?>
	<div>

		<a href="download.php?arquivo=<?php echo urlencode($pdf) ?>" class="btn btn-success btn-large" ><i class='icon-download-alt icon-white icon-1x'></i><a href="" ></a></button>

		<a href="javascript:;" onclick="javascript:window.print();return false" class="btn btn-success btn-large" ><i class=" icon-print icon-1x" title="Imprimir"> </i> </a>
	</div>
</div>
</body>
</html>