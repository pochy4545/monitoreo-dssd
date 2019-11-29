<?php
session_start();
$usuario = "root";
$contrasena = "mierda4545"; 
$servidor = "localhost";
$basededatos = "db/development_Dssd";

$conn = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM videoconferencia";
$resultVideoconferenicas = $conn->query($sql);

$sql1 = "SELECT v.id, r.fecha,r.hora,r.estado FROM videoconferencia v INNER JOIN registro_videoconferencia r on r.videoconferencia = v.id
WHERE r.estado=5 or r.estado=6 or r.estado=7 or r.estado=8 ";
$estadoFinalizado = $conn->query($sql1);

$sql2 = "SELECT v.id, r.fecha,r.hora,r.estado FROM videoconferencia v INNER JOIN registro_videoconferencia r on r.videoconferencia = v.id
WHERE r.estado=4 ";
$estadoCancelado = $conn->query($sql2);

$sql3 = "SELECT v.id, r.fecha,r.hora,r.estado FROM videoconferencia v INNER JOIN registro_videoconferencia r on r.videoconferencia = v.id
WHERE r.estado=1 or r.estado=2 and v.id not in(SELECT v.id FROM videoconferencia v INNER JOIN registro_videoconferencia r on r.videoconferencia = v.id
WHERE r.estado=5 or r.estado=6 or r.estado=7 or r.estado=8 )";
$estadoIniciada = $conn->query($sql3);


$sql4 = "SELECT COUNT(nro_causa) as cantidad ,nro_causa FROM videoconferencia GROUP BY nro_causa ORDER BY cantidad DESC";
$causa = $conn->query($sql4);

$sql5 = "SELECT COUNT(unidad) as cantidad ,unidad FROM videoconferencia GROUP BY unidad ORDER BY cantidad DESC LIMIT 5";
$unidad = $conn->query($sql5);

$sql = "SELECT * FROM videoconferencia INNER JOIN relations ON relations.videoconferencia_id = videoconferencia.id INNER JOIN participante_videoconferencia on participante_videoconferencia.id = relations.participante_videoconferencia_id";
?>