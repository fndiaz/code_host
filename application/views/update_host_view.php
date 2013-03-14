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
		/*font: 13px/20px normal Helvetica, Arial, sans-serif;*/
		font  :  small/1.5 "Tahoma", "Bitstream Vera Sans", Verdana, Helvetica, sans-serif;
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
		margin: 0 155px 0 155px;
		padding: 0px;
	}

	#body2{
		position: absolute; 
		top: 151px;
		left: 650px;
		width : 68%;
	}

	#body3{
		position: absolute; 
		top: 330px;
		left: 650px;
		width : 68%;
	}

	#body4{
		position: absolute; 
		top: 513px;
		left: 650px;
		width : 68%;
	}

	#body5{
		position: absolute; 
		top: 696px;
		left: 221px;
		width : 68%;
	}
	
	#body6{
		position: absolute; 
		top: 872px;
		left: 221px;
		width : 68%;
	}


	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	p.form{
		text-align: left;
		font-size: 12px;
		margin-left: 100px;
	}
	
	#container{
		margin: 10px;
		border: 2px solid #D0D0D0;
		background            : #FFF url(http://www.muffinresearch.co.uk/lab/tableshow/th_bck.gif) repeat-x;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		background            : #FFF url(http://www.muffinresearch.co.uk/lab/tableshow/th_bck.gif) repeat-x;
	}

/* 
	Tabela CSS
*/

table,td
{
	border               : 0px solid #CCC;
	border-collapse      : collapse;
  	font                 : small/1.5 "Tahoma", "Bitstream Vera Sans", Verdana, Helvetica, sans-serif;
	text-align           : left;
	width : 40%;
	margin-left:45px;
}
table
{
	border                :none;
	border                :2px solid #CCC;
}

#celula1 {
 width: 40px;
 padding: 0px;
 _width: 255px;
}
#celula2 {
 width: 200px;
 padding: 5px;
 _width: 400px;
}
#celula3 {
 width: 1200px;
 padding: 5px;
 _width: 1000px;
}


thead th,
tbody th
{
	background            : #FFF url(http://www.muffinresearch.co.uk/lab/tableshow/th_bck.gif) repeat-x;
  	color                 : #666;  
	padding               : 5px 5px;
  	border-left           : 1px solid #CCC;
	
}
tbody th
{
  background            : #fafafb;
  border-top            : 1px solid #CCC;
  text-align            : center;
  font-weight           : normal;
  font-size: 14px;
}
tbody tr td
{
  padding               : 7px 7px;
  color                 : #666;
}
tbody tr:hover
{
  background            : #FFF url(http://www.muffinresearch.co.uk/lab/tableshow/tr_bck.gif) repeat;
}

tbody tr:hover td
{
  color                 : #454545;
}
tfoot td,
tfoot th
{
  border-left           : none;
  border-top            : 1px solid #CCC;
	padding               : 4px;
  background            : #FFF url(http://www.muffinresearch.co.uk/lab/tableshow/foot_bck.gif)  repeat;
  color                 : #666;
}
caption
{
	text-align            : center;
	font-size             : 120%;
	padding               : 10px 0;
	color                 : #666;
}
table a:link
{
	color                 : #666;
}
table a:visited
{
	color                 : #666;
}
table a:hover
{
	color                 : #003366;
	text-decoration       : none;
}
table a:active
{
	color                 : #003366;
}

	</style>


</head>
<body>

