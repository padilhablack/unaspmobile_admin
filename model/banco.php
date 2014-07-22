<?php

$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}

mysql_select_db("unaspmobile", $link) or die ("Problemas na conexão"); 

	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'",$link);
//mysql_close($link);
?>