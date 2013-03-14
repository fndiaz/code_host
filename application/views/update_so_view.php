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
		background            : #FFF url(http://www.muffinresearch.co.uk/lab/tableshow/th_bck.gif) repeat-x;
	}

/* 
	Tabela CSS
*/

table,td
{
	border               : 1px solid #CCC;
	border-collapse      : collapse;
  	font                 : small/1.5 "Tahoma", "Bitstream Vera Sans", Verdana, Helvetica, sans-serif;
	text-align           : center;
	width : 50%;
}
table
{
	border                :none;
	border                :1px solid #CCC;
}

#celula1 {
 width: 40px;
 padding: 6px;
 _width: 255px;
}
#celula2 {
 width: 400px;
 padding: 5px;
 _width: 800px;
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
  padding               : 5px 5px;
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
		<p></p>
		<?php
			echo form_open('maincontroller/edit_so/'.$so->id_so);
			echo form_fieldset('Edite a distribuição:');
			echo '<br>';
			echo ('Distribuição ');
			echo form_input('so',set_value('so',$so->so));
			echo '<br><br>';
			?>
			<table>
			<tr>
			<td id="celula1"><img src="http://hosts2.ad2.com.br/img/centos.jpg" border=0></td>
			<td id="celula1"><img src="http://hosts2.ad2.com.br/img/debian.jpg" border=0></td>
			<td id="celula1"><img src="http://hosts2.ad2.com.br/img/redhat.jpg" border=0></td>
			<td id="celula1"><img src="http://hosts2.ad2.com.br/img/ubuntu.jpg" border=0></td>
			<td id="celula1"><img src="http://hosts2.ad2.com.br/img/outras.jpg" border=0></td>
			</tr>


			</tr>
			<td id="celula1"><?php echo form_radio('img',set_value('img',"centos.jpg")) ?></td>
			<td id="celula1"><?php echo form_radio('img',set_value('img',"debian.jpg")) ?></td>
			<td id="celula1"><?php echo form_radio('img',set_value('img',"redhat.jpg")) ?></td>
			<td id="celula1"><?php echo form_radio('img',set_value('img',"ubuntu.jpg")) ?></td>
			<td id="celula1"><?php echo form_radio('img',set_value('img',"outras.jpg")) ?></td>
			</tr>
			</table><br>
			<?php 
			//echo form_radio('peq_img',set_value('peq_img',"peq_debian.jpg"));
			//echo form_dropdown('tag',$tags);
			echo form_error('so');
			echo form_fieldset_close();
			echo '<br>';
			echo form_submit('submit','Editar');
			echo form_close();
		
		?>
		<br>
	</div>

	
</div>
	

	
</body>
</html>
