<?php
/*
Plugin Name:		Quizz Builder Pro
Plugin URI: 		http://ezeksoft.com/quizz-builder-pro/?utm_source=plugin-page&utm_medium=wordpress&utm_content=plugged&utm_campaign=organic&v=lite&utm_page=plugins
Description:		Crie um Quiz personalizado
Version: 			1.0.1
Author: 			Ezeksoft
Author URI: 		http://ezeksoft.com
*/

require(dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'Ezeksoft.class.php');
$Ezeksoft_Quizz_Builder = new Ezeksoft_Quizz_Builder_Pro();

global $wpdb;

$qzzb_tablename = "Quizz_Builder_Page";
$qzzb_conf = "CONFIG";




// quantidade de perguntas
// update_option("{$qzzb_tablename}_{$qzzb_conf}_qtd_forms", 5);
// $qzzb_qtd_forms = get_option("{$qzzb_tablename}_{$qzzb_conf}_qtd_forms");


// a quantidade de botões em cada pergunta é dinamica de cada uma



// fields
$qzzb_fields_db = array(
	"URI" /* primary key */, 
	"TitleBar", 
	"Description",
	"Image",
	"HeadLine",
	"Text",
	"FirstForm",

	"Style",
);


// for ($i = 1; $i <= (int) $qzzb_qtd_forms; $i++)
// {
// 	// no form $i tem quantos botões?

// 		$qzzb_fields_db[] = "Q_{$i}_ID";
// 		$qzzb_fields_db[] = "Q_{$i}_HeadLine";
// 		$qzzb_fields_db[] = "Q_{$i}_Text";
// 		$qzzb_fields_db[] = "Q_{$i}_LabelOption";
// 		$qzzb_fields_db[] = "Q_{$i}_LinkOption";
// 		$qzzb_fields_db[] = "Q_{$i}_FormOption";
// }






	// // fields
	// array(
	// 	"URI" /* primary key */, 
	// 	"TitleBar", 
	// 	"Description",
	// 	"Image",
	// 	"HeadLine",
	// 	"Text",

	// 	"Q_1_Name",
	// 	"Q_1_Title",
	// 	"Q_1_LabelOption_1",
	// 	"Q_1_LinkOption_1",
	// 	"Q_1_FormOption_1",
	// 	"Q_1_LabelOption_2",
	// 	"Q_1_LinkOption_2",
	// 	"Q_1_FormOption_2",
	// 	"Q_1_LabelOption_3",
	// 	"Q_1_LinkOption_3",
	// 	"Q_1_FormOption_3",
		
	// 	"Q_2_Name",
	// 	"Q_2_Title",
	// 	"Q_2_LabelOption_1",
	// 	"Q_2_LinkOption_1",
	// 	"Q_2_FormOption_1",
	// 	"Q_2_LabelOption_2",
	// 	"Q_2_LinkOption_2",
	// 	"Q_2_FormOption_2",
	// 	"Q_2_LabelOption_3",
	// 	"Q_2_LinkOption_3",
	// 	"Q_2_FormOption_3",
		
	// 	"Q_3_Name",
	// 	"Q_3_Title",
	// 	"Q_3_LabelOption_1",
	// 	"Q_3_LinkOption_1",
	// 	"Q_3_FormOption_1",
	// 	"Q_3_LabelOption_2",
	// 	"Q_3_LinkOption_2",
	// 	"Q_3_FormOption_2",
	// 	"Q_3_LabelOption_3",
	// 	"Q_3_LinkOption_3",
	// 	"Q_3_FormOption_3",
	// );






$Ezeksoft_Quizz_Builder->struct_db_by_uri(

	$qzzb_tablename, // table name
	
	$qzzb_fields_db, // fields

	"Quizz.view.php" // open file if data exists 

);





// $pidy=12;


// update_option("Quizz_Builder_Page_URI_{$pidy}", "quizz-test-{$pidy}");
// update_option("Quizz_Builder_Page_TitleBar_{$pidy}", "Afiliado Campeão");
// update_option("Quizz_Builder_Page_Description_{$pidy}", "Curso ensina como se tornar um TOP afilido.");
// update_option("Quizz_Builder_Page_Image_{$pidy}", "https://afiliadoranqueado.com.br/wp-content/uploads/2019/04/nicolas-redondo.png");
// update_option("Quizz_Builder_Page_HeadLine_{$pidy}", "Como faturem 2k em 30 dias.");
// update_option("Quizz_Builder_Page_Text_{$pidy}", "A apresentação a seguir é restrita e só pode ser vista depois que você responder às perguntas a seguir o mais honestamente possível. (Role a página se estiver acessando do celular)");


