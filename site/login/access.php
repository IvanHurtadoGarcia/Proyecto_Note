<?php
function conexBD() {
     error_reporting(0);
     $conex=mysql_connect("localhost","root","");
     if(!$conex){
     die("Error de connexion: ".mysql_error());
     }
     $database=mysql_select_db("note_network",$conex);
     if(!$database){
     die("Error: ".mysql_error());
		}
	  }
?>	
