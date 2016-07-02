<?php
	function initSesion(){
		if(!session_id()){
			session_start();
		}
	}

	function crearSesion($p1,$p2){
		$_SESSION["p1"] = $p1;
		$_SESSION["p2"] = $p2;
		$_SESSION["p1Model"] = "";
		$_SESSION["p2Model"] = "";
	}

	function saveModel($player,$personaje,$textura){
		$_SESSION[$player."Model"] = $personaje; 
		$_SESSION[$player."Texture"] = $textura; 
	}

	function destruirSesion(){
		if(!session_id()){
			session_start();
		}
		session_destroy();
		unset($_SESSION);
		header("location: ../index.html");
	}
?>