// $x=1;
// 	update_option("Quizz_Builder_Page_Q_{$x}_Name_{$pidy}", "form_inicio");
// 	update_option("Quizz_Builder_Page_Q_{$x}_Title_{$pidy}", "Você gostaria de trabalhar em casa?");
// 	update_option("Quizz_Builder_Page_Q_{$x}_LabelOption_{$pidy}", json_encode( array(
// 		"Sim, gostaria - {$x}",
// 		"Não - {$x}",
// 		"Talvez - {$x}",
// 	)));
// 	update_option("Quizz_Builder_Page_Q_{$x}_LinkOption_{$pidy}", json_encode( array(
// 		"http://google.com/?sim-{$x}",
// 		"http://google.com/?nao-{$x}",
// 		"http://google.com/?talvez-{$x}",
// 	)));
// 	update_option("Quizz_Builder_Page_Q_{$x}_FormOption_{$pidy}", json_encode( array(
// 		"form_sim_veio_do_inicio",
// 		"form_nao_veio_do_inicio",
// 		"form_talvez_veio_do_inicio",
// 	)));

// $x=2;
// 	update_option("Quizz_Builder_Page_Q_{$x}_Name_{$pidy}", "form_sim_veio_do_inicio");
// 	update_option("Quizz_Builder_Page_Q_{$x}_Title_{$pidy}", "Formulario da resposta SIM");
// 	update_option("Quizz_Builder_Page_Q_{$x}_LabelOption_{$pidy}", json_encode( array(
// 		"Sim, gostaria - {$x}",
// 		"Não - {$x}",
// 		"Talvez - {$x}",
// 	)));
// 	update_option("Quizz_Builder_Page_Q_{$x}_LinkOption_{$pidy}", json_encode( array(
// 		"http://google.com/?sim-{$x}",
// 		"http://google.com/?nao-{$x}",
// 		"http://google.com/?talvez-{$x}",
// 	)));
// 	update_option("Quizz_Builder_Page_Q_{$x}_FormOption_{$pidy}", json_encode( array(
// 		"",
// 		"",
// 		"",
// 	)));

// // for ($x=1; $x<=$qzzb_qtd_forms; $x++)
// for ($x=3; $x<=5; $x++)
// {
// 	update_option("Quizz_Builder_Page_Q_{$x}_Name_{$pidy}", "form_alternativos");
// 	update_option("Quizz_Builder_Page_Q_{$x}_Title_{$pidy}", "Você gostaria de trabalhar em casa?");
// 	update_option("Quizz_Builder_Page_Q_{$x}_LabelOption_{$pidy}", json_encode( array(
// 		"Sim, gostaria - {$x}",
// 		"Não - {$x}",
// 		"Talvez - {$x}",
// 	)));
// 	update_option("Quizz_Builder_Page_Q_{$x}_LinkOption_{$pidy}", json_encode( array(
// 		"http://google.com/?sim-{$x}",
// 		"http://google.com/?nao-{$x}",
// 		"http://google.com/?talvez-{$x}",
// 	)));
// 	update_option("Quizz_Builder_Page_Q_{$x}_FormOption_{$pidy}", json_encode( array(
// 		"form_inicio",
// 		"form_inicio",
// 		"form_inicio",
// 	)));
// }



















// update_option("Quizz_Builder_Page_Q_1_LabelOption_1_1", "Sim, gostaria.");
// update_option("Quizz_Builder_Page_Q_1_LinkOption_1_1", "http://google.com");
// update_option("Quizz_Builder_Page_Q_1_FormOption_1_1", "form_2");
// update_option("Quizz_Builder_Page_Q_1_LabelOption_2_1", "Nunca, jamais.");
// update_option("Quizz_Builder_Page_Q_1_LinkOption_2_1", "http://youtube.com");
// update_option("Quizz_Builder_Page_Q_1_FormOption_2_1", "form_2");
// update_option("Quizz_Builder_Page_Q_1_LabelOption_3_1", "Talvez.");
// update_option("Quizz_Builder_Page_Q_1_LinkOption_3_1", "Talvez.");
// update_option("Quizz_Builder_Page_Q_1_FormOption_3_1", "form_2");






