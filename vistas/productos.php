 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0">Inventario / Productos</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                     <li class="breadcrumb-item active">Inventario / Productos</li>
                 </ol>
             </div><!-- /.col -->
         </div><!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <div class="content">
     <div class="container-fluid">

         <!-- row para criterios de busqueda -->
         <div class="row">

             <div class="col-lg-12">

                 <div class="card card-info">
                     <div class="card-header">
                         <h3 class="card-title">CRITERIOS DE BÚSQUEDA</h3>
                         <div class="card-tools">
                             <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                 <i class="fas fa-minus"></i>
                             </button>
                             <button type="button" class="btn btn-tool text-danger" id="btnLimpiarBusqueda">
                                 <i class="fas fa-times"></i>
                             </button>
                         </div> <!-- ./ end card-tools -->
                     </div> <!-- ./ end card-header -->
                     <div class="card-body">

                         <div class="row">

                            <div class="col-lg-12 d-lg-flex">

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input 
                                            type="text" 
                                            id="iptCodigoBarras"
                                            class="form-control"
                                            data-index="2">
                                    <label for="iptCodigoBarras">Código de Barras</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input 
                                            type="text" 
                                            id="iptCategoria"
                                            class="form-control"
                                            data-index="4">
                                    <label for="iptCategoria">Categoría</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input 
                                            type="text" 
                                            id="iptProducto"
                                            class="form-control"
                                            data-index="5">
                                    <label for="iptProducto">Producto</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input 
                                            type="text" 
                                            id="iptPrecioVentaDesde"
                                            class="form-control">
                                    <label for="iptPrecioVentaDesde">P. Venta Desde</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input 
                                            type="text" 
                                            id="iptPrecioVentaHasta"
                                            class="form-control">
                                    <label for="iptPrecioVentaHasta">P. Venta Hasta</label>
                                </div>
                            </div>

                         </div>
                     </div> <!-- ./ end card-body -->
                 </div>

             </div>
             
         </div>

         <!-- row para listado de productos/inventario -->
         <div class="row">
             <div class="col-lg-12">
                 <table id="tbl_productos" class="table table-striped w-100 shadow">
                     <thead class="bg-info">
                         <tr style="font-size: 15px;">
                             <th></th>
                             <th>id</th>
                             <th>Codigo</th>
                             <th>Id Categoria</th>
                             <th>Categoría</th>
                             <th>Producto</th>
                             <th>P. Compra</th>
                             <th>P. Venta</th>
                             <th>Utilidad</th>
                             <th>Stock</th>
                             <th>Min. Stock</th>
                             <th>Ventas</th>
                             <th>Fecha Creación</th>
                             <th>Fecha Actualización</th>
                             <th class="text-cetner">Opciones</th>
                         </tr>
                     </thead>
                     <tbody class="text-small">
                     </tbody>
                 </table>
             </div>
         </div>
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->

 <!--aumentar stock -->
 <div class="modal fade" id="mdlGestionarStock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Adicionar Stock</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" id="btnCerrarModalStock" >
                    
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="" class="form-label text-primary d-block">Código: <span id="stock_codigoProducto" class="text-secondary"></span>
                        </label>
                        <label for="" class="form-label text-primary d-block">Producto: <span id="stock_Producto" class="text-secondary"></span>
                        </label>
                        <label for="" class="form-label text-primary d-block">Stock: <span id="stock_Stock" class="text-secondary"></span>
                        </label>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-2">
                            <label  class="" for="iptStockSumar">
                                <i class="fas fa-plus-circle fs-6"></i><span class="small" id="titulo_modal_label">Agregar al stock</span>
                            </label>
                            <input type="number" min="0" class="form-control form-control-sm" id="iptStockSumar" placeholder="Ingrese la cantidad a agregar al stock">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label text-danger"> Nuevo Stock: <span id="stock_NuevoStock" class="text-secunday"></span>
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger mt-3 mx-2" style="width: 170px;" data-bs-dismiss="modal" id="btnCancelarRegistroStock"> Cancelar                        
                    </button>

                     <button type="button" class="btn btn-primary mt-3 mx-2" style="width: 170px;"  id="btnGuardarRegistroStock" >Guardar Registro                        
                    </button>
            </div>
             

        </div>
    </div>
     
 </div>

 <div class="modal fade" id="mdlGestionarProducto" role="dialog">
     <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gray py-1 align-items-center">
                <h5 class="modal-title">Agregar Producto</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                    
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label for="iptCodigoReg"><i class="fas fa-barcode fs-6"></i>
                                <span class="small">Código de Barras</span> <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" id="iptCodigoReg" name="iptCodigoReg" placeholder="código de barras" required>
                            <div class="invalid-feedback">Ingrese el codigo de barras</div>
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label for="iptCodigoReg"><i class="fas fa-dumpster fs-6"></i>
                                <span class="small">Categoria</span> <span class="text-danger">*</span>
                            </label>
                           <select name=""  class="form-select form-select-sm" aria-label=".form-select-sm example" id="selCategoriaReg"></select>
                             <div class="invalid-feedback">Debe seleccionar una categoria</div>
                        </div>
                    </div>

                  

                    <div class="col-12">
                        <div class="form-group mb-2">
                            <label for="iptDescripcionReg"><i class="fas fa-file-signature fs-6"></i>
                                <span class="small">Descripción Producto</span> <span class="text-danger">*</span>
                            </label>
                            <input type="text"  class="form-control form-control-sm" id="iptDescripcionReg" name="iptDescripcionReg" placeholder="Descripción Producto" required>
                            <div class="invalid-feedback">Ingrese la descripcion del producto</div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label for="iptPrecioCompraReg"><i class="fas fa-dollar-sign fs-6"></i>
                                <span class="small">Precio Compra</span> <span class="text-danger">*</span>
                            </label>
                            <input type="number" min="0" class="form-control form-control-sm" id="iptPrecioCompraReg" name="iptPrecioCompraReg" placeholder="Precio Compra" required>
                           <div class="invalid-feedback">Ingrese el precio de compra</div>
                        </div>
                    </div>

                 

                       <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label for="iptPrecioVentaReg"><i class="fas fa-dollar-sign fs-6"></i>
                                <span class="small">Precio Venta</span> <span class="text-danger">*</span>
                            </label>
                            <input type="number" min="0" class="form-control form-control-sm" id="iptPrecioVentaReg" name="iptPrecioVentaReg" placeholder="Precio Venta" required>
                             <div class="invalid-feedback">Ingrese el precio de venta</div>
                        </div>
                    </div>

                       <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label for="iptUtilidadReg"><i class="fas fa-dollar-sign fs-6"></i>
                                <span class="small">Utilidad</span> <span class="text-danger">*</span>
                            </label>
                            <input type="number" class="form-control form-control-sm" id="iptUtilidadReg" name="iptUtilidadReg" placeholder="Utilidad" disabled="">
                            
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label for="iptStockReg"><i class="fas fa-plus-circle fs-6"></i>
                                <span class="small">Stock</span> <span class="text-danger">*</span>
                            </label>
                            <input type="number" min="0" class="form-control form-control-sm" id="iptStockReg" name="iptStockReg" placeholder="Stock" required>
                            <div class="invalid-feedback">Ingrese la cantidad actual de productos</div>
                        </div>
                    </div>

                       <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label for="iptStockMinimoReg"><i class="fas fa-plus-circle fs-6"></i>
                                <span class="small">Stock Minimo</span> <span class="text-danger">*</span>
                            </label>
                            <input type="number" min="0" class="form-control form-control-sm" id="iptStockMinimoReg" name="iptStockMinimoReg" placeholder="Stock minimo" required>
                             <div class="invalid-feedback">Ingrese la cantidad minimo del producto</div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-danger mt-3 mx-2" style="width: 170px;" data-bs-dismiss="modal" id="btnCancelarRegistro"> Cancelar                        
                    </button>

                     <button type="button" class="btn btn-primary mt-3 mx-2" style="width: 170px;"  id="btnGuardarProducto" >Guardar Registro                        
                    </button>


                       
                </div>
            </form>
            </div>
        </div>
     </div>
 </div>

 <script>
    var accion;
      var table;
      var operacion_stock =0; // sumar o restar 1 suma 2 reta

    var Toast = Swal.mixin({
        toas:true,
        position:'top',
        showConfirmButton:false,
        timer:3000
    });





