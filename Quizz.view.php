<?php
// header('Content-Type: application/json');
$qzzb_tablename = "Quizz_Builder_Page";
$style = json_decode($dbArray['Style']);
?><!DOCTYPE html quizz-builder='pro'>
<html>
<head>
	<title><?php echo $dbObject->TitleBar; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/icon" href="<?php echo get_site_url(); ?>/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta name="description" content="<?php echo $dbObject->Description; ?>">

 	<style type="text/css">
 		* { margin: 0; padding: 0; }
 		.hidden {
 			display: none;
 		}
 		button {
 			padding: 20px;margin: 15px;
 		}
 		body {
 			line-height: 30px;
 		}
 		.Quizz_Builder_Box {
 			display: none;
 		}

 		.quizz-builder-btn {
 			/*border: 5px solid rgba(255,255,255,.3);*/
 			border-radius: 7px;
 			padding: 20px 50px;
 			text-align: center;
 			max-width: 800px;
 			width: 100%;
 			margin: 15px 5px;
 			/*background: rgba(255,255,255,.1);*/
 			border: none;
 			background: white;
 			display: block;
 			font: bold 25px montserrat, arial;
 			color: #666;
 			cursor: pointer;
 			text-transform: uppercase;
 			transition: .068s ease-in;
 		}
 		.quizz-builder-btn:hover {
 			color:  <?php echo $style->buttonsTextHoverColor; ?>;/*rgba(249,93,166,1);*/
 			background: rgba(255,255,255,.7);
 			box-shadow: 3px 3px 5px 3px #00000055;
 		}
 		.Quizz_Builder_Content {
 			max-width: 800px;
 			width: calc(100% - 70px);
 			margin: 0 auto;
 		}
 		.Quizz_Builder_Wrapper {
			background: rgb(111,79,238);
			<?php echo $style->background; ?>;/* linear-gradient(0deg, rgba(111,79,238,1) 0%, rgba(249,93,166,1) 100%); */
 			/*padding-left: 35px;*/
 			/*padding-right: 35px;*/
 			padding-top: 50px;
 			padding-bottom: 50px;
 			text-align: center;

			height: 100%;
			width: 100%;
			position: fixed;
			overflow: auto;
 		}
 		.qzz-politicas {
 			font:11px arial;margin-top:30px;
 		}
 		.qzz-politicas a {
 			color: #333;
 			text-decoration: none;
 		}
 		body {
 			background: <?php echo $style->body; ?>;
 			font: 14px montserrat, arial;
 		}
 		h1 {
 			margin-top: 25px;
 			margin-bottom: 10px;
 			color: rgba(255,255,255,.6);
 			transition: .3s ease-in;
 		}
 		.h3 {
 			font-size: 20px;
 			margin-top: 25px;
 			margin-bottom: 10px;
 		}
 		.h4 {
 			font-size: 18px;
 			line-height: 30px;
 		}
 		@media screen and (max-width: 500px) {
			.Quizz_Builder_Wrapper {
				padding-left: 10px;
				padding-right: 10px;
			}
 		}
 	</style>
</head>
<body>
<div class="Quizz_Builder_Wrapper">
<div class="Quizz_Builder_Content">
	<?php if($dbObject->Image): ?><div><img src="<?php echo $dbObject->Image; ?>" style='width: 100%; max-width: 400px'></div><?php endif; ?>

	<?php if($dbObject->HeadLine): ?><div class="h3"><?php echo str_replace("%city%", pro_qzz_get_city(), $dbObject->HeadLine); ?></div><?php endif; ?>

	<?php if($dbObject->Text): ?><div><?php echo str_replace("%city%", pro_qzz_get_city(), $dbObject->Text); ?></div><?php endif; ?>

