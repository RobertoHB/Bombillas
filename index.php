<?php
Class Bombilla{
	// vista
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
}
// controlador
$b=new Bombilla();
 for ($i=0;$i<5;$i++){
    if( isset($_GET['on']) ){
            echo $b->on();
    }else{
            echo $b->off();
    }      
 }    
?>