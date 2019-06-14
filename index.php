<?php


// controlador
if( isset($_GET['on']) ) echo on();
else echo off();
function on(){
	return '
		<a href="?off=1">
			<img src="imagenes/bombilla_on.jpg" style="height:400px"/>
		</a>
	';
}
function off(){
	return '
		<a href="?on=1">
			<img src="imagenes/bombilla_off.jpg" style="height:500px"/>
		<a/>
	';
}
?>
