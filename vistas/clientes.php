<!-- CONTENT-HEADER -->
<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Administrar Clientes</h1>
            </div>

            <div class="col-sm-6">
                
                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

                    <li class="breadcrumb-item active">Gestor Clientes</li>                       
                </ol>

            </div>
        </div>  
    </div>  

</section>


<!-- CONTENT -->
<section class="content">
    
    <div class="container-fluid">   

        <div class="btn-agregar-cliente btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-cliente" data-dismiss="modal"> <i class="fas fa-plus-square"></i> Agregar Cliente</button>
        </div>

        <table id="tablaClientes" class="table table-striped table-bordered nowrap table-responsive" style="width:100%;">
            <thead class="bg-info">
                <tr>
                    <td style="width:5%;">Id</td>
                    <td>Cliente</td>
                  
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                    <td>Tipo Documento</td>
                    <td>Número</td>
                    <td>Dirección</td>
                    <td>Teléfono</td>
                    <td>Correo</td>
                    <td>Estado</td>

                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>    

    </div>  

</section>

<!-- VENTANA MODAL PARA REGISTRO Y ACTUALIZACION -->
<div class="modal fade" id="modal-gestionar-cliente">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <!-- ============================================================
            =MODAL HEADER
            ===============================================================-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Gestionar Cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- ============================================================
            =MODAL BODY
            ===============================================================-->
            <div class="modal-body">
               <div class="row">
                   <div class="col-sm-4">
                        <div class="form-group">
                            <input type="hidden" id ="idCliente" name ="cliente" value ="">
                            <label for="txtCategoria">Nombre</label>
                            <input type="text" class="form-control" name="cliente" id="txtNombre" placeholder="Ingrese Nombre">
                        </div>
                   </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                           
                            <label for="txtApellido">Apellido Paterno</label>
                            <input type="text" class="form-control" name="cliente" id="txtApellido1" placeholder="Apellido Paterno">
                        </div>
                   </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                           
                            <label for="txtApellido2">Apellido Materno</label>
                            <input type="text" class="form-control" name="cliente" id="txtApellido2" placeholder="Apellido Materno">
                        </div>
                   </div>
                   <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtPesos">Tipo Documento</label>
                            <select name="estado" id="ddlDocumento" class="form-control select2bs4">
                                <option value="CEDULA">CEDULA</option>
                                <option value="PASAPORTE">PASAPORTE</option>
                                <option value="NIT">NIT</option>
                            </select>
                        </div>
                   </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                           
                            <label for="txtDocumento">Documento</label>
                            <input type="text" class="form-control" name="documento" id="txtDocumento" placeholder="No documento">
                        </div>
                   </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                           
                            <label for="txtDir">Direccion</label>
                            <input type="text" class="form-control" name="direccion" id="txtDir" placeholder="direccion">
                        </div>
                   </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                           
                            <label for="txtTeléfono">Teléfono</label>
                            <input type="number" class="form-control" name="telefono" id="txtTelefono" placeholder="No telefono">
                        </div>
                   </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                           
                            <label for="txtTCorreo">Correo</label>
                            <input type="email" class="form-control" name="correo" id="txtCorreo" placeholder="Email">
                        </div>
                   </div>
                   <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ddlEstado">Estado</label>
                            <select name="estado" id="ddlEstado" class="form-control select2bs4">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                   </div>
               </div>
            </div>
            <!-- ============================================================
            =MODAL FOOTER
            ===============================================================-->
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
            </div>

        </div>

    </div>

</div>
<!-- ./ VENTANA MODAL PARA REGISTRO Y ACTUALIZACION -->