//		update_option("Quizz_Builder_Page_Q_2_Name_1", "form_2");
//		update_option("Quizz_Builder_Page_Q_2_Title_1", "Você gostaria de trabalhar em empresa?");
// update_option("Quizz_Builder_Page_Q_2_LabelOption_1_1", "2 Sim, gostaria.");
// update_option("Quizz_Builder_Page_Q_2_LinkOption_1_1", "http://google.com");
// update_option("Quizz_Builder_Page_Q_2_FormOption_1_1", "form_3");
// update_option("Quizz_Builder_Page_Q_2_LabelOption_2_1", "2 Nunca, jamais.");
// update_option("Quizz_Builder_Page_Q_2_LinkOption_2_1", "http://youtube.com");
// update_option("Quizz_Builder_Page_Q_2_FormOption_2_1", "form_3");
// update_option("Quizz_Builder_Page_Q_2_LabelOption_3_1", "2 Talvez.");
// update_option("Quizz_Builder_Page_Q_2_LinkOption_3_1", "Talvez.");
// update_option("Quizz_Builder_Page_Q_2_FormOption_3_1", "form_3");

//		update_option("Quizz_Builder_Page_Q_3_Name_1", "form_3");
//		update_option("Quizz_Builder_Page_Q_3_Title_1", "Redirecionar?");
// update_option("Quizz_Builder_Page_Q_3_LabelOption_1_1", "3 Sim, gostaria.");
// update_option("Quizz_Builder_Page_Q_3_LinkOption_1_1", "http://google.com");
// update_option("Quizz_Builder_Page_Q_3_FormOption_1_1", "");
// update_option("Quizz_Builder_Page_Q_3_LabelOption_2_1", "3 Nunca, jamais.");
// update_option("Quizz_Builder_Page_Q_3_LinkOption_2_1", "http://youtube.com");
// update_option("Quizz_Builder_Page_Q_3_FormOption_2_1", "");
// update_option("Quizz_Builder_Page_Q_3_LabelOption_3_1", "3 Talvez.");
// update_option("Quizz_Builder_Page_Q_3_LinkOption_3_1", "Talvez.");
// update_option("Quizz_Builder_Page_Q_3_FormOption_3_1", "");








// update_option("Quizz_Builder_Page_URI_2", 'badx');
// update_option("Quizz_Builder_Page_TitleBar_2", "Afiliado Perdedor");
// update_option("Quizz_Builder_Page_Description_2", "Curso ensina como se tornar um BAD afilido.");
// update_option("Quizz_Builder_Page_Image_2", "https://afiliadoranqueado.com.br/wp-content/uploads/2019/04/nicolas-redondo.png");
// update_option("Quizz_Builder_Page_HeadLine_2", "Como faturem 1k em 20 dias.");
// update_option("Quizz_Builder_Page_Text_2", "Nicolas Fernandes, especialista em Marketing Digital, revela como você pode começar a trabalhar em casa em um negócio diferente de tudo o que você já viu e que precisa apenas de uma conexão com a internet.");
// update_option("Quizz_Builder_Page_Q_1_Name_2", "form_2");
// update_option("Quizz_Builder_Page_Q_1_Title_2", "Você gostaria de trabalhar em cowork?");
// update_option("Quizz_Builder_Page_Q_1_LabelOption_1_2", "Sim, gostaria.");
// update_option("Quizz_Builder_Page_Q_1_LinkOption_1_2", "http://google.com");
// update_option("Quizz_Builder_Page_Q_1_FormOption_1_2", "form-2");
// update_option("Quizz_Builder_Page_Q_1_LabelOption_2_2", "Nunca, jamais.");
// update_option("Quizz_Builder_Page_Q_1_LinkOption_2_2", "http://youtube.com");
// update_option("Quizz_Builder_Page_Q_1_FormOption_2_2", "form-7");
// update_option("Quizz_Builder_Page_Q_1_LabelOption_3_2", "Talvez.");
// update_option("Quizz_Builder_Page_Q_1_LinkOption_3_2", "Talvez.");
// update_option("Quizz_Builder_Page_Q_1_FormOption_3_2", "form-4");


