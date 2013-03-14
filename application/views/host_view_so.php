<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>hosts</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 0px;
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
		margin: 0 15px 0 15px;
		
	}

	#body2{
		margin: 0 45px 0 100px;
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
		background            : #FFF url(http://www.muffinresearch.co.uk/lab/tableshow/th_bck.gif) repeat-x;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

	#pagination a {
	background : #e3e3e3;
	padding : 3px 3px;
	text-decoration : none;
	border: 1px solid #cac9c9;
	color: #292929;
	font-size : 10px;
	font  :  small/1. "Tahoma", "Bitstream Vera Sans", Verdana, Helvetica, sans-serif;
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
	width : 98%;
}
table
{
	border                :none;
	border                :1px solid #CCC;
}

#celula1 {
 width: 40px;
 padding: 0px;
 _width: 255px;
}
#celula2 {
 width: 400px;
 padding: 5px;
 _width: 400px;
}
#celula3 {
 width: 950px;
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
<link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/code3/css/menu.css"/>

<div id="container_menu">

	<div  id="floatingbar">
		 <ul>
		  <li><img border=0 src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/code3/img/hosts.png"></img></li>
		   <!--<li><a href=""><button>Home</button></a></li>-->
		   <li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/code3/index.php/maincontroller/show_usuario"><button class="default">Clientes</button></a></li>
		   <li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/code3/index.php/maincontroller/show_servidor"><button class="default">Servidores</button></a></li>
		   <li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/code3/index.php/maincontroller/show_so"><button class="default">Distribuições</button></a></li>
		  <li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/code3/index.php/maincontroller/create_host"><button>+ host</button></a></li>
		   		
		   
		    <!--<li><a href="javascript:#"><button title="Scroll" id="dirbutton" class="default">
		      <img border=0 src="images/bottomarrow.png"></img>
		   </button></a></li>-->
		 </ul>
	</div>



<!--<div id="container">
	<h1>Cadastro</h1>	
		
	<div id="body">
		<p>Essa é uma página de aprendizado que realiza uma inserção:</p>
		<?php
			echo form_open('maincontroller/busca');
			echo form_fieldset('Busca');
			echo ('Origem ');
			echo form_input('origem');
			//echo (' Destino ');
			//echo form_input('dst');
			echo form_error('origem');
			//echo form_error('dst');
			echo form_fieldset_close();
			echo '<br>';
			echo form_submit('submit','Filtrar');
			echo form_close();
		
		?>
				
		<br>
	</div>
</div>-->




<div id="container">
	<?php echo '<h1>' .$titulo_so->so. '</h1>' ?>
	
	<div id="body2">
	
	<?php
		echo '<br><table><thead><th>Editar</th><th>Visualizar</th><th>Cliente</th><th>Servidor</th><th>nome</th><th>ip chegada</th><th>porta</th><th>gateway</th></tr></thead>';
	 	
		foreach($query as $a){
		
		echo '<tr><td id="celula1"> <a href= "http://' .$_SERVER['SERVER_NAME']. '/code3/index.php/maincontroller/edit_host/'.$a->id_host.'"><img src="http://metalib.wisconsin.edu/UWMAX/icon_eng/v-icon-edit.png" border=0></a> </td><td id="celula1"><a href= "http://' .$_SERVER['SERVER_NAME']. '/code3/index.php/maincontroller/detalhes_host/'.$a->id_host.'"><img src="http://png.findicons.com/files/icons/753/gnome_desktop/32/gnome_view_restore.png"></td><td id="celula2"><a href="http://' .$_SERVER['SERVER_NAME']. '/code3/index.php/maincontroller/show_host2/'.$a->id_cliente.'">'.$a->cliente.'</a></td><td id="celula3">' .$a->servidor. '</td><td id="celula3">' .$a->nome_host. '</td><td id="celula2">' .$a->interface_chegada. '</td><td id="celula2">' .$a->porta_ssh. '</td><td id="celula2">' .$a->gateway. '</td></tr>';

				
		//echo'<p>' .$a->origem.' - '.$a->dst.'</p>';

		}
		echo '</table><br>';
	?>
	<?php echo $this->pagination->create_links(); ?>
	
	</div>	
	<p class="footer">Pagina renderizada em <strong>{elapsed_time}</strong> segundos</p>
</div>



</body>
</html>