<script>

    $(document).ready(function(){

        var accion = "";

        var Toast = Swal.mixin({
                                  toast: true,
                                  position: 'top-end',
                                  showConfirmButton: false,
                                  timer: 3000
                                });

        var table = $("#tablaClientes").DataTable({
            "ajax":{
                "url": "ajax/clientes.ajax.php",
                "type":"POST",
                "dataSrc":""
            },              
            "columnDefs":[ 
                    {
                        "targets": 9,
                        "sortable": false,
                        "render": function (data, type, full, meta){

                            if(data == 1){
                                return "<div class='bg-primary color-palette text-center'>ACTIVO</div> " 
                            }else{
                                return "<div class='bg-danger color-palette text-center'>INACTIVO</div> " 
                            }
                            
                        }
                    },
                    {
                        "targets": 10,
                        "sortable": false,
                        "render": function (data, type, full, meta){
                            return "<center>" +
                                        "<button type='button' class='btn btn-primary btn-sm btnEditar' data-toggle='modal' data-target='#modal-gestionar-categoria'> " +
                                          "<i class='fas fa-pencil-alt'></i> " +
                                        "</button> " + 
                                        "<button type='button' class='btn btn-danger btn-sm btnEliminar'> " +
                                          "<i class='fas fa-trash'> </i> " +
                                        "</button>" +
                                    "</center>";
                        }
                    }
                ],
            "columns":[
                    {"data": "id_cliente"},
                    {"data": "nombre"},
                    {"data": "apellido_paterno"},
                    {"data": "apellido_materno"},
                    {"data": "tipo_documento"},
                    {"data": "documento"},
                    {"data": "direccion"},
                    {"data": "telefono"},
                    {"data": "correo"},
                    {"data": "estado"},
                   
                    {"data": "acciones"}
                ],

            "language":{
                    "processing": "Procesando...",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados",
                    "emptyTable": "Ningún dato disponible en esta tabla",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "search": "Buscar:",
                    "infoThousands": ",",
                    "loadingRecords": "Cargando...",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
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
                        "collection": "Colección",
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
                        "add": "Añadir condición",
                        "button": {
                            "0": "Constructor de búsqueda",
                            "_": "Constructor de búsqueda (%d)"
                        },
                        "clearAll": "Borrar todo",
                        "condition": "Condición",
                        "conditions": {
                            "date": {
                                "after": "Despues",
                                "before": "Antes",
                                "between": "Entre",
                                "empty": "Vacío",
                                "equals": "Igual a",
                                "notBetween": "No entre",
                                "notEmpty": "No Vacio",
                                "not": "Diferente de"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vacio",
                                "equals": "Igual a",
                                "gt": "Mayor a",
                                "gte": "Mayor o igual a",
                                "lt": "Menor que",
                                "lte": "Menor o igual que",
                                "notBetween": "No entre",
                                "notEmpty": "No vacío",
                                "not": "Diferente de"
                            },
                            "string": {
                                "contains": "Contiene",
                                "empty": "Vacío",
                                "endsWith": "Termina en",
                                "equals": "Igual a",
                                "notEmpty": "No Vacio",
                                "startsWith": "Empieza con",
                                "not": "Diferente de"
                            },
                            "array": {
                                "not": "Diferente de",
                                "equals": "Igual",
                                "empty": "Vacío",
                                "contains": "Contiene",
                                "notEmpty": "No Vacío",
                                "without": "Sin"
                            }
                        },
                        "data": "Data",
                        "deleteTitle": "Eliminar regla de filtrado",
                        "leftTitle": "Criterios anulados",
                        "logicAnd": "Y",
                        "logicOr": "O",
                        "rightTitle": "Criterios de sangría",
                        "title": {
                            "0": "Constructor de búsqueda",
                            "_": "Constructor de búsqueda (%d)"
                        },
                        "value": "Valor"
                    },
                    "searchPanes": {
                        "clearMessage": "Borrar todo",
                        "collapse": {
                            "0": "Paneles de búsqueda",
                            "_": "Paneles de búsqueda (%d)"
                        },
                        "count": "{total}",
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Sin paneles de búsqueda",
                        "loadMessage": "Cargando paneles de búsqueda",
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
                    "thousands": ".",
                    "datetime": {
                        "previous": "Anterior",
                        "next": "Proximo",
                        "hours": "Horas",
                        "minutes": "Minutos",
                        "seconds": "Segundos",
                        "unknown": "-",
                        "amPm": [
                            "am",
                            "pm"
                        ]
                    },
                    "editor": {
                        "close": "Cerrar",
                        "create": {
                            "button": "Nuevo",
                            "title": "Crear Nuevo Registro",
                            "submit": "Crear"
                        },
                        "edit": {
                            "button": "Editar",
                            "title": "Editar Registro",
                            "submit": "Actualizar"
                        },
                        "remove": {
                            "button": "Eliminar",
                            "title": "Eliminar Registro",
                            "submit": "Eliminar",
                            "confirm": {
                                "_": "¿Está seguro que desea eliminar %d filas?",
                                "1": "¿Está seguro que desea eliminar 1 fila?"
                            }
                        },
                        "error": {
                            "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                        },
                        "multi": {
                            "title": "Múltiples Valores",
                            "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                            "restore": "Deshacer Cambios",
                            "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                        }
                    },
                    "info": "Mostrando de _START_ a _END_ de _TOTAL_ entradas"
            },
        });

        $(".btn-agregar-cliente").on('click',function(){
            accion = "registrar";
        });

        $('#tablaClientes tbody').on('click','.btnEliminar',function(){
            var data = table.row($(this).parents('tr')).data();
            
            var id = data["id_categoria"];

            var datos = new FormData();
            datos.append('accion',"eliminar")
            datos.append('id',id);

            swal.fire({

                title: "¡CONFIRMACION!",
                text: "Seguro que desea eliminar la categoria?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Sí, Eliminar",
                cancelButtonText: "Cancelar"

            }).then(resultado => {

                if(resultado.value)  {                    

                    //LLAMADO AJAX
                    $.ajax({
                        url: "ajax/categorias.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta){

                            console.log(respuesta);
                        
                            table.ajax.reload( null, false );                            

                            Toast.fire({
                                icon: 'success',
                                title: respuesta
                            });
                        
                        }
                    })
                }
                else{
                    // alert("no se modifico la categoria");
                }

            })
        })

        $('#tablaCategorias tbody').on('click','.btnEditar',function(){
            
            var data = table.row($(this).parents('tr')).data();
            accion = "actualizar";

            $("#idCategoria").val(data["id_categoria"])
            $("#txtCategoria").val(data["nombre_categoria"]);
            $("#ddlPeso").val(data["aplica_peso"]);
            $("#txtFecha").val(data["fecha_creacion_categoria"]);
            $("#ddlEstado").val(data["estado"]);
            

        })

        // GUARDAR LA INFORMACION DE CATEGORIA DESDE LA VENTANA MODAL
        $("#btnGuardar").on('click',function(){
           


            var id = $("#idCliente").val(),
                nombre = $("#txtNombre").val(),
                apellido1 = $("#txtApellido1").val(),
                apellido2 = $("#txtApellido2").val(),
                tipo_doc = $("#ddlDocumento").val(),
                 documento = $("#txtDocumento").val(),
                 direccion = $("#txtDir").val(),
                 telefono = $("#txtTelefono").val(),
                 correo = $("#txtCorreo").val(),



                estado = $("#ddlEstado").val(),
                

                fecha = new Date().toISOString().replace(/T/, ' ').replace(/\..+/, '');
            
            var datos = new FormData();

            datos.append('id',id)
            datos.append('nombre',nombre)
            datos.append('apellido1',apellido1)
            datos.append('apellido2',apellido2)
            datos.append('tipo_doc',tipo_doc)
            datos.append('documento',documento)
            datos.append('direccion',direccion)
            datos.append('telefono',telefono)
            datos.append('correo',correo)
            datos.append('estado',estado);
            datos.append('fecha',fecha);
            
            
            datos.append('accion',accion);

            swal.fire({
                title: "¡CONFIRMAR!",
                text: "¿Está seguro que desea registrar el cliente?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Si, deseo registrar",
                cancelButtonText: "Cancelar"
            
            }).then(resultado => {

                if(resultado.value)  {
            
                    

                    $.ajax({
                        url: "ajax/clientes.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta){
                            console.log(respuesta);

                            $("#modal-gestionar-cliente").modal('hide');
                            
                            table.ajax.reload(null,false);

                            $("#idCategoria").val("");
                            $("#txtCategoria").val("");
                            $("#ddlPeso").val("");
                            $("#ddlEstado").val([1]);

                            Toast.fire({
                                icon: 'success',
                                title: respuesta
                            })

                        }
                    });
                }
                else{
            
                }

            })

            

            
        })

    
    })

    
    
    

</script>