function qzz_new_id_pro()
{
	global $wpdb;
	// o _id vai ser o ultimo ID primary + 1
	$list = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}options WHERE 1 ORDER BY option_id DESC LIMIT 1");
	$id=0 ; if (sizeof($list)) $id = ( (int) $list[0]->option_id ) + 1;
	return $id;
}

function pro_qzz_get_city()
{
	if (is_callable('curl_init'))
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://ipinfo.io/".$_SERVER['REMOTE_ADDR']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($ch);
		curl_close($ch);
		$ob = json_decode($output);
		return $ob->city;
	}
	else
		return "São Paulo";
}


function pro_qzz_save_fnajax()
{
	global $qzzb_tablename;

	$id = qzz_new_id_pro();
	
	$uri = $_POST['uri'];
	$titlebar = $_POST['titlebar'];
	$description = $_POST['description'];
	$headline = $_POST['headline'];
	$text = $_POST['text'];
	$image = $_POST['image'];
	$first_form = $_POST['first_form'];
	$questions = $_POST['questions'];
	$style = json_encode($_POST['style']);



	foreach ($questions as $item)
	{
		$item = (object) $item;
		$qid = $item->id;
		update_option("{$qzzb_tablename}_Q_{$qid}_ID_{$id}", $item->id);
		update_option("{$qzzb_tablename}_Q_{$qid}_HeadLine_{$id}", $item->headline);
		update_option("{$qzzb_tablename}_Q_{$qid}_Text_{$id}", $item->text);

		$n=1; foreach ($item->buttons as $button)
		{			
			$button = (object) $button;
			update_option("{$qzzb_tablename}_Q_{$qid}_LabelOption_{$n}_{$id}", $button->label);
			update_option("{$qzzb_tablename}_Q_{$qid}_LinkOption_{$n}_{$id}", $button->link);
			update_option("{$qzzb_tablename}_Q_{$qid}_FormOption_{$n}_{$id}", $button->form);
			$n++;
		}

	}

	update_option("{$qzzb_tablename}_URI_".$id, $uri);
	update_option("{$qzzb_tablename}_TitleBar_".$id, $titlebar);
	update_option("{$qzzb_tablename}_Description_".$id, $description);
	update_option("{$qzzb_tablename}_HeadLine_".$id, $headline);
	update_option("{$qzzb_tablename}_Text_".$id, $text);
	update_option("{$qzzb_tablename}_Image_".$id, $image);
	update_option("{$qzzb_tablename}_FirstForm_".$id, $first_form);

	update_option("{$qzzb_tablename}_Style_".$id, $style);

	wp_die();
}

add_action('wp_ajax_qzz_save', 'pro_qzz_save_fnajax');







