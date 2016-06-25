<?php 

require "vendor/csv-master/autoload.php";

use League\Csv\Writer;


//Lista de usuarios genera de alguna manera por ejemplo resultado de una consulta
$listaUsuarios = array(
    0 => array('Carlos Hernan', 'Aguilar', 'carloshernan@ingenieroweb.com.co'),
    1 => array('Carlos Hernan', 'Aguilar', 'carloshernan@ingenieroweb.com.co'),
    3 => array('Carlos Hernan', 'Aguilar', 'carloshernan@ingenieroweb.com.co'),
    4 => array('Carlos Hernan', 'Aguilar', 'carloshernan@ingenieroweb.com.co'),
    5 => array('Carlos Hernan', 'Aguilar', 'carloshernan@ingenieroweb.com.co')
);

// Instanciamos la clase para escribir el archivo csv
$csv = Writer::createFromFileObject(new SplTempFileObject());

//Información de la primera fila
$csv->insertOne(['nombre', 'apellido', 'email']);

//Agregamos el arreglos con los registros
$csv->insertAll($listaUsuarios);

//Obtenemos el resultado para la salida 
$csv->output('usuarios.csv');

//finalizamos el scritp
exit; 


