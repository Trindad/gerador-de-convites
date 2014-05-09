<?php
	$arquivo=$_GET['arquivo'];
	if(empty($arquivo) || !file_exists($arquivo)){
		exit("arquivo invalido");
	}

	$arquivo=urldecode($arquivo);//
	$dados=file_get_contents($arquivo);

	header("Cache-Control: public");
	header("Content-Description: File Transfer");
	header("Content-Disposition: attachment; filename=$arquivo");
	header("Content-Type: application/zip");
	header("Content-Transfer-Encoding: binary");

	// Read the file from disk
	readfile($arquivo);


	@unlink($arquivo);//deletar arquivo