function pro_qzz_edit_fnajax()
{
	// global $qzzb_tablename;
	global $wpdb, $Ezeksoft_Quizz_Builder, $qzzb_tablename;

	$id = $_POST['id'];
	$uri = $_POST['uri'];


	$titlebar = $_POST['titlebar'];
	$description = $_POST['description'];
	$headline = $_POST['headline'];
	$text = $_POST['text'];
	$image = $_POST['image'];
	$first_form = $_POST['first_form'];
	$questions = $_POST['questions'];
	$style = json_encode($_POST['style']);




						
	// nao se apaga o link inteiro, somente o form
	// nao apagar todos os questions, somente o que nao estao na lista 
	// ou apagar todos e criar novo

	// logica: seleciona todas o questions
	// faz um loop
	// e compara cada um se existe dentro do range dos autais
	// se nao existe, separa numa lista que vai ser apagado


	// busca todos os options que sejam deste quizz
	$list_q = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}options WHERE option_name LIKE '_%{$id}%' 
		AND option_name LIKE '%{$qzzb_tablename}_Q_%'");


	$preseve_list = [];
	$preseve_list_buttons = [];

	// itera todas as perguntas que veio
	foreach ($questions as $question) // 3 q
	{	
		// itera todos os botoes que veio de cada pergunta
		foreach ($question['buttons'] as $button) // 6 b
		{
			// pegar o id do botao para saber que ele nao esta mais aqui			

			// salva em uma lista o ID da pergunta sendo a KEY e o id do botão, sendo o VALUE
			$preseve_list_buttons[$question['id']][] = $button["id"];
		}
	}

	/*
		FINAL 
		[
			"id_00000000_0000000": [ 1 ],

			"id_00000000_0000001": [ 1, 2, 3 ],

			"id_00000000_0000002": [ 1, 2 ]
		]
	*/





	// $h=fopen(dirname(__FILE__).DIRECTORY_SEPARATOR.'debug-buttons.txt','a+');fwrite($h,json_encode($preseve_list_buttons)."\n===\n\n");fclose($h);
					
	// itera lista de perguntas existentes no banco de dados
	if (sizeof($list_q))
	{
		// roda tudo
		foreach ($list_q as $q) // todos os dados do quiz atual
		{
			// se chegou 2 questions, roda 2x

			// itera lista de perguntas que veio via form
			foreach ($questions as $current) // atuais
			{
				$current_id = $current['id'];

				// se o item do banco de dados tem o ID do item que veio via form
				if (strpos($q->option_name, "_ID_" . $id)) 
				{
					$preseve_list[$current_id] = $current_id;
					
				}
			}
		}

		// itera lista do banco de dados
		foreach ($list_q as $q) // lista de todas as questions do ID atual
		{
			$_id = explode("Quizz_Builder_Page_Q_", $q->option_name);
			$_id = $_id[1]; // id_1585452998327_8702176497_LinkOption_1_3958
			$_id = explode("_", $_id);
			$_id = $_id[0] . "_" . $_id[1] . "_" . $_id[2]; // id_1585452998327_8702176497

			// se o ID da pergunta no banco de dados NÃO está numa lista de perservacao
			// ou seja, essa lista foi formada comparando o FORM com o BANCO DE DADOS
			// os dados qu BATERAM, ficaram nessa lista.
			if (!in_array($_id, $preseve_list)) 
			{
				//lista de exclusao na lista
				$wpdb->query("DELETE FROM {$wpdb->prefix}options WHERE option_name LIKE '_%{$id}%' 
				AND option_name = '{$q->option_name}'");
			}


			// tenho que verifica no banco de dados se os buttons existentes sao iguais
			// ao que veio no form, se forem diferentes, apaga os diferentes
			//update_option("{$qzzb_tablename}_Q_{$_id}_LabelOption_{$n}_{$id}", $button->label);
			// _LabelOption
			// procuro um numero
			// se os buttons nao estao na lista para preservar, apaga
			//"{$qzzb_tablename}_Q_{$_id}_LabelOption_{$n}_{$id}"

			// seleciona somente os dados com _LabelOption_ do banco de dados ja filtrado para o quizz atual
			$button_search = explode("_LabelOption_", $q->option_name);
			$button_search = $button_search[1];
			if ($button_search)
			{
				$button_search = explode("_", $button_search);
				$button_search = (string) $button_search[0];

				$sss_ = "$button_search, ".json_encode($preseve_list_buttons[$_id])."\n==========\n\n";
					// $h=fopen(dirname(__FILE__).DIRECTORY_SEPARATOR.'debug-sizeof.txt','a+');fwrite($h,$sss_."\n===\n\n");fclose($h);
				
				// depois corta por $id ou por _ e pega o zero
				
				// $button_search é um ID de botão, ou seja, valores como 1, 2, 3...
				// se esse botão não está na lista para preservar, então apaga
				if (!in_array($button_search, $preseve_list_buttons[$_id])) // $_id = ID da pergunta id_0000_0000
				{
					$sql_="DELETE FROM {$wpdb->prefix}options WHERE option_name LIKE '_%{$id}%' 
					AND 
						(
							option_name = '{$qzzb_tablename}_Q_{$_id}_LabelOption_{$button_search}_{$id}' OR
							option_name = '{$qzzb_tablename}_Q_{$_id}_LinkOption_{$button_search}_{$id}' OR
							option_name = '{$qzzb_tablename}_Q_{$_id}_FormOption_{$button_search}_{$id}'
						)
					";
					// $h=fopen(dirname(__FILE__).DIRECTORY_SEPARATOR.'debug-sizeof.txt','a+');fwrite($h,$sql_."\n===\n\n");fclose($h);
					$wpdb->query($sql_);
				}
			}
		}

	}
	// fazer isso nos botoes tambem

	// --


	

	if ($questions) foreach ($questions as $item)
	{
		$item = (object) $item;
		$qid = $item->id;
		update_option("{$qzzb_tablename}_Q_{$qid}_ID_{$id}", $item->id);
		update_option("{$qzzb_tablename}_Q_{$qid}_HeadLine_{$id}", $item->headline);
		update_option("{$qzzb_tablename}_Q_{$qid}_Text_{$id}", $item->text);

		$n=1; foreach ($item->buttons as $button)
		{		
			$button = (object) $button;
			update_option("{$qzzb_tablename}_Q_{$qid}_LabelOption_{$button->id}_{$id}", $button->label);
			update_option("{$qzzb_tablename}_Q_{$qid}_LinkOption_{$button->id}_{$id}", $button->link);
			update_option("{$qzzb_tablename}_Q_{$qid}_FormOption_{$button->id}_{$id}", $button->form);
			$n++;
		}

	}

	update_option("{$qzzb_tablename}_URI_".$id, $uri);
	update_option("{$qzzb_tablename}_TitleBar_".$id, $titlebar);
	update_option("{$qzzb_tablename}_Description_".$id, $description);
	update_option("{$qzzb_tablename}_HeadLine_".$id, $headline);
	update_option("{$qzzb_tablename}_Text_".$id, $text);
	update_option("{$qzzb_tablename}_Image_".$id, $image);
	update_option("{$qzzb_tablename}_FirstForm_".$id, $first_form);

	update_option("{$qzzb_tablename}_Style_".$id, $style);

	wp_die();
}

