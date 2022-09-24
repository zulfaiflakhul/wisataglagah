<?php
try
{
	$bdd = new PDO('mysql:host=remotemysql.com;dbname=sFHrMh1E0v;charset=utf8', 'sFHrMh1E0v', '9lcJ2yWj5L');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
