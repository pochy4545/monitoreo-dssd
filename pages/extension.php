<?php

namespace Monitor;

require '../includes/config.php';
require '../includes/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'layout/defaultHead.php'; ?>

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <?php include 'layout/navbar.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tareas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Videoconferencias
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <table class="table table-bordered" width="100%" id="tablaArchivedTasks"
                                       cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Numero de unidad</th>
                                        <th>Estado</th>
                                        <th>Tipo</th>
                                        <th>Numero De causa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($row = $resultVideoconferenicas->fetch_assoc()) {
                                        echo '<tr>';
                                        echo '<td>' . $row["id"]. '</td>';
                                        echo '<td>' . $row["fecha"]. '</td>';
                                        echo '<td>' . $row["hora"] . '</td>';
                                        echo '<td>' . $row["unidad"]. '</td>';
                                        echo '<td>' . $row["estado"]. '</td>';
                                        echo '<td>' . $row["tipo"] . '</td>';
                                        echo '<td>' . $row["nro_causa"] . '</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                    </tbody>
                                    <P>Cantidad: <?php echo mysqli_num_rows($resultVideoconferenicas);?></P>
                                </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Videoconferencias en finalizado
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <table class="table table-bordered" width="100%" id="tablaArchivedTasks"
                                       cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Fecha Finalizacion</th>
                                        <th>Hora fin</th>
                                        <th>Estado</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($row = $estadoFinalizado ->fetch_assoc()) {
                                        echo '<tr>';
                                        echo '<td>' . $row["id"]. '</td>';
                                        echo '<td>' . $row["fecha"]. '</td>';
                                        echo '<td>' . $row["hora"] . '</td>';
                                        echo '<td>' . $row["estado"]. '</td>';
                                        echo '</tr>';
                                    }?>
                                    </tbody>
                                    <P>Cantidad: <?php echo mysqli_num_rows($estadoFinalizado);?></P>
                                </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Videoconferencias en ejecucion
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <table class="table table-bordered" width="100%" id="tablaArchivedTasks"
                                       cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Fecha de Inicio</th>
                                        <th>Hora Inicio</th>
                                        <th>Estado</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($row = $estadoIniciada ->fetch_assoc()) {
                                        echo '<tr>';
                                        echo '<td>' . $row["id"]. '</td>';
                                        echo '<td>' . $row["fecha"]. '</td>';
                                        echo '<td>' . $row["hora"] . '</td>';
                                        echo '<td>' . $row["estado"]. '</td>';
                                        echo '</tr>';
                                    }?>
                                    </tbody>
                                    <P>Cantidad: <?php echo mysqli_num_rows($estadoIniciada);?></P>
                                </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Videoconferencias canceladas
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <table class="table table-bordered" width="100%" id="tablaArchivedTasks"
                                       cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Fecha de cancelacion</th>
                                        <th>Hora Fin</th>
                                        <th>Estado</th>
                                    </tr>
                                    </thead>
                                    <tbody><?php 
                                    while ($row = $estadoCancelado ->fetch_assoc()) {
                                        echo '<tr>';
                                        echo '<td>' . $row["id"]. '</td>';
                                        echo '<td>' . $row["fecha"]. '</td>';
                                        echo '<td>' . $row["hora"] . '</td>';
                                        echo '<td>' . $row["estado"]. '</td>';
                                        echo '</tr>';
                                    }?>
                                    </tbody>
                                    <P>Cantidad: <?php echo mysqli_num_rows($estadoCancelado);?></P>
                                </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Cantidad de videconferencias por causa
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <table class="table table-bordered" width="100%" id="tablaArchivedTasks"
                                       cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Numero de causa</th>
                                        <th>Cantidad</th>
                                    </tr>
                                    </thead>
                                    <tbody><?php
                                    while ($row = $causa ->fetch_assoc()) {
                                        echo '<tr>';
                                        echo '<td>' . $row["nro_causa"]. '</td>';
                                        echo '<td>' . $row["cantidad"]. '</td>';
                                        echo '</tr>';
                                    }?>
                                    </tbody>
                                    <P>Cantidad: <?php echo mysqli_num_rows($causa);?></P>
                                </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Instancias de procesos
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <table class="table table-bordered" width="100%" id="tablaArchivedTasks"
                                       cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id </th>
                                        <th>Fecha Inicio</th>
                                        <th>Fecha fin</th>
                                        <th>Tiempo total en Horas</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $response = Cases::getArchivedCases();
                                    $cases = $response['data'];
                                    $tiempo = 0;
                                    foreach ($cases as $case) {
                                        $tiempo +=  (((strtotime($case->end_date) -  strtotime($case->start))/60)/60);  
                                        echo '<tr>';
                                        echo '<td>' . $case->id . '</td>';
                                        echo '<td>' . $case->start . '</td>';
                                        echo '<td>' . $case->end_date . '</td>';
                                        echo '<td>' . (((strtotime($case->end_date) -  strtotime($case->start))/60)/60) . '</td>';
                                    }
                                    ?>
                                    </tbody>
                                    <p>Promedio <?php echo ($tiempo / sizeof($cases)) ?> </p>
                                </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Unidades con mayor cantidad de videoconferencias
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <table class="table table-bordered" width="100%" id="tablaArchivedTasks"
                                       cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Numero de unidad</th>
                                        <th>Cantidad</th>
                                    </tr>
                                    </thead>
                                    <tbody><?php
                                    while ($row = $unidad ->fetch_assoc()) {
                                        echo '<tr>';
                                        echo '<td>' . $row["unidad"]. '</td>';
                                        echo '<td>' . $row["cantidad"]. '</td>';
                                        echo '</tr>';
                                    }?>
                                    </tbody>
                                    <P>Cantidad: <?php echo mysqli_num_rows($unidad);?></P>
                                </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
    </div>
    <!-- /#wrapper -->
    <?php include 'layout/defaultFooter.php'; ?>

</body>

</html>
