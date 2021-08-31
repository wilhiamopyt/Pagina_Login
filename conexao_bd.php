<?php
session_start();
$config['dbname'] = 'Sistema_Financeiro';
$config['host'] = 'localhost';
$config['dbuser'] = 'root';
$config['dbpass'] = '';

global $db;
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}
/* $sql=$db->query("SELECT * FROM usuarios");
$sql->execute();
$data =$sql->fetchALL(\PDO::FETCH_ASSOC);
echo print_r($data); */