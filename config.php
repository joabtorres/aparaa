<?php

/*
 * config.php  - Este arquivo contem informações referente a: Conexão com banco de dados e URL Pádrão
 */

require 'environment.php';
$config = array();
if (ENVIRONMENT == 'development') {
    //Raiz
    define("BASE_URL", "http://localhost/aparaa/");
    //nome do projeto
    define("NAME_PROJECT", "APARAA - Associação de Pequenos Agricultores do Assentamento 15 de Agosto");
    //Nome do banco
    $config['dbname'] = 'sigapa';
    //host
    $config['host'] = 'localhost';
    //usuario
    $config['dbuser'] = 'root';
    //senha
    $config['dbpass'] = '';
} else {
     //Raiz
    define("BASE_URL", "https://aparaa.joabtorres.com.br/");
    //nome do projeto
    define("NAME_PROJECT", "APARAA - Associação de Pequenos Agricultores do Assentamento 15 de Agosto");
    //Nome do banco
    $config['dbname'] = 'joabtorr_sigapa';
    //host
    $config['host'] = 'localhost';
    //usuario
    $config['dbuser'] = 'joabtorr_develop';
    //senha
    $config['dbpass'] = '+f#yNqTQq2)L';
}
?>
