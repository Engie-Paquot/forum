<?php
try
{
$db = new PDO('mysql:host=mysql;dbname=Forum', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>