add_action('wp_ajax_qzz_edit', 'pro_qzz_edit_fnajax');






function pro_qzz_get_data_fnajax()
{
	global $wpdb, $Ezeksoft_Quizz_Builder, $qzzb_tablename;
	$uri = $_POST['uri'];

	$list = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}options WHERE option_value = '{$uri}'");


	$id = explode($qzzb_tablename."_URI_", $list[0]->option_name);
	$id = $id[1];
	$id_data = $id;

	// editaar

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

	$qzz_buttons = array();

	foreach($qzz_questions_prepared as $question_box)
	{
		foreach ($question_box as $question_item_key => $question_item_value)
		{

			if (strpos($question_item_key, $question_box['ID']."_HeadLine")) 
			{

			}
		}
	}



	$id = explode("_", $list[0]->option_name);
	$id = $id[sizeof($id)-1];
	$id_data = $id;


	echo json_encode(array(
		"questions" => $qzz_new_dt,
		"buttons" => $qzz_questions_prepared,
		"id" => $id_data,
	));
	wp_die();
}

add_action('wp_ajax_qzz_get_data', 'pro_qzz_get_data_fnajax');





function pro_qzz_del_data_fnajax()
{
	global $wpdb, $Ezeksoft_Quizz_Builder, $qzzb_tablename;
	$uri = $_POST['uri'];

	$list = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}options WHERE option_value = '{$uri}'
		AND option_name LIKE '%{$qzzb_tablename}%'");


	$id = explode("_", $list[0]->option_name);
	$id = $id[sizeof($id)-1];


	$wpdb->query("DELETE FROM {$wpdb->prefix}options WHERE option_name LIKE '_%{$id}%' 
		AND option_name LIKE '%{$qzzb_tablename}%'");

	echo $list[0]->option_name;

	wp_die();
}
add_action('wp_ajax_qzz_del_data', 'pro_qzz_del_data_fnajax');





// renderiza pagina de configuracoes do plugin
function pro_Quizz_Builder_render_html()
{
	global $wpdb, $qzzb_tablename;

	$dt_URI = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}options WHERE option_name LIKE '%{$qzzb_tablename}%'
		AND option_name LIKE '%URI%' ORDER BY option_id DESC");
	
	require(dirname( __FILE__ ) . DIRECTORY_SEPARATOR . "Panel.view.php");

}




function pro_Quizz_Builder_add_to_menu_fn()
{
	add_menu_page(
		"Quiz Builder Pro", // <title>
		"Quiz Builder Pro", // label menu
		"manage_options", // chmod
		"quizz-builder-pro", // perma
		"pro_Quizz_Builder_render_html", // render
		plugins_url('', __FILE__) . "/icon.png" // icon
	);
}




function pro_Quizz_Builder_Init_fn()
{

	add_action('admin_menu', 'pro_Quizz_Builder_add_to_menu_fn');
}

add_action("init", 'pro_Quizz_Builder_Init_fn');