<div class="Quizz_Builder_Box">
		<?php
		$qzz_lst = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}options WHERE option_name LIKE '%_{$id}%' AND option_name LIKE '%{$qzzb_tablename}%'");

		$qzz_questions = array();
		$qzz_new_dt = array();
		foreach ($qzz_lst as $key => $item)
		{
			$qzz_new_dt[$item->option_name] = $item->option_value;

			// SEPARAR POR QUESTIONS
			if (preg_match("/ID/", $item->option_name)) 
			{
				$qzz_questions[$item->option_value] = array();
			}
		}

		// jogar os dados em cada array de id
		$qzz_questions_IDS = array();
		$qzz_questions_prepared = array();
		foreach ($qzz_new_dt as $key => $item)
		{
			if (preg_match("/ID/", $key))
			{
				$qzz_questions_IDS[$item] = array("ID" => $item);
				$qzz_questions_prepared[$item] = array("ID" => $item);
			}
		}

		foreach ($qzz_questions_IDS as $id)
		{
			// echo $id['ID'].'|';
			foreach ($qzz_new_dt as $key => $item)
			{
				// ECHO $key.'|';
				// procura ID nas informacoes
				// se acha, eh porque eh o mesmo questionario
				if (preg_match("/".$id['ID']."/", $key))
				{
					$qzz_questions_prepared[$id['ID']][$key] = $item;
					// echo $id['ID'].': '.$item.'<br>';
					//$qzz_questions_prepared[] = array($key => $item);
				}

			}
		}

		// print_r($qzz_questions_prepared);

		$qzz_buttons = array();
		foreach($qzz_questions_prepared as $question_box)
		{
			?><div id="Quizz_Builder_View_<?php echo $question_box['ID']; ?>" class='view'><?php
				echo "\n";
				// echo "{$qzzb_tablename}_Q_".$question_box['ID']."_LabelOption_{$n}_{$id}";
				foreach ($question_box as $question_item_key => $question_item_value)
				{

					if (strpos($question_item_key, $question_box['ID']."_HeadLine")) 
					{
						?><h1 class='qzz-h1' style='font-weight: bold;font-size:28px'><?php echo str_replace("%city%", pro_qzz_get_city(), $question_item_value); ?></h1><?php
					}
					

					if (strpos($question_item_key, $question_box['ID']."_Text")) 
					{
						?><div class='h4'><?php echo str_replace("%city%", pro_qzz_get_city(), $question_item_value); ?></div><?php
					}


					if (strpos($question_item_key, $question_box['ID']."_LabelOption"))
					{
						$qzz_buttons[$question_box['ID']]['label'][] = $question_item_value;

						?><button class='quizz-builder-btn' onclick='Quizz_Builder_Show("<?php echo $question_box['ID']; ?>", "<?php echo $question_item_value; ?>")'><?php echo $question_item_value; ?></button><?php
					}
					
					if (strpos($question_item_key, $question_box['ID']."_LinkOption"))
					{
						$qzz_buttons[$question_box['ID']]['link'][] = $question_item_value;
					}
					
					if (strpos($question_item_key, $question_box['ID']."_FormOption"))
					{
						$qzz_buttons[$question_box['ID']]['form'][] = $question_item_value;
					}
				}

			?></div><?php
		}


  ?>
</div>

<div>
	<center>
		<div style="display:table;" class="qzz-politicas">
			&copy; Todos os direitos reservados - 			
			<a href="">Termos de Uso</a> • 
			<a href="">Políticas de Privacidade</a>
		</div>
	</center>
</div>

<script type="text/javascript">
	// mostra caixa com todas as perguntas somente depois
	// delas terem sido renderizdas, para nao abrir tudo
	// de uma vez por alguns segundos enquanto carrega
	// os dados do banco de dados
	var qzz_box = document.querySelector('.Quizz_Builder_Box');
	if (qzz_box) qzz_box.style.display = 'block';

	var qzz_buttons = <?php echo json_encode($qzz_buttons); ?>;

	function Quizz_Builder_Show(id, label) {
		var dt = qzz_buttons[id];

		var nid = 0, count = 0;
		dt.label.forEach(function(l) {
			if (label == l) nid = count;
			count ++;
		});

		Quizz_Builder_AlterView(dt.form[nid], dt.link[nid]);
	}
</script>



<br><br>
</div>
</div>

<script type="text/javascript">

	// SO ESTA SALVANDO A ACAO DO ULTIMO BOTAO CARREGADO DE CADA LINHA NO FILL DATA


	// PRECISA DE UMA OPCAO PARA ESCOLHER QUAL FORM VAI SER O PRIMEIRO

	function Quizz_Builder_AlterH1Color(color) {
		var H1s = document.querySelectorAll('.qzz-h1');
		if (H1s.length) H1s.forEach(function(h1) {
			h1.style.color = color;
		});
	}


	function Quizz_Builder_AlterView(id, link) {
		console.log(id);
		if (!id) {
			document.location = link;
			return false;
		}

		document.querySelectorAll('.view').forEach(function(element) {
			element.style.display = 'none';
		});

		if (document.getElementById('Quizz_Builder_View_' + id)) document.getElementById('Quizz_Builder_View_' + id).style.display='block';

		
		Quizz_Builder_AlterH1Color('<?php echo $style->buttonsTextHoverColor ? $style->buttonsTextHoverColor : '#d9086d'; ?>');
		setTimeout(function() {
			Quizz_Builder_AlterH1Color('<?php echo $style->H1Transition ? $style->H1Transition : 'rgba(255,255,255,.6)'; ?>');
		}, 100);
	}

	if ("<?php echo $dbObject->FirstForm; ?>") Quizz_Builder_AlterView("<?php echo $dbObject->FirstForm; ?>");
	else {
		var n = 0, last;
		for (var i in qzz_buttons) {
			last = i;
			n++;
		}
		if (n) Quizz_Builder_AlterView(last);
	}
</script>





<script type="text/javascript">
	


var h4_tmp;
document.querySelectorAll('.h4').forEach(function(h4) {
	h4_tmp=h4;
	var id = h4.parentNode.getAttribute('id');
	h4.parentNode.innerHTML = h4_tmp.outerHTML + h4.parentNode.innerHTML;
	document.querySelector('#'+id).removeChild(document.querySelectorAll('#'+id+' > .h4')[1]);
});

var h1_tmp;
document.querySelectorAll('.qzz-h1').forEach(function(h1) {
	h1_tmp=h1;
	var id = h1.parentNode.getAttribute('id');
	h1.parentNode.innerHTML = h1_tmp.outerHTML + h1.parentNode.innerHTML;
	document.querySelector('#'+id).removeChild(document.querySelectorAll('#'+id+' > .qzz-h1')[1]);
});

</script>

</body>
</html>