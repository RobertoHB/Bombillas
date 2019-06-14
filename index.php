<?php
Class Bombilla{
        public $id;
        public $estado=0;
        //modelo
        function __construct($i){
            $this->id=$id;
        }
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

 for ($i=0;$i<5;$i++){
     $b[$i]=new Bombilla();
    if( isset($_GET['on']) ){
            echo $b[$i]->on();
    }else{
            echo $b[$i]->off();
    }      
 }    
?>