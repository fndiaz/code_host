<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Primeira Página</title>

	<style type="text/css">
	
	body{
		background : #c6c6c6;
		margin : 0;
		padding : 0;
		font : small/1.5 "Tahoma", "Bitstream Vera Sans", Verdana, Helvetica, sans-serif;
	}
	
	#login_form {
		width : 400px;
		height : 310px;
		background            : #FFF url(http://www.muffinresearch.co.uk/lab/tableshow/th_bck.gif) repeat-x;
		border : 2px solid white;
		margin : 120px auto 0;
		padding : 2em;
		-moz-border-radius : 3px;
		-webkit-border-radius : 3px;			
	}
	h1,h2,h3,h4,h5{
	margin-top : 0;
	font : "Tahoma", "Bitstream Vera Sans", Verdana, Helvetica, sans-serif;
	text-align : center;
	}

	input[type=text], input[type=password] {
	display : block;
	margin : 0 0 len 0;
	width : 230px;
	//border : 5px;
	//-moz-border-radius : 1px;
	-webkit-border-radius : 1px;
	padding-top:10px;
	padding-bottom:10px;
	padding-right:40px;
	}

	input[type=submit], form a{
	border-style:solid;
	border-width:medium;
	margin-right : 1en;
	padding : 6px;
	text-decoration : none;
	font-size : 12px;
	-moz-border-radius : 4px;
	-webkit-border-radius : 4px;
	background : #348075
	-moz-box-shadow : 0 1px 0 white;
	-webkit-box-shadow : 0 1px 0 white;
	}
	input[type=submit]:hover, form a:hover{
	background : #287368
	cursor : pointer;
	}
	.error {
	color : #393939;
	font-size : 15px;
	}
	h1 {
	text-shadow : 0 1px 0 white;
	}		
	
	


	</style>

	
</head>
<body>


<div id="login_form">

	<h1>Área de login</h1>	
	
	
	
		<p>Entre com o nome de usuário e senha:</p>
		<?php
			echo form_open('maincontroller/login');
			echo form_fieldset('Login');
			//echo ('Usuário ');
			//echo '<br>';
			echo form_input('usr', 'nome de usuário');
			echo '<br>';
			//echo (' Senha');
			echo form_password('senha', 'senha');
			echo form_error('usr');			
			echo form_fieldset_close();
			echo '<br>';
			echo form_submit('submit','Entrar');
			echo form_close();
		
		?>
 
		<br>
</div>
	



	

</body>
</html>
