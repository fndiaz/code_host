<html>
<head>
<style type="text/css">
#menubv {
width: 136px; - LARGURA
padding: 0;
margin: 0;
font: 10px Verdana, sans-serif;
}

#menubv ul {
list-style: none;
margin: 0;
padding: 0;
}

#menubv li {
border-bottom: 1px solid #000000;
margin: 0;
}

#menubv li a {
display: block;
padding: 5px 5px 5px 0.5em;
font-weight:bold;
border-top: 1px solid #000000;
border-width: 1px solid #000000;
border-left: 1px solid #000000;
border-right: 1px solid #000000;
background-color: red;
color: #FFFFFF;
text-decoration: none;
}

#menubv li a:hover {
border-left: 1px solid #000000;
border-right: 1px solid #000000;
background-color: #ff6600;
color: #fff;
}


/* Fix IE. Hide from IE Mac \*/
* html #menubv ul li { float: left; height: 1%; }
* html #menubv ul li a { height: 1%; }
/* End */
</style>
</head>
<body>
<div id="menubv">
<ul id="menuver">
	<li><a href="#" title="Codigos Fontes">Codigo Fonte</a></li>
	<li><a href="#" title="">PHP</a></li>
	<li><a href="#" title="">CSS - Tableless</a></li>
	<li><a href="#" title="">HTML</a></li>
	<li><a href="#" title="">JAVASCRIPT</a></li>
</ul>
<?php echo$teste ?>
<?php echo$teste2 ?>
</body>
</html>
