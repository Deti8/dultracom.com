<?php
$qzz_ajaxurl = json_encode(get_bloginfo('wpurl') . "/wp-admin/admin-ajax.php"); 
$qzzb_tablename = "Quizz_Builder_Page";

// if (!strpos($qzz_ajaxurl, "https://")) $qzz_ajaxurl = str_replace("http://", "https://", $qzz_ajaxurl);

?>
<script>var ajaxurl = <?php echo $qzz_ajaxurl; ?>;
if (document.location.protocol == "https:") {
	if ( !(/https\:\/\//.test(ajaxurl)) )
		ajaxurl = ajaxurl.replace("http://", "https://");
}
</script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<script type="text/javascript">
/***************** corrige para URL enquanto digita *****************/
var typeURI = function() {
    var reg = /\"|\'|\`|\´|\?|\!|\\|\[|\^|\~|\*|\]|ª|º|{|}|>|<|#|\$|\%|\(|\)|\§|\=/g;
    var ciuri = jQuery(this).val();
        ciuri = (ciuri.replace(reg, '')).trim();
        ciuri = ciuri.replace(/\s/g, '-');
        ciuri = ciuri.replace(/\:/g, '-');
        ciuri = ciuri.replace(/\//g, '-');
        ciuri = ciuri.replace(/ã/g, 'a');
        ciuri = ciuri.replace(/õ/g, 'o');
        ciuri = ciuri.replace(/á/g, 'a');
        ciuri = ciuri.replace(/é/g, 'e');
        ciuri = ciuri.replace(/í/g, 'i');
        ciuri = ciuri.replace(/ó/g, 'o');
        ciuri = ciuri.replace(/ú/g, 'u');
        ciuri = ciuri.replace(/â/g, 'a');
        ciuri = ciuri.replace(/ê/g, 'e');
        ciuri = ciuri.replace(/î/g, 'i');
        ciuri = ciuri.replace(/ô/g, 'o');
        ciuri = ciuri.replace(/û/g, 'u');
        ciuri = ciuri.replace(/à/g, 'a');
        ciuri = ciuri.replace(/è/g, 'e');
        ciuri = ciuri.replace(/ì/g, 'i');
        ciuri = ciuri.replace(/ò/g, 'o');
        ciuri = ciuri.replace(/ù/g, 'u');
        ciuri = ciuri.replace(/ç/g, 'c');
        ciuri = ciuri.replace(/\&/g, 'e');
        jQuery(this).val(ciuri);
		}
	
</script>


<style type="text/css">
[ref='chip'], [act='del'] {
	cursor: pointer;
}
.Ezeksoft_copyright {
	font-size: 11px; opacity: .8;
}
.Ezeksoft_copyright a {
	text-decoration: none;
	font-weight: bold;
}
.qzz-btn {
	padding: 5px 20px;
	border: 1px solid #666;
	background: orange;
	font-weight: bold;
	border-radius: 3px;
	cursor: pointer;
	position: relative;
	right: -3px;
}
.qzz-btn-green {
	padding: 5px 20px;
	border: 1px solid #666;
	background: #23cc20;
	font-weight: bold;
	border-radius: 3px;
	cursor: pointer;
	position: relative;
	right: -3px;
}
.qzz-flex {
	display: flex;
}
.qzz-form label {
	display: block;
	line-height: 25px;
	width: 150px;
}
.qzz-form input[type="text"], .qzz-form textarea,.qzz-form select {
	width: 300px;
}
.qzz-field {
	margin-bottom: 10px;
}
#Qzz_View_New_Question, #Qzz_View_New_Button,
#Qzz_View_Form
{ display: none; margin-top: 20px; }

.qzz-btn-view {
	display: block;
	border: 1px solid orange;
	padding: 5px 20px;
	cursor: pointer;
	color: orange;
	margin: 5px;
}
.qzz-btn-view-2 {
    display: block;
    border: 1px solid #00ff5a;
    padding: 5px 20px;
    cursor: pointer;
    color: #00ff5a;
    margin: 5px;
}

.qzz-basic-form input[type="text"],
.qzz-basic-form textarea,
.qzz-basic-form select
{
	width: 450px;
}
[data-ref="details"] {
	display: none;
}
</style>



<div>
	<div style="margin-bottom: 20px; padding-bottom: 5px; border-bottom: 1px solid #dedede">
		<h1>Quizz Builder</h1>
	
		<p><span class="Ezeksoft_copyright">Um oferecimento <a target="_blank" href="http://ezeksoft.com/?utm_source=QuizzBuilder-in-plugin">Ezeksoft®</a></span></p>
	</div>

	<h3>Para criar um Quiz, preencha os campos</h3>

	<span>Digite a palavra: <b style="font-weight:bold">%city%</b> para renderizar o nome da cidade.</span>
	<br>
	<span>Exemplo: Se você mora em <b style="font-weight:bold">%city%</b> tenho algo para você.</span>
	<br>
	<span>Funciona nos campos que estão na <b style="font-weight:bold;color:#007cfb">cor azul</b>.</span>
	<!-- <span>Funciona nos campos: <b style="font-weight:bold">Título</b>, <b style="font-weight:bold">Texto abaixo do título</b>,
	<b style="font-weight:bold">Título da pergunta</b> e <b style="font-weight:bold">Pergunta</b>
	</span> -->
	<br>
	<br>

	<div class="qzz-form">
		<div class="qzz-basic-form">
			<div class="qzz-flex qzz-field" data-ref="essential">
				<div><label>Salvar como (URL/slug)</label></div>
				<div><input type="text" id="Qzz_Input_URI" placeholder="pagina-exemplo-1"></div>
			</div>

			<div class="qzz-flex qzz-field" data-ref="details">
				<div><label>Texto na barra de títulos</label></div>
				<div><input type="text" id="Qzz_Input_TitleBar" placeholder="Questionário 1"></div>
			</div>

			<div class="qzz-flex qzz-field" data-ref="details">
				<div><label>Descrição para robôs de busca</label></div>
				<div><input type="text" id="Qzz_Input_Description" placeholder="Sobre o site"></div>
			</div>

			<div class="qzz-flex qzz-field" data-ref="essential">
				<div><label style="color:#007cfb">Título (HeadLine)</label></div>
				<div>
					<input type="text" id="Qzz_Input_HeadLine" placeholder="Como Faturei R$ 8.397,82 sem Sair de Casa">
				</div>
			</div>

			<div class="qzz-flex qzz-field" data-ref="details">
				<div><label style="color:#007cfb">Texto abaixo do título</label></div>
				<div>
					<textarea id="Qzz_Textarea_Text" placeholder=""></textarea>
				</div>
			</div>

			<div class="qzz-flex qzz-field" data-ref="details">
				<div><label>Link da imagem</label></div>
				<div>
					<input type="text" id="Qzz_Textarea_Image" placeholder="http://...">
				</div>
			</div>

			<div class="qzz-flex qzz-field" data-ref="essential" data-id="qzbadv">
				<div><label>Mostrar opções avançadas</label></div>
				<div>
					<label style="width:100%"><input type="checkbox" name="" id="Quizz_Builder_Advanced"> avançado - não é obrigatório preencher</label>
				</div>
			</div>


			<style type="text/css">
				.qzz-style {
					width: 32px;
					height: 32px;
					margin-left: 15px;
					border: 4px solid #ccc;
					cursor: pointer;
					border-radius: 4px;
					transition: .2s ease-in;
				}
			</style>

			<div class="qzz-flex qzz-field" data-ref="essential" style="margin-bottom: 20px">
				<div><label>Estilo</label></div>
				<div>
					<div id="Qzz_Color_Picker">
						<div style="display:flex">
							<div color-h1-transition="#007cfc" color-buttons-text-hover="#666" color-body="white" style="background: white;" class='qzz-style'></div>
							<div color-h1-transition="rgba(255,255,255,.6)" color-buttons-text-hover="rgb(208, 146, 200)" color-body="rgb(208, 146, 200)" style="background: rgb(208, 146, 200);" class='qzz-style'></div>
							<div color-h1-transition="rgba(255,255,255,.6)" color-buttons-text-hover="rgb(208, 146, 146)" color-body="rgb(208, 146, 146)" style="background: rgb(208, 146, 146);" class='qzz-style'></div>
							<div color-h1-transition="rgba(255,255,255,.6)" color-buttons-text-hover="rgb(146, 208, 185)" color-body="rgb(146, 208, 185)" style="background: rgb(146, 208, 185);" class='qzz-style'></div>
							<div color-h1-transition="rgba(255,255,255,.6)" color-buttons-text-hover="rgb(210, 77, 77)" color-body="rgb(210, 77, 77)" style="background: rgb(210, 77, 77);" class='qzz-style'></div>
							<div color-h1-transition="rgba(255,255,255,.6)" color-buttons-text-hover="rgb(208, 200, 146)" color-body="rgb(208, 200, 146)" style="background: rgb(208, 200, 146);" class='qzz-style'></div>
							<div color-h1-transition="rgba(255,255,255,.6)" color-buttons-text-hover="rgb(91, 210, 77)" color-body="rgb(91, 210, 77)" style="background: rgb(91, 210, 77);" class='qzz-style'></div>
						</div>
						<div style="display:flex;margin-top:15px">
							<div color-h1-transition="rgba(255,255,255,.6)" color-buttons-text-hover="rgba(249,93,166)" color-body="rgb(111,79,238)" style="background: linear-gradient(0deg, rgba(111,79,238,1) 40%, rgba(249,93,166,1) 100%);" class='qzz-style'></div>
							<div color-h1-transition="rgba(255,255,255,.6)" color-buttons-text-hover="rgb(238, 226, 79)" color-body="rgb(238, 226, 79)" style="background: linear-gradient(-20deg, rgb(238, 226, 79) 40%, rgba(249,93,166,1) 100%);" class='qzz-style'></div>
							<div color-h1-transition="rgba(255,255,255,.6)" color-buttons-text-hover="rgb(140, 79, 238)" color-body="rgb(140, 79, 238)" style="background: linear-gradient(-20deg, rgb(140, 79, 238) 40%, rgb(93, 249, 112) 100%);" class='qzz-style'></div>
							<div color-h1-transition="rgba(255,255,255,.6)" color-buttons-text-hover="rgb(140, 79, 238)" color-body="rgb(140, 79, 238)" style="background: linear-gradient(-20deg, rgb(140, 79, 238) 40%, rgb(249, 224, 42) 100%);" class='qzz-style'></div>
							<div color-h1-transition="rgba(255,255,255,.6)" color-buttons-text-hover="rgb(238, 226, 79)" color-body="rgb(238, 226, 79)" style="background: linear-gradient(-20deg, rgb(238, 226, 79) 40%, rgb(93, 249, 235) 100%);" class='qzz-style'></div>
							<div color-h1-transition="rgba(255,255,255,.6)" color-buttons-text-hover="rgb(249, 93, 93)" color-body="rgb(249, 244, 93)" style="background: linear-gradient(-20deg, rgb(249, 244, 93) 40%, rgb(249, 93, 93) 100%);" class='qzz-style'></div>
							<div color-h1-transition="rgba(255,255,255,.6)" color-buttons-text-hover="rgb(69, 69, 69)" color-body="rgb(69, 69, 69)" style="background: linear-gradient(-20deg, rgb(69, 69, 69) 40%, rgb(121, 120, 120) 100%);" class='qzz-style'></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			var Qzz_Color_Picker_Data = {
				background: "background: linear-gradient(0deg, rgba(111,79,238,1) 40%, rgba(249,93,166,1) 100%);",
				body: "rgb(111,79,238)",
				buttonsTextHoverColor: "rgba(249,93,166)",
				H1Transition: "rgba(255,255,255,.6)"
			};
			Qzz_Color_Picker.querySelectorAll(".qzz-style").forEach(function(item) {
				if (item) item.onclick = function() {
					Qzz_Color_Picker.querySelectorAll(".qzz-style").forEach(function(item_) {
						item_.style.borderColor = '#ccc';
					});
					item.style.borderColor = '#222';
					Qzz_Color_Picker_Data.background = item.getAttribute("style").split(";")[0];
					Qzz_Color_Picker_Data.body = item.getAttribute("color-body");
					Qzz_Color_Picker_Data.buttonsTextHoverColor = item.getAttribute("color-buttons-text-hover");
					Qzz_Color_Picker_Data.H1Transition = item.getAttribute("color-h1-transition");
				}
			});
		</script>

		<script type="text/javascript">
			Quizz_Builder_Advanced.onclick = function() {
				if (!this.checked) {
					// document.querySelector('[data-id="qzbadv"]').style.display = 'none';
					document.querySelectorAll('[data-ref="details"]').forEach(function(element) {
						element.style.display = 'none';
					});
				}
				else {
					// document.querySelector('[data-id="qzbadv"]').style.display = 'none';
					document.querySelectorAll('[data-ref="details"]').forEach(function(element) {
						element.style.display = 'flex';
					});
				}
			}
		</script>

		<div class="qzz-flex qzz-field">
			<div><label></label></div>

			<div>

				<button class="qzz-btn" id="Qzz_Add_Question">Criar pergunta</button>
				<div>

					<div id="Qzz_View_New_Question" style="width: 453px;">
						<div id="Qzz_ViewPort_Question_Fill">
							<br>
							<br>
							<hr>
							<h3 id="Qzz_Label_WhatDo">Criando nova pergunta</h3>
								<P id="Qzz_Label_Warn_Describ">Começe pela última pergunta.</P>
							<div class="qzz-flex qzz-field">
								<div><label style="color:#007cfb">Título da pergunta</label></div>
								<div><input type="text" id="Qzz_Input_HeadLine_Question" placeholder="Questão 1"></div>
							</div>

							<div class="qzz-flex qzz-field">
								<div><label style="color:#007cfb">Pergunta</label></div>
								<div>
									<textarea id="Qzz_Textarea_Text_Question" placeholder="Escreva sua pergunta"></textarea>
								</div>
							</div>

							<script type="text/javascript">
								var qzz_type_updtd = function() {
									if (Qzz_Data) if (typeof Qzz_Data.question != "undefined") {
										var index_ = 0;
										Qzz_Data.question.forEach(function(Obj) {
											if (Qzz_Data.question[index_].id == window.Qzz_Current_Editing_Quizz_ID) {
											    Qzz_Data.question[index_].headline = Qzz_Input_HeadLine_Question.value;
											    Qzz_Data.question[index_].text = Qzz_Textarea_Text_Question.value;
											    Qzz_Questions_list.querySelector("span[data-id='" + window.Qzz_Current_Editing_Quizz_ID +"']").innerText = Qzz_Input_HeadLine_Question.value;
											    // console.log(index_);
											    // console.log(Qzz_Data.question);

										    }

											index_++;
										});
									}
								}

								Qzz_Input_HeadLine_Question.onkeyup = qzz_type_updtd;
								Qzz_Textarea_Text_Question.onkeyup = qzz_type_updtd;
							</script>

							<div style="width: 447px;display:flex">
								<button style="margin-left:auto" class="qzz-btn" id="Qzz_Add_Button">Criar botão para esta pergunta</button>
							</div>
						</div>

						<br>

						<div id="Qzz_View_New_Button">
							<div id="Qzz_View_New_Button_In">
								<h3>Adicione os botões um por um</h3>
								<P>Recomendamos você a começar pela última pergunta poque ainda não existem outras perguntas criadas e você
								fica sem opção de abrir uma nova pergunta no clique dos botões da pergunta atual.</P>
								<div class="qzz-flex qzz-field">
									<label>Texto do botão</label>
									<input type="text" data-bt="" placeholder="Sim, quero esta opção" id="Qzz_Input_Label_Button">
								</div>
								<div class="qzz-flex qzz-field">
									<label>Ação do botão</label>
									<div class="qzz-flex">
										<label onclick="Qzz_Choice(0)"><input type="radio" name="tpbt"> Abrir outra pergunta </label>
										<label onclick="Qzz_Choice(1)"><input type="radio" name="tpbt" checked="" style='margin-left:15px'> Abrir um link</label>
									</div>
								</div>

								<div id="Qzz_View_Link">
									<div class="qzz-flex qzz-field">
										<label>Link do botão</label>
										<input type="text" id="Qzz_Input_Link_Button" placeholder="http://...">
									</div>
								</div>

								<div id="Qzz_View_Form">
									<div class="qzz-flex qzz-field">
										<label>Escolha qual pergunta vai abrir como ação do botão</label>
										<select id="Qzz_Select_Form">
											<option value=''>-- NENHUM --</option>
										</select>
									</div>
								</div>


								<div style="width: 450px;display:flex">
									<button style="margin-left:auto" class="qzz-btn" id="Qzz_Add_Button_Plus">Adicionar botão</button>
								</div>

								<br>

								<div>
									<div class="qzz-flex">
										<label>Lista de botões criados para a pergunta atual</label>
										<div class="qzz-flex" id="Qzz_Buttons_list" style="line-height: 25px">vazio
										</div>
									</div>
								</div>
								
								<br>

								<!-- <div style="width: 450px;">
									<p>Se você clicou em algum dos botões acima de <span style='border: 1px solid orange;padding:2px'>borda laranja e fundo transparente com está este texto</span>, vai editar.</p>
									<p>Se você não fez isso, vai ser gerado um novo botão com os dados preenchidos.</p>
								</div> -->

								<br>

								<div id="Qzz_Warn_Editing" style="display:none">
								<!-- Os dois campos acima salvam automaticamente ao digitar. -->
									<!-- <div style="width: 450px;">
										<button style="margin-left:auto;display:table;background:#00b9eb" class="qzz-btn" id="Qzz_Reset_Question_Plus">Salvar atualização da pergunta atual</button>
										<p style="margin-left:auto;display:table;">(vai limpar os campos acima)</p>
									</div> -->
								</div>

								<script type="text/javascript">
									if (typeof Qzz_Reset_Question_Plus != "undefined") Qzz_Reset_Question_Plus.onclick = function() {
										window.Qzz_Current_Editing_Quizz_ID = "";
										Qzz_Input_HeadLine_Question.value = "";
										Qzz_Textarea_Text_Question.value = "";
										Qzz_Buttons_list.innerHTML = "vazio";
										Qzz_Input_Label_Button.value = "";
										Qzz_Input_Link_Button.value = "";
										Qzz_Select_Form.value = "";
									}
								</script>


								<div id="Qzz_Questions_Button_Gen_New">

								<br>
								<hr>
								<br>
									<h3>Gere uma nova pergunta com os dados preenchidos acima</h3>

									<div style="width: 450px;">
										<button style="margin-left:auto;display:table" class="qzz-btn" id="Qzz_Add_Question_Plus">Gerar nova pergunta com os dados atuais</button>
									</div>
									<!-- <div style="width: 450px;margin-top:7px;margin-bottom:7px">
										<p style='margin-left:auto;display:table'>ou</p>
									</div>
									<div style="width: 450px;">
										<button style="margin-left:auto;display:table;background:#00b9eb" class="qzz-btn" id="Qzz_Reset_Question_Plus">Limpar campos acima e criar nova pergunta</button>
									</div> -->
									<div style="width: 450px;">
										<p>Ao clicar, você vai salvar a pergunta atual e vai ficar liberado para criar uma nova pergunta.</p>
									</div>
								</div>



							</div>


							<br>
							<hr>
							<br>
							<div>
								<div id="Qzz_ViewPort_Question_List_Choice">
									<button class="qzz-btn" id="Qzz_New_Q_EditMode" style='display:none'>Nova pergunta</button>
									<script type="text/javascript">
										Qzz_New_Q_EditMode.onclick = function() {
											Qzz_New_Q_EditMode.style.display = 'none';
											Qzz_View_New_Button_In.style.display = 'block';
											Qzz_ViewPort_Question_Fill.style.display = 'block';
											Qzz_Questions_Button_Gen_New.style.display ='block';
										}
									</script>
									<br>
									<br>
									<div class="qzz-flex" >
										<label style="cursor:default">Lista de perguntas (no modo editando você pode clicar para carregar os dados da pergunta)</label>
										<div class="qzz-flex" id="Qzz_Questions_list" style="line-height: 25px;overflow: auto;display: block;">vazio
										</div>
									</div>
								</div>
							</div>
							<br>

							<br>
							<p style="font-weight: bold;color:red">Não esqueça deste campo, pois ele se zera toda vez que você cria ou edita uma pergunta.</p>

							<div>
								<div class="qzz-flex qzz-field">
									<label>Escolha qual pergunta vai ser a primeira vísível</label>
									<select id="Qzz_Select_Form_Visible">
										<option value=''>-- NENHUM --</option>
									</select>
								</div>
							</div>

							<p>Para criar mais perguntas, preencha começando do campo "<b>Título da pergunta</b>".</p>

							<br>
							<br>
							<hr>
							<br>

							
							<div style="width: 450px;">
								<h3 id='Qzz_msgsv'>Se você já criou todas as perguntas que queria, grave as configurações.</h3>
								<p>Se você consegue ver apenas um retângulo com <span style='border: 1px solid #00ff5a;padding:2px'>borda verde e fundo transparente</span>
									na lista de perguntas, só existe uma pergunta. 
									Se você queria criar várias perguntas, antes de salvar, volte na seção "<b>Criando nova pergunta</b>" e preencha de novo, pois será
									uma nova pergunta.</p>
								<p>Dessa vez, na criação dos botões da pergunta, você já vai conseguir escolher uma pergunta para ser a ação do clique.</p>
							</div>



							<br>
							<div style="width: 450px;display:flex">
								<div style="margin-left: auto;">
									<button class="qzz-btn" id="Qzz_New" onclick='document.location.reload();' style='background:transparent'>Voltar</button>
									<button class="qzz-btn" id="Qzz_New" onclick='document.location.reload();'>Criar novo do zero</button>
									<button class="qzz-btn-green" id="Qzz_Save">Salvar tudo</button>
									<button class="qzz-btn-green" id="Qzz_Edit" style='display: none;'>Salvar todas as aletrações</button>
								</div>
							</div>

							<br>
							<div style="width: 450px;">
								<p id="Qzz_msged"></p>
							</div>


						</div>

					</div>



				</div>
			</div>
		</div>

	</div>
</div>
<script type="text/javascript">jQuery('#Qzz_Input_URI').bind('keyup', typeURI);</script>


<script type="text/javascript">
var Qzz_Data = {};
Qzz_Data.question = [
	// {
	// 	headline: 'Como consegui faturar 15 mil em 30 dias',
	// 	text: 'Quem sou eu? Veja abaixo tudo sobre mim e como conseguir fazer isso...'
	// },

	// {
	// 	headline: '2Como consegui faturar 15 mil em 30 dias',
	// 	text: '2Quem sou eu? Veja abaixo tudo sobre mim e como conseguir fazer isso...'
	// },
	
	// {
	// 	headline: '3Como consegui faturar 15 mil em 30 dias',
	// 	text: '3Quem sou eu? Veja abaixo tudo sobre mim e como conseguir fazer isso...'
	// }
];
Qzz_Data.buttons = [
	// { label: 'Sim', link: '', form: 'form_2' },
	// { label: 'Não', link: '', form: 'form_2' },
	// { label: 'Talvez', link: '', form: 'form_2' },
];

function Qzz_Choice(option) {
	if (option == 0) {
		Qzz_View_Link.style.display = 'none';
		Qzz_View_Form.style.display = 'block';
	}

	else if (option == 1) {
		Qzz_View_Link.style.display = 'block';
		Qzz_View_Form.style.display = 'none';

	}
}

// if (typeof Qzz_Data.buttons != "undefined") {
// 	Qzz_Data.buttons.forEach(function(data) {

// 	});
// }
// Qzz_List_Buttons

var Qzz_new_question = function() {
	Qzz_View_New_Question.style.display = 'block';

	Qzz_Input_HeadLine_Question.value = '';
	Qzz_Textarea_Text_Question.value = '';

	// Qzz_Input_HeadLine_Question.focus();

	Qzz_Add_Question.style.display = 'none';
}

Qzz_Add_Question.onclick = Qzz_new_question;


// Criar botão para esta pergunta
Qzz_Add_Button.onclick = function() {
	this.style.display = 'none';
	Qzz_View_New_Button.style.display = 'block';

	Qzz_Input_Link_Button.value = '';
	Qzz_Select_Form.value = '';
	Qzz_Select_Form_Visible.value = '';
	Qzz_Input_Label_Button.value = '';

	Qzz_Input_Label_Button.focus();
}

// Criar mais um botão SALVA
Qzz_Add_Button_Plus.onclick = function() {

	var random = Math.floor(Math.random() * 9999999999) + 1000000000; 
	var id = (new Date).getTime();
	id = 'id_' + id + '_' + random;

	Qzz_Input_Label_Button.focus();

	if (!Qzz_Input_Label_Button.value) {
		alert("Crie pelo menos um botão para adicionar mais.");
		return false;
	}

	if (Qzz_Buttons_list.innerHTML.trim() == "vazio") Qzz_Buttons_list.innerHTML = "";



	var btn_replaced = false;
	var btn_origin_data = {};
	var btn_replaced_data = {};
	var btn_count = 0;

	var ct_id = 1;
	if (Qzz_Data.buttons.length) Qzz_Data.buttons.map(function(bt) {
		if (bt.question_id == window.Qzz_Current_Editing_Quizz_ID) {
			ct_id = Number(bt.id) + 1;
		}
	});

	// if (window.Quizz_Builder_Edit_Data) if (Object.keys(window.Quizz_Builder_Edit_Data).length) {
	// 	using_id = window.Qzz_Current_Editing_Quizz_ID;
	// }

	
	if (Qzz_Data.buttons.length) Qzz_Data.buttons = Qzz_Data.buttons.map(function(bt) {
		// current editing button
		var bt_new = bt;
		// encontra o botão pelo label na lista dos botoes existentes
		if (bt.label == Qzz_Data.current_button_label) {
			btn_origin_data = bt;

			var bt_build = {
				id: ct_id,//btn_count+1,
				label: Qzz_Input_Label_Button.value,
				link: Qzz_Input_Link_Button.value,
				form: Qzz_Select_Form.value
			};

			// pega esse botao encontrado e substituir seus dados
			bt_new = bt_build;
			btn_replaced_data = bt_build;

			// alterar html
			// var btns = Qzz_Buttons_list.querySelectorAll('[ref="item"]');
			// if (btns.length) btns.forEach(function(btn_) {
			// 	var chip = btn_.querySelector('[ref="chip"]');
			// 	if (chip) {
			// 		chip.innerText = bt_build.label.trim();
			// 	}
			// });

			btn_replaced = true;
		}
		else bt_new = bt;

		btn_count++;
		return bt_new;
	});


	var using_id = id; // se nao esta editando, entao usa um ID gerado
	if (window.Quizz_Builder_Edit_Data) if (Object.keys(window.Quizz_Builder_Edit_Data).length) {
		using_id = window.Qzz_Current_Editing_Quizz_ID;
	}


	// * ******
	// * SE ESTA EDITANDO O BOTAO
	if (btn_replaced) {

		// ATUALIZA NO OBJETO
		// if (window.Quizz_Builder_Edit_Data) if (Object.keys(window.Quizz_Builder_Edit_Data).length) {

		// var buttons = {
		// 	id: button_index,
		// 	question_id: using_id,
		// 	label: Qzz_Input_Label_Button.value,
		// 	link: Qzz_Input_Link_Button.value,
		// 	form: Qzz_Select_Form.value
		// };

		// using_id
		// var new_q = [];
		// if (Qzz_Data.question.length) {
		// 	Qzz_Data.question.forEach(function(q) {
		// 		var edit_q = q;
		// 		if (q.id == using_id) { // encontra o questionario atual que se esta editando
		// 			var bt_build = edit_q.buttons;

		// 			// edit_q.buttons.push(buttons);
		// 			edit_q.buttons.forEach(function(b) {
		// 				if (b.label == )
		// 				b.label = Qzz_Input_Label_Button.value;
		// 				b.link = Qzz_Input_Link_Button.value;
		// 				b.form = Qzz_Select_Form.value;
		// 			});

		// 			edit_q.buttons = bt_build;
		// 		}
		// 		new_q.push(edit_q);
		// 	});
		// 	Qzz_Data.question = new_q;
		// }

		// }

		// ATUALIZA NO HTML
		var count_items = 0, current_count_items = 0;
		Qzz_Buttons_list.querySelectorAll('[ref="item"]').forEach(function(element) { count_items++;
		// });

		// var tmp23434234 = (function(element) { count_items++;

			var chip = element.querySelector('[ref="chip"]');
			// console.log("rep: " + btn_replaced_data.label);
			// console.log("origin: " + btn_origin_data.label);
			if (chip.innerText.trim() == btn_origin_data.label) {
				current_count_items = count_items;
				// var chips_items = chip.parentNode.parentNode.querySelectorAll("[ref='item']");
				// var count_items = 0;
				// if (chips_items.length) chips_items.forEach(function(item) {
				// 	count_items++;

				// 	if 
				// });

				// tem que salvar em mais algum lugar senao fica criando novo
				chip.innerText = btn_replaced_data.label;
				chip.setAttribute('data-label', btn_replaced_data.label);
				chip.setAttribute('data-link', btn_replaced_data.link);
				chip.setAttribute('data-form', btn_replaced_data.form);
				var qid = chip.getAttribute('data-qid');


				var new_question = [];
				Qzz_Data.question.forEach(function(q) {
					var edit_question = q;
					if (qid == q.id) {
						// achou o question, o que fazer?
						// atualiza botao referente a edicao
						// selecionar index no html
						var new_buttons = [];
						var nb = 0;
						q.buttons.forEach(function(b) {
							nb++;
							if (nb == current_count_items) { // se o botao html [ref=item] é o mesmo indice do botao iterado no obj
								// # altera dados do bt atual
								var edit_button = b;
								edit_button.label = btn_replaced_data.label;
								edit_button.link = btn_replaced_data.link;
								edit_button.form = btn_replaced_data.form;
								new_buttons.push(edit_button);
							}
							else new_buttons.push(b);
						});

						edit_question.buttons = new_buttons; // salva new bt (o mesmo bt com dados alterados)

						new_question.push(edit_question); // salva new q
					}
					else
						new_question.push(q);
				});
				Qzz_Data.question = new_question;

				//descobri: nos atributos data-* do botao amarelo

				// Qzz_Buttons_list.innerHTML += "<span data-id='" + btn_origin_data.id + "' class='qzz-btn-view'>" + btn_replaced_data.label + "</span>";
			}
		});
	}


	
	// * ******
	// * SE ESTA CRIANDO UM NOVO O BOTAO
	else {
		// se for um novo arquivo: usar -> id
		// se for editando, criar um novo item, ou seja, nao esta atualizando um item clicado: 
		   //usar -> fiufiu
		   // ao clicar no botão EDITAR, criar uma variavel que eu identifico aqui


		   // quando clicar num dos botoes verdes, atualizar o id que estou buscando


			// 		new RegExp("_ID_" + Quizz_Builder_Edit_Data.id)

			// Quizz_Builder_Edit_Data.questions["Quizz_Builder_Page_Q_id_1585417446269_3310679482_ID_3985"]
		// esta editando?
		// using_id = (Object.keys(Quizz_Builder_Edit_Data).length) ? : id;


		// var buttons_list = Qzz_Buttons_list.querySelectorAll("[ref='item']");
		// var button_index = (buttons_list.length) ? buttons_list.length + 1 : 1;

		var buttons = {
			// id: button_index,
			id: ct_id,
			question_id: using_id,
			label: Qzz_Input_Label_Button.value,
			link: Qzz_Input_Link_Button.value,
			form: Qzz_Select_Form.value
		};

		Qzz_Data.buttons.push(buttons);


		Qzz_Buttons_list.innerHTML += "<span style='display:flex;'><span ref='chip' "
		+ " data-id='" + ct_id + "'"
		+ " data-label='" + Qzz_Input_Label_Button.value + "'"
		+ " data-link='" + Qzz_Input_Link_Button.value + "'"
		+ " data-form='" + Qzz_Select_Form.value + "'"
		+ " data-qid='" + using_id + "' class='qzz-btn-view'>" + Qzz_Input_Label_Button.value + "</span><span act='del'>[x]</span></span>";


		// atualizar no objeto questions atual OU cria um novo question? using_id vai dizer isso
		// por padrao: atualiza se estiver editando

		if (window.Quizz_Builder_Edit_Data) if (Object.keys(window.Quizz_Builder_Edit_Data).length) {
			// atualiza objeto question
			// using_id
			var new_q = [];
			if (Qzz_Data.question.length) {
				Qzz_Data.question.forEach(function(q) {
					var edit_q = q;
					if (q.id == using_id) edit_q.buttons.push(buttons);
					new_q.push(edit_q);
				});
				Qzz_Data.question = new_q;
			}	
		}
	}

		// { label: 'Sim', link: '', form: 'form_2' },


	// -- =APAGA= ----

	Qzz_Buttons_list.querySelectorAll('span>span[act="del"]').forEach(function(span) {
		span.onclick = function() {

			this.parentNode.style.display = 'none';

			var this_label = this.parentNode.querySelector('[ref="chip"]').getAttribute('data-label');

			var new_buttons = [];
			
			Qzz_Data.buttons.forEach(function(item) {
				if (item.label != this_label) new_buttons.push(item);
			});
			Qzz_Data.buttons = new_buttons;

			if (!new_buttons.length) Qzz_Buttons_list.innerHTML = "vazio";
			
		}
	});


	Qzz_Input_Link_Button.value = '';
	Qzz_Select_Form.value = '';
	Qzz_Select_Form_Visible.value = '';
	Qzz_Input_Label_Button.value = '';

	this.innerText = "Aguarde...";
	setTimeout(function() { 
		Qzz_Add_Button_Plus.innerText = "Feito!"; 

		setTimeout(function() { Qzz_Add_Button_Plus.innerText = "Adicionar botão"; }, 1000);
	}, 500);
}

// salvar tudo
Qzz_Save.onclick = function() {
	if (!Qzz_Input_URI.value) {
		alert("Você esqueceu de preencher o campo URL/slug.");
		Qzz_Input_URI.focus();
		return false;
	}
	var data = {
		action: 'qzz_save',
		uri: Qzz_Input_URI.value,
		titlebar: Qzz_Input_TitleBar.value,
		description: Qzz_Input_Description.value,
		headline: Qzz_Input_HeadLine.value,
		text: Qzz_Textarea_Text.value,
		image: Qzz_Textarea_Image.value,
		first_form: Qzz_Select_Form_Visible.value,
		questions: Qzz_Data.question,
		style: Qzz_Color_Picker_Data
	}
	var tmp8811 = this.innerText;
	Qzz_Save.innerText = "Aguarde...";
	jQuery.post(ajaxurl, data, function(response) {
		Qzz_Save.innerText = tmp8811;
		
		document.location.reload();

		// console.info(data);
		// console.log(response);
	});
}

Qzz_Edit.onclick = function() {
	var data = {
		action: 'qzz_edit',
		id: window.Quizz_Builder_Edit_Data.id,
		uri: Qzz_Input_URI.value,
		titlebar: Qzz_Input_TitleBar.value,
		description: Qzz_Input_Description.value,
		headline: Qzz_Input_HeadLine.value,
		text: Qzz_Textarea_Text.value,
		image: Qzz_Textarea_Image.value,
		first_form: Qzz_Select_Form_Visible.value,
		questions: Qzz_Data.question,
		style: Qzz_Color_Picker_Data
	}
	var tmp8811 = this.innerText;
	Qzz_Edit.innerText = "Aguarde...";
	jQuery.post(ajaxurl, data, function(response) {
		Qzz_Edit.innerText = tmp8811;
		document.location.reload();
		// console.info(data);
		// console.log(response);
	});
}

// Salvar esta pergunta
var Quizz_Builder_New_Question = function() {

	var random = Math.floor(Math.random() * 9999999999) + 1000000000; 
	var id = (new Date).getTime();
	id = 'id_' + id + '_' + random;


	//Qzz_Input_HeadLine_Question
	//Qzz_Textarea_Text_Question

	if (!Qzz_Input_HeadLine_Question.value) {
		alert("Crie pelo menos um texto para esta pergunta para adicionar mais.");
		Qzz_Input_HeadLine_Question.focus();
		return false;
	}
	if (Qzz_Questions_list.innerHTML.trim() == "vazio") Qzz_Questions_list.innerHTML = "";



	// se esta no modo editando
	var edit_mode = false;
	if (window.Quizz_Builder_Edit_Data) {
			if (Object.keys(window.Quizz_Builder_Edit_Data).length) {
				edit_mode = true;
		
		// 	// vQuizz_Builder_Get(window.Quizz_Builder_Edit_Data.uri);

		// 	Qzz_Questions_list.innerHTML += "<span data-id='" + id + "' "
		// 	+ " data-head-line='" + Qzz_Input_HeadLine_Question.value + "' " 
		// 	// + " data-labels='" + JSON.stringify(array_Q_LabelOptions[value_]) + "' " 
		// 	// + " data-links='" + JSON.stringify(array_Q_LinkOptions[value_]) + "' " 
		// 	// + " data-forms='" + JSON.stringify(array_Q_FormOptions[value_]) + "' " 
		// 	+ " data-text='" + Qzz_Textarea_Text_Question.value + "' " 
		// 	+ " class='qzz-btn-view-2'>" + Qzz_Input_HeadLine_Question.value + "</span>";

		}
	}

	// if (edit_mode) {
	// 	Qzz_Questions_list.innerHTML += "<span ref='item' style='display:flex'><span ref='chip' data-id='" + id + "' class='qzz-btn-view-2'>" + Qzz_Input_HeadLine_Question.value + "</span></span>";
	// }
	// else {
	// 	Qzz_Questions_list.innerHTML += "<span ref='item' style='display:flex'><span ref='chip' data-id='" + id + "' class='qzz-btn-view-2'>" + Qzz_Input_HeadLine_Question.value + "</span><span act='del'>[x]</span></span>";
	// }
	Qzz_Questions_list.innerHTML += "<span ref='item' style='display:flex'><span ref='chip' data-id='" + id + "' class='qzz-btn-view-2'>" + Qzz_Input_HeadLine_Question.value + "</span><span act='del'>[x]</span></span>";


	
	Qzz_Questions_list.querySelectorAll('[act="del"]').forEach(function(span) {
		span.onclick = function() {
			this.parentNode.style.display = 'none';

			var this_id = this.parentNode.querySelector('[ref="chip"]').getAttribute('data-id');

			var new_question = [];
			
			Qzz_Data.question.forEach(function(item) {
				if (item.id != this_id) new_question.push(item);
			});
			Qzz_Data.question = new_question;

			if (!new_question.length) Qzz_Questions_list.innerHTML = "vazio";

			// atualiza <SELECT> no click dos chips
			Qzz_Select_Form.innerHTML = "<option value=''>-- NENHUM --</option>";
			Qzz_Select_Form_Visible.innerHTML = "<option value=''>-- NENHUM --</option>";
			Qzz_Data.question.forEach(function(dt) {
				Qzz_Select_Form.innerHTML += "<option value='" + dt.id + "'>" + dt.headline + "</option>";
				Qzz_Select_Form_Visible.innerHTML += "<option value='" + dt.id + "'>" + dt.headline + "</option>";
				;
			});	
		}
	});

	// zera botões, tem que zerar tudo pois salvou a pergunta
	Qzz_Buttons_list.innerHTML = "vazio";

	// esse ID é um ID GERADO! fiufiu
	// buttons com: id
	// excluir todos que nao sejam do question que se esta editando
	// console.log("id");
	// console.log(id);
	var new_bts = [];

	if (edit_mode) {
		Qzz_Data.buttons.forEach(function(cur_b) {
			// console.log("question id");
			// console.log(cur_b.question_id );
			if (!cur_b.question_id) {
				new_bts.push(cur_b);
			}
		});
	} else {
		new_bts = Qzz_Data.buttons;
	}
	
	console.log(Qzz_Data.buttons);
	var question = {
		id: id,
		headline: Qzz_Input_HeadLine_Question.value,
		text: Qzz_Textarea_Text_Question.value,
		// buttons: []
		buttons: new_bts
		// buttons: Qzz_Data.buttons
	};

	Qzz_Data.question.push(question);

	// limpa preenchimento
	Qzz_Data.buttons = [];

	Qzz_Select_Form.innerHTML = "<option value=''>-- NENHUM --</option>";
	Qzz_Select_Form_Visible.innerHTML = "<option value=''>-- NENHUM --</option>";
	Qzz_Data.question.forEach(function(dt) {
		Qzz_Select_Form.innerHTML += "<option value='" + dt.id + "'>" + dt.headline + "</option>";
		Qzz_Select_Form_Visible.innerHTML += "<option value='" + dt.id + "'>" + dt.headline + "</option>";
		;
	});	

	// Qzz_Input_HeadLine_Question.focus();

	Qzz_new_question(); // limpa os campos
}

Qzz_Add_Question_Plus.onclick = Quizz_Builder_New_Question;
</script>




<div id='Qzz_List_Link'>
<br>	
<br>	
<h3>Links de Quizes criados</h3>



<?php

if (!sizeof($dt_URI)) echo "vazio.";
else echo '<div id="Quizz_Builder_Vazio" style="display:none">vazio</div>';

	for ($i = 0; $i <= sizeof($dt_URI)-1; $i++)
	{
		$uri = $dt_URI[$i]->option_value;
		?>
		<div style="margin-bottom:5px" qzz-id="<?php echo $uri; ?>">
			<div style='display:flex'>
			<div style='font-weight:bold;width: 200px;overflow:hidden'><a href="<?php echo get_site_url(); ?>/<?php echo $uri; ?>" target='_blank'><?php echo $uri; ?></a></div>
			<div style='margin-left:20px;margin-right:10px'><button class="qzz-btn" onclick='Quizz_Builder_Get("<?php echo $uri; ?>")'>Editar</button></div>
			<div><button class="qzz-btn" onclick='Quizz_Builder_Del("<?php echo $uri; ?>")'>Apagar</button></div>
			</div>
		</div>
			
		<?php
	}

	?>

</div>
<script type="text/javascript">
	var Quizz_Builder_Del_Clicks_Counter = 0;
	function Quizz_Builder_Del(uri) {
		Quizz_Builder_Del_Clicks_Counter++;
		var data = {
			action: 'qzz_del_data',
			uri: uri
		};

		console.log(data);

		jQuery.post(ajaxurl, data, function(response) {
			console.log(response);
		});

		var element = document.querySelector('[qzz-id="' + uri + '"]');
		if (element) element.style.display = 'none';

		if (Number("<?php echo sizeof($dt_URI); ?>") == Quizz_Builder_Del_Clicks_Counter) Quizz_Builder_Vazio.style.display = 'block';
	}


	function Quizz_Builder_Get(uri) {

		Qzz_New_Q_EditMode.style.display = 'block';

		Qzz_List_Link.style.display = 'none';

		// limpa dados 
		Qzz_Data.question = [];
		Qzz_Data.buttons = [];
		Qzz_Input_Label_Button.value = '';
		Qzz_Input_Link_Button.value = '';
		Qzz_Select_Form.value='';
		Qzz_Select_Form.innerHTML = '';
		Qzz_Buttons_list.innerHTML = 'vazio';

		Qzz_View_New_Button_In.style.display = 'none';
		Qzz_ViewPort_Question_Fill.style.display = 'none';
		Qzz_Questions_Button_Gen_New.style.display = 'none';


		Qzz_Add_Button.style.display = 'none';
		Qzz_Warn_Editing.style.display = 'block';
		Qzz_Label_WhatDo.innerHTML = "Editando pergunta";
		// Qzz_Label_Warn_Describ.innerHTML = 'clique no chip de <span style="border: 1px solid #00ff5a;padding:2px">borda verde e fundo transparente</span> para editar a pergunta (está logo mais abaixo na lista de perguntas).';
		Qzz_Label_Warn_Describ.innerHTML = 'Para salvar sua atualização, clique no botão azul. Para editar as outras perguntas, clique no chip de <span style="border: 1px solid #00ff5a;padding:2px">borda verde e fundo transparente</span> (está logo mais abaixo na lista de perguntas).';
		vQuizz_Builder_Get(uri);
	}

	var vQuizz_Builder_Get = function(uri) {
		var data = {
			action: 'qzz_get_data',
			uri: uri
		};

		// window.Quizz_Builder_Editing_URI = uri;

		jQuery.post(ajaxurl, data, function(response) {
			console.log(JSON.parse(response));
			var r = JSON.parse(response);
			window.Quizz_Builder_Edit_Data=r;
			window.Quizz_Builder_Edit_Data.uri=uri;
			var id = r.id;


			Qzz_Input_URI.value = uri;
			Qzz_Input_TitleBar.value = r.questions["<?php echo $qzzb_tablename; ?>_TitleBar_" + id];
			Qzz_Input_Description.value = r.questions["<?php echo $qzzb_tablename; ?>_Description_" + id];
			Qzz_Input_HeadLine.value = r.questions["<?php echo $qzzb_tablename; ?>_HeadLine_" + id];
			Qzz_Textarea_Text.value = r.questions["<?php echo $qzzb_tablename; ?>_Text_" + id];
			Qzz_Textarea_Image.value = r.questions["<?php echo $qzzb_tablename; ?>_Image_" + id];
			var json = JSON.parse(r.questions["<?php echo $qzzb_tablename; ?>_Style_" + id]);
			if (json) Qzz_Color_Picker_Data = json;

			document.querySelectorAll("[color-body]").forEach(function(element) {
				var style = element.getAttribute("style");
				if (json) if (typeof json.background != "undefined") {
				if (style.split(";")[0].trim() == json.background.trim())
					element.style.borderColor = "rgb(34, 34, 34)";
				}
			});
			//style
			/*

			uri: Qzz_Input_URI.value,
			titlebar: Qzz_Input_TitleBar.value,
			description: Qzz_Input_Description.value,
			headline: Qzz_Input_HeadLine.value,
			text: Qzz_Textarea_Text.value,
			image: Qzz_Textarea_Image.value,
			first_form: Qzz_Select_Form_Visible.value,
			questions: Qzz_Data.question
*/

			Qzz_Save.style.display = 'none';
			Qzz_Edit.style.display = 'inline-block';
			Qzz_msgsv.innerText = "Se você já editou tudo o que precisava, grave as configurações.";
			Qzz_msged.innerText = "Se você não salvar, todas as alterações feitas acima serão perdidas.";
			

			jQuery(window).scrollTop(0);

			Qzz_new_question();
			Qzz_Input_URI.focus();

			Qzz_View_New_Button.style.display = 'block';


			// var values = Object.values(Quizz_Builder_Edit_Data.questions);
			// var keys = Object.keys(Quizz_Builder_Edit_Data.questions);
			var entries = Object.entries(Quizz_Builder_Edit_Data.questions);


			var array_Q_HeadLine = [];
			var array_Q_Text = [];
			window.array_Q_LabelOptions = [];
			window.array_Q_LinkOptions = [];
			window.array_Q_FormOptions = [];

			entries.forEach(function(item_ID) {

				// loop nos questionarios, um a um
				if (/_ID_/.test(item_ID[0])) {
					var id = item_ID[1];
					array_Q_LabelOptions[id] = [];
					array_Q_LinkOptions[id] = [];
					array_Q_FormOptions[id] = [];

					entries.forEach(function(k) {
						var opt = { key: k[0], value: k[1], question_id: id };

						if (new RegExp(id + "_HeadLine_").test(k[0])) array_Q_HeadLine.push(opt);
						if (new RegExp(id + "_Text_").test(k[0])) array_Q_Text.push(opt);

						// 3 questions | 6 labeloptions
						if (new RegExp(id + "_LabelOption_").test(k[0])) {
							var temp_opt = opt;
							var v887 = k[0].split("_LabelOption_");
							v887 = v887[1].split("_");
							v887 = v887[0];
							temp_opt.btn_id = v887;
							array_Q_LabelOptions[id].push(temp_opt);
						}
						if (new RegExp(id + "_LinkOption_").test(k[0])) {
							var temp_opt = opt;
							var v887 = k[0].split("_LinkOption_");
							v887 = v887[1].split("_");
							v887 = v887[0];
							temp_opt.btn_id = v887;
							array_Q_LinkOptions[id].push(temp_opt);
						}
						if (new RegExp(id + "_FormOption_").test(k[0])) {
							var temp_opt = opt;
							var v887 = k[0].split("_FormOption_");
							v887 = v887[1].split("_");
							v887 = v887[0];
							temp_opt.btn_id = v887;
							array_Q_FormOptions[id].push(temp_opt);
						}

						// if (new RegExp(id + "_LinkOption_").test(k[0])) array_Q_LinkOption.push({ key: k[0], value: k[1] });						
						// if (new RegExp(id + "_FormOption_").test(k[0])) array_Q_FormOption.push({ key: k[0], value: k[1] });						
					});
				}
			});


			Qzz_Select_Form.innerHTML = "<option value=''>-- NENHUM --</option>";		
			Qzz_Select_Form_Visible.innerHTML = "<option value=''>-- NENHUM --</option>";		

			Qzz_Questions_list.innerHTML = "";
			var n = 0, i = 0;
			entries.forEach(function(k) {
				var key_ = k[0];
				var value_ = k[1];

				// loop de questions
				if (/_ID_/.test(key_)) {


					var count_lbl = 0;
					var btns_ = [];
					array_Q_LabelOptions[value_].forEach(function(lbl) {
						var button = {
							id: lbl.btn_id,//count_lbl+1,
							question_id: lbl.question_id,
							label: lbl.value,
							link: array_Q_LinkOptions[value_][count_lbl].value,
							form: array_Q_FormOptions[value_][count_lbl].value
						};

						if (value_ == lbl.question_id) {
							Qzz_Data.buttons.push(button);
							//btns_.push(button);
							btns_.push(button);
						}

						count_lbl++;
					});

					var question = {
						id: value_,
						headline: array_Q_HeadLine[i].value,
						text: array_Q_Text[i].value,
						// buttons: Qzz_Data.buttons// esta enviando tudo, e para enviar apenas referente ao question_id
						buttons: btns_ // esta enviando tudo, e para enviar apenas referente ao question_id
					};

					Qzz_Data.question.push(question);



					Qzz_Questions_list.innerHTML += "<span ref='item' style='display:flex'>"+
					"<span ref='chip' data-id='" + value_ + "' "
					+ " data-head-line='" + array_Q_HeadLine[i].value + "' " 
					+ " data-labels='" + JSON.stringify(array_Q_LabelOptions[value_]) + "' " 
					+ " data-links='" + JSON.stringify(array_Q_LinkOptions[value_]) + "' " 
					+ " data-forms='" + JSON.stringify(array_Q_FormOptions[value_]) + "' " 
					+ " data-text='" + array_Q_Text[i].value + "' " 
					+ " class='qzz-btn-view-2'>" + array_Q_HeadLine[i].value + "</span>"

					+ "<span act='del'>[x]</span>"
					+ "</span>"
					;


					// quando clica EDITAR, carrega dados				
					Qzz_Select_Form.innerHTML += "<option value='" + value_ + "'>" + array_Q_HeadLine[i].value + "</option>";
					Qzz_Select_Form_Visible.innerHTML += "<option value='" + value_ + "'>" + array_Q_HeadLine[i].value + "</option>";


					//Qzz_Buttons_list
					//bibi
					Qzz_Questions_list.querySelectorAll('span[ref="item"]').forEach(function(span) {

	
						span.querySelectorAll('[act="del"]').forEach(function(span) {
							span.onclick = function() {
								this.parentNode.style.display = 'none';

								var this_id = this.parentNode.querySelector('[ref="chip"]').getAttribute('data-id');

								var new_question = [];
								
								Qzz_Data.question.forEach(function(item) {
									if (item.id != this_id) new_question.push(item);
								});
								Qzz_Data.question = new_question;

								if (!new_question.length) Qzz_Questions_list.innerHTML = "vazio";

								// atualiza <SELECT> no click dos chips
								Qzz_Select_Form.innerHTML = "<option value=''>-- NENHUM --</option>";
								Qzz_Select_Form_Visible.innerHTML = "<option value=''>-- NENHUM --</option>";
								Qzz_Data.question.forEach(function(dt) {
									Qzz_Select_Form.innerHTML += "<option value='" + dt.id + "'>" + dt.headline + "</option>";
									Qzz_Select_Form_Visible.innerHTML += "<option value='" + dt.id + "'>" + dt.headline + "</option>";
									;
								});	
							}
						});


						span.querySelector('[ref="chip"]').onclick = function() {
							Qzz_Select_Form.value = '';

							Qzz_ViewPort_Question_List_Choice.style.display = 'none';

							var this_id = this.getAttribute('data-id');
							var this_head_line = this.getAttribute('data-head-line');
							var this_text = this.getAttribute('data-text');

							window.Qzz_Current_Editing_Quizz_ID = this_id;

							Qzz_Input_HeadLine_Question.value = this_head_line;
							Qzz_Textarea_Text_Question.value = this_text;


							var this_labels = JSON.parse(this.getAttribute('data-labels'));
							var this_links = JSON.parse(this.getAttribute('data-links'));
							var this_forms = JSON.parse(this.getAttribute('data-forms'));


							Qzz_View_New_Button_In.style.display = 'block';
							Qzz_ViewPort_Question_Fill.style.display = 'block';

							// console.log('--- links ---');
							// console.log(this_links);

							// console.log('--- forms ---');
							// console.log(this_forms);
							Qzz_Buttons_list.innerHTML = "";
							var n_lbl = 0;
							if (this_labels.length) this_labels.forEach(function(lbl) {
								Qzz_Buttons_list.innerHTML += "<span ref='item' style='display:flex;'><span ref='chip' "
								+ " data-label='" + lbl.value + "' "
								+ " data-link='" + this_links[n_lbl].value + "' "
								+ " data-form='" + this_forms[n_lbl].value + "' "
								+ " data-id='" + lbl.btn_id + "' "
								+ " data-qid='" + this_forms[n_lbl].question_id + "' "
								+ " class='qzz-btn-view'>" + lbl.value + " </span><span act='del'>[x]</span></span>";

									"<span style='display:flex;cursor:pointer;'><span ref='chip' data-id='" + id + "' class='qzz-btn-view'>" + Qzz_Input_Label_Button.value + "</span><span act='del'>[x]</span></span>";

								n_lbl++;
							});
							else Qzz_Buttons_list.innerHTML = "vazio";


							Qzz_Buttons_list.querySelectorAll('span[ref="chip"]').forEach(function(span) {
								span.parentNode.querySelector('[act="del"]').onclick = function() {
									var this_ = this;
									var this_label = this.parentNode.querySelector('[ref="chip"]').getAttribute('data-label');
									var this_qid = this.parentNode.querySelector('[ref="chip"]').getAttribute('data-qid');

									var new_buttons = [];

									if (Qzz_Data.buttons.length) Qzz_Data.buttons = Qzz_Data.buttons.map(function(bt) {
										// encontra o botão pelo label na lista dos botoes existentes
										if (bt) {

											// se nao apag
											//bt.question_id != this_qid
											// ATUALIZA O OBJETO DE BOTAO DE FORMULARIO (N EH O QUE VAI SALVAR)
											if (bt.label != this_label) {
												new_buttons.push(bt);
												return bt;
											}

											// se apaga
											else {
												// apagar botao do objeto question
												console.log('apaga este:');
												console.log(bt.label);

												// TUDO FUNCIONANDO, SO FALTA ATLERAR OS BT DOS QUESTIONS


												var new_q = [];
												if (Qzz_Data.question.length) {
													Qzz_Data.question.forEach(function(q) {
														var edit_q = q;

														var new_q_buttons = [];
														q.buttons.forEach(function(b) {
															// b = object
															// bt = object -> nenhum é element

															// identificar o Q senao vai editar de todos
															// se todo tiverem SIM vai apagar tudo 

															// se encontrou o label a ser excluido
															// nao pode ser so por label, tem que ter o id tbm
															if (bt.label == b.label ) {
																// if (this_id == q.id) { // se esta no question referente ao clicado

															 	// if (this_id == q.id) // se NAO esta no question referente ao clicado
															 	if (b.question_id != this_qid) // se NAO esta no question referente ao clicado
																	new_q_buttons.push(b);
																// SE ESTA, NAO NAO FAZ NADA, OU SEJA, ELE NAO EH GRAVADO
																// NA SUBSTITUICAO, LOGO FOI EXCLUIDO
															}
															else new_q_buttons.push(b);
														});
														edit_q.buttons = new_q_buttons;

														new_q.push(edit_q);
													});
													Qzz_Data.question = new_q;
												}





												this_.parentNode.style.display = 'none';
												this_.parentNode.setAttribute('stat', 'hide');
												var sps = Qzz_Questions_list.querySelectorAll('span');
												if (sps.length) sps.forEach(function(sp) {
													var dl = sp.getAttribute('data-labels');
													//sp.setAttribute('data-labels', '');
													if (dl) {
														var dl = JSON.parse(dl);
														// var new_dl = [];
														var qtd = 0;
														var obj_cload = [];
														dl.forEach(function(d) {
															if (bt.label == d.value) {
																// sp.setAttribute('data-labels', '[]');
															}
															else obj_cload.push(d);
															qtd++;
														});														
														sp.setAttribute('data-labels', JSON.stringify(obj_cload));

														//if (qtd == dl.length)
														// no clique do botao deletar, se for o ultimo chip
														// if (this_.parentNode.parentNode.querySelectorAll('span').length == 1)
														// Qzz_Buttons_list.innerHTML = "vazio";
														var items_hide = 0;
														if (this_.parentNode && this_.parentNode.parentNode) {
															var items = this_.parentNode.parentNode.querySelectorAll('[ref="item"]');
															if (items.length) items.forEach(function(item) {
																var stat = item.getAttribute('stat');
																if (stat) {
																	if (stat == 'hide') items_hide++;
																}
															});

															if (items_hide == items.length) Qzz_Buttons_list.innerHTML = "vazio";
														}

													}
												});

											} 
										}
										else {
											if (this_.parentNode) if (this_.parentNode.parentNode)
											this_.parentNode.parentNode.innerHTML = 'vazio';
										}
									});

									Qzz_Data.buttons = new_buttons;

									// atualizar dados sobre os botoes na lista de questions para nao renderizar na view
									// dados vazios
									//Qzz_Questions_list
									
									// Qzz_Data.buttons.forEach(function(item) {
									// 	if (item.id != this_id) new_buttons.push(item);
									// });
								}
								/*span.onclick = function() {

									var this_link = this.parentNode.querySelector('[ref="chip"]').getAttribute('data-link');
									var this_label = this.parentNode.querySelector('[ref="chip"]').getAttribute('data-label');
									var this_form = this.parentNode.querySelector('[ref="chip"]').getAttribute('data-form');

									Qzz_Data.current_button_link = this_link;
									Qzz_Data.current_button_label = this_label;
									Qzz_Data.current_button_form = this_form;

									if (this_link) Qzz_Input_Link_Button.value = this_link;
									Qzz_Input_Label_Button.value = this_label;
									// Qzz_Input_Form_Button.value = this_form;

									// preencher primeiro com todos os dados que existem
									// depois seleconar o atual
									Qzz_Select_Form.value = this_form;

								}*/
							});




						}
					});


					
					i++; // toda vez que encontra um questionario, aumenta 
				}

				n++;
			});


			Qzz_Select_Form_Visible.value = r.questions["<?php echo $qzzb_tablename; ?>_FirstForm_" + id];

			//r.questions["<?php echo $qzzb_tablename; ?>_Q_  _ID_" + id];


/*
		

			Qzz_Questions_list.querySelectorAll('span').forEach(function(span) {
				span.onclick = function() {
					this.style.display = 'none';

					var this_id = this.getAttribute('data-id');

					var new_question = [];
					
					Qzz_Data.question.forEach(function(item) {
						if (item.id != this_id) new_question.push(item);
					});
					Qzz_Data.question = new_question;

					if (!new_question.length) Qzz_Questions_list.innerHTML = "vazio";

					// atualiza <SELECT> no click dos chips
					Qzz_Select_Form.innerHTML = "<option value=''>-- NENHUM --</option>";
					Qzz_Select_Form_Visible.innerHTML = "<option value=''>-- NENHUM --</option>";
					Qzz_Data.question.forEach(function(dt) {
						Qzz_Select_Form.innerHTML += "<option value='" + dt.id + "'>" + dt.headline + "</option>";
						Qzz_Select_Form_Visible.innerHTML += "<option value='" + dt.id + "'>" + dt.headline + "</option>";
						;
					});	
				}
			});

*/			
			
		});
	}
	
</script>	