$(document).ready(function() {

  
  

    $.ajax({
        url: "ajax/productos.ajax.php",
        type: "POST",
        data: {
            'accion': 1
        }, //1: LISTAR PRODUCTOS
        dataType: 'json',
        success: function(respuesta) {
            console.log("respuesta", respuesta);
        }
    });

// carga combo categorias
$.ajax({
    url:'ajax/categorias.ajax.php',
    method:"POST",
    cache:false,
    contentType:false,
    processData:false,
    dataType:'json',
    success:function(respuesta) {
        var options ='<option selected value="0"> Seleccione una categoria </option>';

        for (let index =0; index <respuesta.length; index++) {
            options = options +'<option value =' 
            +respuesta[index][0] +'>'+respuesta[index][1] +'</option>'
        }
        $("#selCategoriaReg").html(options);
    }
});








    /*===================================================================*/
    // CARGA DEL LISTADO CON EL PLUGIN DATATABLE JS
    /*===================================================================*/
    table = $("#tbl_productos").DataTable({
        dom: 'Bfrtip',
        buttons: [{
                text: 'Agregar Producto',
                className: 'addNewRecord',
                action: function(e, dt, node, config) {
                    $("#mdlGestionarProducto").modal('show');
                    accion = 2;
                }
            },
            'excel', 'print', 'pageLength'
        ],
        pageLength: [5, 10, 15, 30, 50, 100],
        pageLength: 10,
        ajax: {
            url: "ajax/productos.ajax.php",
            dataSrc: '',
            type: "POST",
            data: {
                'accion': 1
            }, //1: LISTAR PRODUCTOS
        },
        responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [{
                targets: 0,
                orderable: false,
                className: 'control'
            },
            {
                targets: 1,
                visible: false
            },
            {
                targets: 3,
                visible: false
            },
            {
                targets: 9,
                createdCell: function(td, cellData, rowData, row, col){
                    if(parseFloat(rowData[9]) <= parseFloat(rowData[10])){
                        $(td).parent().css('background','#FF5733')
                    }
                }
            },
            {
                targets: 11,
                visible: false
            },
            {
                targets: 12,
                visible: false
            },
            {
                targets: 13,
                visible: false
            },
            {
                targets: 14,
                orderable: false,
                render: function(datqa, type, full, meta) {
                    return "<center>" +
                        "<span class='btnEditarProducto text-primary px-1' style='cursor:pointer;'>" +
                        "<i class='fas fa-pencil-alt fs-5'></i>" +
                        "</span>" +
                        "<span class='btnAumentarStock text-success px-1' style='cursor:pointer;'>" +
                        "<i class='fas fa-plus-circle fs-5'></i>" +
                        "</span>" +
                        "<span class='btnDisminuirStock text-warning px-1' style='cursor:pointer;'>" +
                        "<i class='fas fa-minus-circle fs-5'></i>" +
                        "</span>" +
                        "<span class='btnEliminarProducto text-danger px-1' style='cursor:pointer;'>" +
                        "<i class='fas fa-trash fs-5'></i>" +
                        "</span>" +
                        "</center>"
                }
            }

        ],
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
    });

    /*===================================================================*/
    // EVENTOS PARA CRITERIOS DE BUSQUEDA (CODIGO, CATEGORIA Y PRODUCTO)
    /*===================================================================*/
    $("#iptCodigoBarras").keyup(function(){
        table.column($(this).data('index')).search(this.value).draw();
    })

    $("#iptCategoria").keyup(function(){
        table.column($(this).data('index')).search(this.value).draw();
    })

    $("#iptProducto").keyup(function(){
        table.column($(this).data('index')).search(this.value).draw();
    })

    $("#iptPrecioVentaDesde, #iptPrecioVentaHasta").keyup(function(){
        table.draw();
    })

    $.fn.dataTable.ext.search.push(

        function(settings, data, dataIndex){

            var precioDesde = parseFloat($("#iptPrecioVentaDesde").val());
            var precioHasta = parseFloat($("#iptPrecioVentaHasta").val());

            var col_venta = parseFloat(data[7]);

            if((isNaN(precioDesde) && isNaN(precioHasta)) ||
                (isNaN(precioDesde) && col_venta <=  precioHasta) ||
                (precioDesde <= col_venta && isNaN(precioHasta)) ||
                (precioDesde <= col_venta && col_venta <= precioHasta)){
                    return true;
            }

            return false;
        }
    )

    $("#btnLimpiarBusqueda").on('click',function(){
        
        $("#iptCodigoBarras").val('')
        $("#iptCategoria").val('')
        $("#iptProducto").val('')
        $("#iptPrecioVentaDesde").val('')
        $("#iptPrecioVentaHasta").val('')

        table.search('').columns().search('').draw();
    })


    $("#btnCancelarRegistro, #btnCerrarModal").on('click',function(){

        $("#validate_codigo").css("display","none");
        $("#validate_descripcion").css("display","none");
        $("#validate_precio_compra").css("display","none");
        $("#validate_precio_venta").css("display","none");
        $("#validate_stock").css("display","none");
        $("#validate_stock_minimo").css("display","none");

         $("#iptCodigoReg").val("");
         $("#selCategoriaReg").val(0);
         $("#iptDescripcionReg").val("");
         $("#iptPrecioCompraReg").val("");
         $("#iptPrecioVentaReg").val("");
         $("#iptUtilidadReg").val("");
         $("#iptStockReg").val("");
         $("#iptStockMinimoReg").val("");
    })

    $("#iptPrecioCompraReg, #iptPrecioVentaReg").keyup(function(){
        calcularUtilidad();
    });

      $("#iptPrecioCompraReg, #iptPrecioVentaReg").change(function(){
        calcularUtilidad();
    });


      /*aumentar stock*/

      $('#tbl_productos tbody').on('click','.btnAumentarStock',function() {
        operacion_stock = 1;
        $("#mdlGestionarStock").modal('show');
        $("#titulo_modal_stock").html('Aumentar Stock');
         $("#titulo_modal_label").html('Aumentar al Stock');
         $("#iptStockSumar").attr("placeholder","Ingrese la cantidad para agregar el stock");

         var data = table.row($(this).parents('tr')).data();
         $("#stock_codigoProducto").html(data[2]);
         $("#stock_Producto").html(data[5]);
         $("#stock_Stock").html(data[9]);

         $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));
      });



       /*aumentar stock*/

      $('#tbl_productos tbody').on('click','.btnDisminuirStock',function() {
        operacion_stock = 2;
        $("#mdlGestionarStock").modal('show');
        $("#titulo_modal_stock").html('Disminuir Stock');
         $("#titulo_modal_label").html('Disminuir al Stock');
         $("#iptStockSumar").attr("placeholder","Ingrese la cantidad para Disminuir el stock");

         var data = table.row($(this).parents('tr')).data();
         $("#stock_codigoProducto").html(data[2]);
         $("#stock_Producto").html(data[5]);
         $("#stock_Stock").html(data[9]);

         $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));
      });





      /*limpiar el input de ingreso al cerrar la ventana modal*/
      $("#btnCancelarRegistroStock, #btnCerrarModalStock").on('click',function(){
        $("#iptStockSumar").val("");
      })

      $("#iptStockSumar").keyup(function(){
        if(operacion_stock == 1 ) {
            if($("#iptStockSumar").val() != "" && $("#iptStockSumar").val()>0) {
                var stockActual = parseFloat($("#stock_Stock").html());
                 var cantidadAgregar = parseFloat($("#iptStockSumar").val());
                 $("#stock_NuevoStock").html(stockActual +cantidadAgregar);
            } else {
                Toast.fire({
                    icon:'warning',
                    title:'Ingrese un valor mayor a 0'
                });
                $("#iptStockSumar").val("");
                $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));
            }
        } else {
             if($("#iptStockSumar").val() != "" && $("#iptStockSumar").val()>0) {
                 var stockActual = parseFloat($("#stock_Stock").html());
                 var cantidadAgregar = parseFloat($("#iptStockSumar").val());
                 $("#stock_NuevoStock").html(stockActual - cantidadAgregar);
                 if(parseInt($("#stock_NuevoStock").html())<0) {
                    Toast.fire({
                    icon:'warning',
                    title:'la cantidad a disminir no puede ser mayor al stock actual (nuevo stock <0)'
                });
                     $("#iptStockSumar").val("");
                      $("#iptStockSumar").focus();
                        $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));
                 }
             } else {
                Toast.fire({
                    icon:'warning',
                    title:'Ingrese un valor mayor a 0'
                });
             }
        }
      })
      /*registro de aumento o disminuir stock*/
      $("#btnGuardarRegistroStock").on('click',function(){
         if($("#iptStockSumar").val() != "" && $("#iptStockSumar").val()>0) {
            var nuevoStock = parseFloat($("#stock_NuevoStock").html()),
             codigo_producto = $("#stock_codigoProducto").html();

             var datos = new FormData();
             datos.append('accion',3);
             datos.append('nuevoStock',nuevoStock);
             datos.append('codigo_producto',codigo_producto);

             $.ajax({
                url:'ajax/productos.ajax.php',
                method:'POST',
                data:datos,
                processData:false,
                contentType:false,
                dataType:'json',
                success:function(respuesta) {
                    $("#stock_NuevoStock").html();
                    $("#iptStockSumar").val("");
                    $("#mdlGestionarStock").modal('hide');
                    table.ajax.reload();
                    Swal.fire({
                        position:'center',
                        icon:'success',
                        title:respuesta,
                        showConfirm:false,
                        timer:250
                    })
                }
             });

         } else {
             Toast.fire({
                    icon:'error',
                    title:'El stock no se agrego'
                });
         }
      })


})

