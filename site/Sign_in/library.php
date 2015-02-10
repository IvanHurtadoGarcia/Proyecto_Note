<?php
session_start();
mysql_connect("localhost", "root", "") or die ("Oops! no se pudo conectar con el Servidor"); // Connect to the host
mysql_select_db("note_network") or die ("Oops! DB not connected"); // select the database
?>