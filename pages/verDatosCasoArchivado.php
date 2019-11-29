<?php

namespace Monitor;

require '../includes/config.php';

$id = $_GET['id'];

//Realizo la instanciación del proceso de negocio que tiene el id que paso en la URL
$data = Cases::getDataFromArchivedCase($id);

foreach ($data['data'] as $key => $value) {
	echo $key . ": ". $value . '<br />';
}