function calcularUtilidad() {
    var iptPrecioCompraReg = $("#iptPrecioCompraReg").val();
     var iptPrecioVentaReg = $("#iptPrecioVentaReg").val();

     var utilidad  = iptPrecioVentaReg -iptPrecioCompraReg;

     $("#iptUtilidadReg").val(utilidad.toFixed(2));
}

document.getElementById("btnGuardarProducto").addEventListener("click", function(){
    //alert('ok');
    var forms = document.getElementsByClassName('needs-validation');
    var valitation = Array.prototype.filter.call(forms,function(form){
        if(form.checkValidity()===true) {
           console.log("guardar");
            Swal.fire({
        title:'Está seguro de registrar el Producto',
        icon:'warning',
        showCancelButton:true,
        confirmButtonColor:'#3085d6',
        cancelButtonColor:'#d33',
        confirmButtonText:'si, deseo registrar',
        cancelButtonText:'Cancelar',
    }).then((result)=>{
        if(result.isConfirmed) {
            var datos = new FormData();

            datos.append("accion",accion);
          
            datos.append("codigo_producto",$("#iptCodigoReg").val());
            datos.append("id_categoria_producto",$("#selCategoriaReg").val());
            datos.append("descripcion_producto",$("#iptDescripcionReg").val());
            datos.append("precio_compra_producto",$("#iptPrecioCompraReg").val());
            datos.append("precio_venta_producto",$("#iptPrecioVentaDesde").val());
            datos.append("utilidad",$("#iptUtilidadReg").val());
            datos.append("stock_producto",$("#iptStockReg").val());
            datos.append("minimo_stock_producto",$("#iptStockMinimoReg").val());
            datos.append("ventas_producto",0);
            $.ajax({
                url:'ajax/productos.ajax.php',
                method:'POST',
                data:datos,
                cache:false,
                contentType:false,
                processData:false,
                dataType:'json',
                success: function(respuesta) {
                    if(respuesta=='ok') {
                        Toast.fire({
                            icon:'success',
                            title:'ep Producto se registro exitosamente'
                        });
                        table.ajax.reload();
                        $("#mdlGestionarProducto").modal('hide');

                        $("#iptCodigoReg").val("");
                        $("#selCategoriaReg").val(0);
                        $("#iptDescripcionReg").val("");
                        $("#iptPrecioCompraReg").val("");
                        $("#iptPrecioVentaDesde").val("");
                        $("#iptUtilidadReg").val("");
                        $("#iptStockReg").val("");
                        $("#iptStockMinimoReg").val("");
                    } else {
                        Toast.fire({
                            icon:'error',
                            title:'El producto no se pudo agregar'
                        });
                    }
                }
            });
        }
    });
        }else {
          console.log("no se puede");
        }
        form.classList.add('was-validated');
    });
});



document.getElementById("btnCancelarRegistro").addEventListener("click",function(){
    $(".needs-validation").removeClass("was-validated");
})




 </script>