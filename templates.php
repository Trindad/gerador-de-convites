
<?php

$templates['personalizado'] = <<<EOD
<div class='convite'  style=" margin: 60px auto;padding:120px; height:200px; text-align: center;position:relative;z-index:-50;width:690px;height:480px;top:0;left:0;" class="imgfundo" / >
	<img src="{$url_img}" alt="personalizado" style="position:absolute;z-index:-50;width:690px;height:480px;top:0;left:0;" class="imgfundo" />
	<h3 style="font-size: 30px;line-height: 50px;text-align: center;font-family: 'Lily Script One', cursive;">{$titulo}</h3>
	<p style="font-family: 'Lily Script One', cursive;white-space: pre-line;">{$mensagem}</p>
</div>
EOD;

$templates['casamento'] = <<<EOD

<div class="convite"  style=" margin: 60px auto;padding:120px;border: thick  groove  rgb(252, 215, 65);width:450px;font-family: 'Lily Script One', cursive;color:#604c1a;text-align: justify;text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #f9f9f9, 0 0 70px #f9f9f9, 0 0 80px #f9f9f9, 0 0 100px #f9f9f9, 0 0 150px #f9f9f9;z-index:10;position:relative;">
	<img src="assets/img/buque.jpg" alt="casamento"  style="position:absolute;z-index:-50;width:690px;height:480px;top:0;left:0;" class="imgfundo" />
	<img src="assets/img/casamento.png" alt="casamento" width="100px" height="90px" class="$pos"/>
	<h3 style="font-size: 30px;line-height: 50px;text-align: center;z-index:10;">Fulano e Fulana</h3>
	<p style="z-index:10;">Temos a honra de condivar para nosso casamento que será realizado no dia {$data} na igreja {$local} . Agradecemos a sua confirmação. {$convidado} </p>

</div>
EOD;

$templates['aniversario'] = <<<EOD
<div class="convite" style="margin: 20px auto;border: thick  groove rgb(219, 244, 203);padding: 120px;width: 380px;text-align: justify;text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #f9f9f9, 0 0 70px #f9f9f9, 0 0 80px #f9f9f9, 0 0 100px #f9f9f9, 0 0 150px #f9f9f9;position:relative;">
	<img src="assets/img/balao1.jpg" alt="aniversario" style="position:absolute;z-index:-50;width:690px;height:650px;top:0;left:0;" class="imgfundo" />
	<img src="assets/img/Red.png" alt="aniversario" width="130px" height="90px" class="$pos"/>
	<h3 style="font-size: 30px;line-height: 50px;text-align: center;">Hoje &eacute; o meu anivers&aacute;rio</h3>
	<p style="	text-align: justify;text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #f9f9f9, 0 0 70px #f9f9f9, 0 0 80px #f9f9f9, 0 0 100px #f9f9f9, 0 0 150px #f9f9f9;font-family: 'Rye', cursive;">
	Sabe o que desejo? Sua presença. Compareça no dia {$data} no {$local} para juntos festejarmos mais um ano de vida. Desde já agradeço sua presença e seu presente. {$convidado}.
	</p>

</div>
EOD;

$templates['curso'] = <<<EOD
<div class="convite" style="background: #cffcf3;margin: 20px auto;padding: 100px;text-align: center;border: 1px solid rgb(252, 215, 65);width: 500px;">
	<img src="assets/img/Courses-256.png" alt="curso" width="100px" height="90px" class="$pos"/>
	<h3 style="font-size: 30px;line-height: 50px;text-align: center; font-family: 'Lily Script One', cursive;">Curso</h3>
	<p style="font-family: 'Lily Script One', cursive;">Compareça no {$data} no {$local} e adquira um cerébro novo, desenvolvendo novas atividades, poderá visualmente perceber o seu avanço. Desde então contamos com você e seu cerébro {$convidado}.</p>

</div>
EOD;

$templates['happyhour'] = <<<EOD
<div class="convite"  style="background: #3d3a3a;margin: 20px auto;padding: 100px;border: thick groove rgb(208, 0, 255);width: 300px;color:#6a0d9b;text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #ff00de, 0 0 70px #ff00de, 0 0 80px #ff00de, 0 0 100px #ff00de, 0 0 150px #ff00de;text-align: center;font-family: 'Merienda', cursive;">
	<img src="assets/img/martini.png" alt="happyhour" width="150px" height="90px" class="$pos"/>
	<h3 style="font-size: 30px;line-height: 50px;text-align: center;">Happy Hour</h3>
	<p style="">Compareça no {$local} no dia {$data}, {$convidado} e divirta-se.</p>

</div>
EOD;

$templates['sale'] = <<<EOD
<div class="convite"  style="background: #f9dabd;margin: 20px auto;padding: 150px;width: 300px;text-shadow: 0px 2px 3px #666;text-align: center;font-family: 'Londrina Solid', cursive;">
	<img src="assets/img/Sale-tag-256.png" alt="sale" width="100px" height="90px" class="$pos"/>
	<h3 style="font-size: 30px;line-height: 50px;text-align: center;text-align: center;font-family: 'Londrina Solid', cursive;">Venha Conferir</h3>
	<p style="text-align: center;font-family: 'Londrina Solid', cursive;">{$convidado} compareça no {$local} no dia {$data} e confira nosssas promoções.</p>

</div>
EOD;

$templates['forum'] = <<<EOD
<div class="convite" id="forum">
	<img src="assets/img/Exclamation.png" alt="aniversario" width="80px" height="70px" class="$pos"/>
	<h3 style="font-size: 30px;line-height: 50px;text-align: center;">Forum</h3>
	<p style="">Participe do forum no dia : {$data}. local:{$local}.Desde então agradeço {$convidado}.</p>

</div>
EOD;

$templates['formatura'] = <<<EOD
<div class="convite"  style="background: -moz-linear-gradient(bottom, #b6ebf7, #fff 50%); background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #b6ebf7), color-stop(0.20, #fff));  margin: 20px auto;padding: 150px;border: 1px solid #000;width: 500px;text-align: center;font-family: 'Lily Script One', cursive;">
	<img src="assets/img/formatura.png" alt="formatura" width="100px" height="90px" class="$pos"/>
	<h3 style="font-size: 30px;line-height: 50px;text-align: center;">Minha Formatura</h3>
	<p style="">Tenho a honra de convocar {$convidado} para minha formatura no dia {$data} em {$local}. Agradeço desde já a confirmação e presença .</p>

</div>
EOD;

$templates['inauguracao'] = <<<EOD
<div class="convite" style="background: -moz-linear-gradient(bottom, #ffd400, #fff 50%); background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #ffd400), color-stop(0.20, #fff));  border-top: 50px solid rgb(255, 0, 0);margin: 20px auto;padding: 150px auto;width: 500px;text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #ffd400, 0 0 70px #ffd400, 0 0 80px #ffd400, 0 0 100px #ffd400, 0 0 150px #ffd400;text-align: center;font-family: 'Lily Script One', cursive;">
	<img src="assets/img/tesourainaugural.png" alt="inauguracao" width="100px" height="90px" class="$pos"/>
	<h3 style="font-size: 30px;line-height: 50px;text-align: center;">{$convidado}</h3>
	<p style="font-size: 20px;line-height: 40px;text-align: center;font-family: 'Lily Script One', cursive;">Você esta convidado para a inauguração mais esperada de todos os tempos.Local: {$local} no dia {$data}.</p>

</div>
EOD;

