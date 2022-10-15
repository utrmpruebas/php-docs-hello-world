<?php
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Mi página basica de HTML</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.36" />
	
	<style>
	 .enlace:hover{
		color: red; 
		}
	</style>
</head>

<body>
	
<h1>¡Hola este es mi página en XHTML!</h1>

<p>Este es un documento básico donde muestro mis conocimientos sobre XHTML (oh por lo menos que se de memoria)</p>

<i>Las listas de <b>tareas</b> que tengo que hacer:</i>

<ul>
<li>Ingles: Terminar en la plataforma</li>
<li>Calculo diferencial
	<ul>
	<li><s>Reglas de 4 pasos</s></li>
	<li><u>Derivadas</u></li>
	</ul>
<li>Base de datos: SQL</li>
</li>
</ul>

<a class="enlace" target="_blank" href="https://pomf2.lain.la/f/8kbiv7xm.jpg">Una foto de una vaca graciosa</a>

<h1>Datos Del Responsable De Realizar La Encuesta</h1>

<form action="../">

<label>Nombre completo</label>
<input type="text" id="Grupo1_Pre1">


<br/>


<label>Tipo de empresa</label><br>
<input type="radio" id="Grupo1_Pre7" value="microempresa"> <label for="microempresa">Microempresa</label><br/>
<input type="radio" id="Grupo1_Pre7" value="pequeñaempresa"> <label for="pequeñaempresa">Pequeña empresa</label><br/>
<input type="radio" id="Grupo1_Pre7" value="medianaempresa"> <label for="medianaempresa">Mediana empresa</label><br/>
</div>

<br/>


<label>Tipo de empresa</label><br/>
<input type="radio" id="Grupo1_Pre7" value="agropecuario"> <label for="agropecuario">Microempresa</label><br/>
<input type="radio" id="Grupo1_Pre7" value="tecnologico"> <label for="tecnologicos">Tecnologico</label><br/>
<input type="radio" id="Grupo1_Pre7" value="otros"> <label for="otros">otros</label> <input type="text" id="Grupo1_Pre1"><br/>

<input type="submit" value="Enviar">
</form>
</body>

</html>
?>
