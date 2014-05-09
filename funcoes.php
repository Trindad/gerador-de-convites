<?php
function verificadados(){

	$erros = array();
	if($_POST['tipo'] == "automatico"){

		$validar = array(
			"evento" => "Não informou evento", 
			"local" => "Não informou local", 
			"convidado" => "Não informou convidado", 
			"data" => "Não informou data", 
			"pos" => "Não informou posição"
		);
	}
	else{
		$mimes = array(
			"image/jpeg",
			"image/png",
			"image/gif",
			"image/jpg",
		);

		$validar = array(
			"titulo" => "Não informou título", 
			"mensagem" => "Não tem mensagem",  
		);
		if (!isset($_FILES['arq']) || !empty($_FILES['arq']['error']) ) {
			$erros[]="Não foi possível fazer upload do arquivo";
		}
		elseif(!in_array($_FILES['arq']['type'], $mimes)) {
			$erros[]="Não é imagem este arquivo";
		}
		elseif($_FILES['arq']['size'] > $_POST["MAX_FILE_SIZE"]){
			$erros[]="Este arquivo ultrapassou seu limite de upload";
		}
		else{
			$nomeArquivo=$_FILES['arq']['name'];
			move_uploaded_file($_FILES['arq']['tmp_name'],"Uploads/$nomeArquivo");
		}
	}
	if (isset($_POST['enviar'])) {
		foreach ($validar as $key => $value) {
			if (!isset($_POST[$key]) || empty($_POST[$key])) {
				$erros[] = $value;
			}
		}
	}

	if ($erros) {
		echo "<div class='alert alert-error'><h5>Os seguintes erros aconteceram: </h5><ul>";
		echo "<li>" . implode("</li><li>", $erros) . "</li>";
		echo "</ul><a class='btn btn-danger' href='convite.php'>Voltar ao formulário</a></div>";
		exit();
	}
}
require_once('dompdf-master/dompdf_config.inc.php');

function pdf($html) {

	$dompdf = new DOMPDF();
	$dompdf->load_html($html);
	$dompdf->render();
	$output= $dompdf->output();
	$nomeArquivo=time() . "_convite.pdf";
	file_put_contents($nomeArquivo, $output);
	return $nomeArquivo;
}