<div id="container">
	<h1>Edição</h1>	
	
	<div id="body">
		
		<?php
			
			echo form_open('maincontroller/edit_host/'.$host->id_host);
			echo form_fieldset('Edição de host');
			//echo ('Nome do host ');
			//echo form_input('nome_host',set_value('nome_host',$host->nome_host));
			//echo form_error('nome_host');
			//echo '<br>';
			//echo ('Cliente '); 
			//echo form_dropdown('id_cliente',$cliente,set_value('id_cliente',$host->id_cliente)); 
			//echo form_input('interface_chegada',set_value('interface_chegada',$host->interface_chegada));
			echo '<br>';
			?>
			<table>
			<tr><td>Cliente</td>	
			<td><?php echo form_dropdown('id_cliente',$cliente,set_value('id_cliente',$host->id_cliente)) ?></td></tr>
			<tr><td>Servidor</td>
			<td><?php echo form_dropdown('id_servidor',$servidor,set_value('id_servidor',$host->id_servidor)) ?></td></tr>
			<tr><td>Distribuição</td><td><?php echo form_dropdown('id_so',$so,set_value('id_so',$host->id_so)) ?></td></tr>
			<tr><td>Nome do host *</td>
			<td><?php echo form_input('nome_host',set_value('nome_host',$host->nome_host),'maxlength="30" size="20"'); ?></td></tr>
			</table>
			<br>
			<table>
			<tr><td>Interface1</td>
			<td><?php echo form_input('if1',set_value('if1',$host->if1)) ?></td></tr>
			<tr><td>IP1</td>
			<td><?php echo form_input('ip1',set_value('ip1',$host->ip1)) ?></td></tr>
			<tr><td>Máscara1</td>
			<td><?php echo form_input('masc1',set_value('masc1',$host->masc1)) ?></td></tr>
			<tr><td>Observação1</td>
			<td><?php echo form_input('obs1',set_value('obs1',$host->obs1)) ?></td></tr>
			</table>
			<br>
			<table>
			<tr><td>Interface3</td>
			<td><?php echo form_input('if3',set_value('if3',$host->if3)) ?></td></tr>
			<tr><td>IP3</td>
			<td><?php echo form_input('ip3',set_value('ip3',$host->ip3)) ?></td></tr>
			<tr><td>Máscara3</td>
			<td><?php echo form_input('masc3',set_value('masc3',$host->masc3)) ?></td></tr>
			<tr><td>Observação3</td>
			<td><?php echo form_input('obs3',set_value('obs3',$host->obs3)) ?></td></tr>
			</table>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
			<?php echo form_error('nome_host'); ?>
			<?php echo form_error('sobrenome'); ?>
			<?php echo form_error('interface_chegada'); ?>
			<?php echo form_error('porta_ssh'); ?>
			<?php echo form_error('gateway'); ?>
			<?php echo form_error('servicos'); ?>
			


<div id="body2">
<table>
<tr><td>Sobrenome *</td>	
<td><?php echo form_input('sobrenome',set_value('sobrenome',$host->sobrenome)); ?></td></tr>
<tr><td>IP Chegada *</td>
<td><?php echo form_input('interface_chegada',set_value('interface_chegada',$host->interface_chegada)); ?></td></tr>
<tr><td>Porta ssh *</td>
<td><?php echo form_input('porta_ssh',set_value('porta_ssh',$host->porta_ssh));; ?></td></tr>
<tr><td>Gateway *</td>
<td><?php echo form_input('gateway',set_value('gateway',$host->gateway)); ?></td></tr>
</table>
</div>

<div id="body3">
<table>
<tr><td>Interface2</td>
<td><?php echo form_input('if2',set_value('if2',$host->if2)); ?></td></tr>
<tr><td>IP2</td>
<td><?php echo form_input('ip2',set_value('ip2',$host->ip2)); ?></td></tr>
<tr><td>Máscara2</td>
<td><?php echo form_input('masc2',set_value('masc2',$host->masc2)); ?></td></tr>
<tr><td>Observação2</td>
<td><?php echo form_input('obs2',set_value('obs2',$host->obs2)); ?></td></tr>
</table>
</div>

<div id="body4">
<table>
<tr><td>Interface4</td>
<td><?php echo form_input('if4',set_value('if4',$host->if4)); ?></td></tr>
<tr><td>IP2</td>
<td><?php echo form_input('ip4',set_value('ip4',$host->ip4)); ?></td></tr>
<tr><td>Máscara2</td>
<td><?php echo form_input('masc4',set_value('masc4',$host->masc4)); ?></td></tr>
<tr><td>Observação2</td>
<td><?php echo form_input('obs4',set_value('obs4',$host->obs4)); ?></td></tr>   
</table>
</div>

<div id="body5">
<table>
<tr><td>Serviços&nbsp*</td>
<td><?php //echo form_textarea('servicos',set_value('servicos',$host->servicos)); 
$servico_data = array(
'class' => 'textbox',
	'id' => 'servicos',
        'name' => 'servicos', //campo
	'rows' => 8,
        'cols' => 37);
			
echo form_textarea($servico_data,set_value('servicos',$host->servicos)); 
?></td>
<td>Rotas</td>
<td><?php
$rota_data = array(
	       'id' => 'rotas',
               'name' => 'rotas', //campo
               'rows' => 8,
               'cols' => 36);

echo form_textarea($rota_data,set_value('rotas',$host->rotas));			
?></td>
</tr>
</table>
</div>

<div id="body6">
<table>
<td>Obs&nbspGerais</td>
<td><?php
$obs_gerais_data = array(
	       'id' => 'obs_gerais',
               'name' => 'obs_gerais', //campo
               'rows' => 8,
               'cols' => 84);

echo form_textarea($obs_gerais_data,set_value('obs_gerais',$host->obs_gerais));			
?></td>
</tr>
</table>
</div>




			<?php		
			echo form_fieldset_close();
			echo '<br>';
			echo form_submit('submit','Editar');
			echo form_close();
		
		?>
		<?php //echo$host->nome_host ?>
		<?php //echo$host->id_cliente ?>
		<?php //echo$host->cliente ?>
		<br>
	</div>

	
</div>
	

	
</body>
</html>
