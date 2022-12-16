<?php 
		class ConexionBD{
			public static function cBD($usuario,$clave){
				$bd = new PDO("mysql:host=dbprjcomputacion.cuevafgehoh7.us-east-1.rds.amazonaws.com;dbname=biblioteca",$usuario,$clave); 
				return $bd;
			}
		}
 ?>