<?php
session_start();
require_once "../php/conexion.php";
$conexion = conexion();


?>
<div class="row">
    <div class="col-sm-12">
    <div class="table-responsive">
        <table class="table table-hover table-condensed table-bordered display responsive nowrap" id="TD">
            <thead>
                <tr>
                    <td align="center">Id</td>
                    <td align="center">Nombre</td>
                    <td align="center">Tel</td>
                    <td align="center">Correo</td>
                    <td align="center">Modificar</td>
                    <td align="center">Eliminar</td>
                </tr>
            </thead>
            <tbody>
                <?php

                if (isset($_SESSION['consulta'])) {
                    if ($_SESSION['consulta'] > 0) {
                        $idp = $_SESSION['consulta'];
                        $sql = "SELECT id_cliente,nombre_cliente,tel_cliente,correo
						from clientes where id_cliente='$idp'";
                    } else {
                        $sql = "SELECT id_cliente,nombre_cliente,tel_cliente,correo
						from clientes";
                    }
                } else {
                    $sql = "SELECT id_cliente,nombre_cliente,tel_cliente,correo
                    from clientes";
                }

                $result = mysqli_query($conexion, $sql);
                while ($ver = mysqli_fetch_row($result)) {


                    $datos = $ver[0] . "||" .
                        $ver[1] . "||" .
                        $ver[2] . "||" .
                        $ver[3];
                ?>


                    <tr>
                        <td align="center"><?php echo $ver[0] ?></td>
                        <td align="center"><?php echo $ver[1] ?></td>
                        <td align="center"><?php echo $ver[2] ?></td>
                        <td align="center"><?php echo $ver[3] ?></td>
                        <td align="center">
                            <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">

                            </button>
                        </td>
                        <td align="center">
                            <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $ver[0] ?>')">

                            </button>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#TD').DataTable({e,
            language: {
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ning??n dato disponible en esta tabla",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "infoThousands": ",",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "??ltimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad",
                    "collection": "Colecci??n",
                    "colvisRestore": "Restaurar visibilidad",
                    "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                    "copySuccess": {
                        "1": "Copiada 1 fila al portapapeles",
                        "_": "Copiadas %d fila al portapapeles"
                    },
                    "copyTitle": "Copiar al portapapeles",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "-1": "Mostrar todas las filas",
                        "1": "Mostrar 1 fila",
                        "_": "Mostrar %d filas"
                    },
                    "pdf": "PDF",
                    "print": "Imprimir"
                },
                "autoFill": {
                    "cancel": "Cancelar",
                    "fill": "Rellene todas las celdas con <i>%d<\/i>",
                    "fillHorizontal": "Rellenar celdas horizontalmente",
                    "fillVertical": "Rellenar celdas verticalmentemente"
                },
                "decimal": ",",
                "searchBuilder": {
                    "add": "A??adir condici??n",
                    "button": {
                        "0": "Constructor de b??squeda",
                        "_": "Constructor de b??squeda (%d)"
                    },
                    "clearAll": "Borrar todo",
                    "condition": "Condici??n",
                    "conditions": {
                        "date": {
                            "after": "Despues",
                            "before": "Antes",
                            "between": "Entre",
                            "empty": "Vac??o",
                            "equals": "Igual a",
                            "not": "No",
                            "notBetween": "No entre",
                            "notEmpty": "No Vacio"
                        },
                        "moment": {
                            "after": "Despues",
                            "before": "Antes",
                            "between": "Entre",
                            "empty": "Vac??o",
                            "equals": "Igual a",
                            "not": "No",
                            "notBetween": "No entre",
                            "notEmpty": "No vacio"
                        },
                        "number": {
                            "between": "Entre",
                            "empty": "Vacio",
                            "equals": "Igual a",
                            "gt": "Mayor a",
                            "gte": "Mayor o igual a",
                            "lt": "Menor que",
                            "lte": "Menor o igual que",
                            "not": "No",
                            "notBetween": "No entre",
                            "notEmpty": "No vac??o"
                        },
                        "string": {
                            "contains": "Contiene",
                            "empty": "Vac??o",
                            "endsWith": "Termina en",
                            "equals": "Igual a",
                            "not": "No",
                            "notEmpty": "No Vacio",
                            "startsWith": "Empieza con"
                        }
                    },
                    "data": "Data",
                    "deleteTitle": "Eliminar regla de filtrado",
                    "leftTitle": "Criterios anulados",
                    "logicAnd": "Y",
                    "logicOr": "O",
                    "rightTitle": "Criterios de sangr??a",
                    "title": {
                        "0": "Constructor de b??squeda",
                        "_": "Constructor de b??squeda (%d)"
                    },
                    "value": "Valor"
                },
                "searchPanes": {
                    "clearMessage": "Borrar todo",
                    "collapse": {
                        "0": "Paneles de b??squeda",
                        "_": "Paneles de b??squeda (%d)"
                    },
                    "count": "{total}",
                    "countFiltered": "{shown} ({total})",
                    "emptyPanes": "Sin paneles de b??squeda",
                    "loadMessage": "Cargando paneles de b??squeda",
                    "title": "Filtros Activos - %d"
                },
                "select": {
                    "1": "%d fila seleccionada",
                    "_": "%d filas seleccionadas",
                    "cells": {
                        "1": "1 celda seleccionada",
                        "_": "$d celdas seleccionadas"
                    },
                    "columns": {
                        "1": "1 columna seleccionada",
                        "_": "%d columnas seleccionadas"
                    }
                },
                "thousands": "."
            }
        });
    });
</script>