<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Primeira Página</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 2px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Cadastro</h1>	
	
	
	<div id="body">
		<p>Essa é uma página de aprendizado que realiza uma inserção:</p>
		<?php
			echo form_open('maincontroller/create_usuario');
			echo form_fieldset('Inserção de Usuário');
			echo ('Nome ');
			echo form_input('usr');
			echo (' E-mail ');
			echo form_input('email');
			echo form_error('usr');
			echo form_error('email');
			echo form_fieldset_close();
			echo '<br>';
			echo form_submit('submit','Enviar');
			echo form_close();
		
		?>
		<br>
	</div>

	
</div>

	

	<div id="container">
		<h1>Consulta</h1>
		
		<div id="body">
			
				<?php 
				foreach($usuarios as $a){
				//echo '<p>'.anchor("maincontroller/edit_usuario/$a->id",'Excluir'). '  - ' .$a->usr.' - '.$a->email .'</p>';
				echo '<p>' .'<a href= "edit_usuario/'.$a->id.'"><img src="http://metalib.wisconsin.edu/UWMAX/icon_eng/v-icon-edit.png" border=0></a> ' .'<a href= "delete_usuario/'.$a->id.'"><img SRC="http://www.iconesbr.net/iconesbr/2008/08/6127/6127_16x16.png" border=0></a> ' .$a->usr.' - '.$a->email.'</p>';

				
				}

				echo '<br>';
								
				echo form_open('maincontroller/sendmail');
				echo form_fieldset('Enviar e-mail');
				echo ('Assunto ');
				echo form_input('ass');
				echo (' Destinatário ');
				echo form_input('dst');
				echo '<br>';
				echo '<br>';				
				echo (' Mensagem ');
				echo form_input('msg');
				echo form_fieldset_close();
				echo '<br>';
				echo form_submit('submit','Enviar');
				echo form_close();

				echo '<br>';
				//echo anchor("maincontroller/sendmail", 'Enviar e-mail');
				?>
		</div>
		<p class="footer">Pagina renderizada em <strong>{elapsed_time}</strong> segundos</p>
	</div>

</body>
</html>
