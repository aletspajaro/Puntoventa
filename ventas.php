<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ventas</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Ventas</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">

    <div class="container-fluid">
   
         <div class="row mb-3">

            <div class="col-md-9">
             
                <div class="row">

                
                    <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O CODIGO DE DESCRIPCION DEL PRODUCTO -->
                     <div class="col-md-12 mb-3">

                        <div class="form-group mb-2">

                            <label class="col-form-label" for="iptCodigoVenta">
                                <i class="fas fa-barcode fs-6"></i>
                                <span class="small">Productos</span>
                         </label>

                         <input type="text"
                                class="form-control form-control-sm"
                                id="iptCodigoVenta"
                                placeholder="Ingrese el codigo de barras o el nombre del producto">
                            
                      </div>
                 </div>
                 <!-- ETIQUETA QUE MUESTRA LA SUMA TOTAL DE LOS PRODUCTOS AGREGADOS AL LISTADO -->
                    <div class="col-md-6 mb-3">
                        <h3>Total de Venta: S./ <span id="totalVenta">0.00</span></h3>
                     </div>
                     
                        <!--BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA-->
                        <div class="col-md-6 text-right">
                            <button class="btn btn-primary" id="btnIniciarVenta"> 
                                <i class="fas fa-shopping-cart"></i> Realiar Venta
                            </button>
                            <button class="btn btn-danger" id="btnVaciarListado"> 
                                <i class="fas fa-trash-alt"></i> Vaciar Listado
                            </button>
                        </div>

                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA-->
                        <div class="col-md-12">
                            <table id="lstProductosVenta" class="display nowrap table-striped w-100 shadow">
                                <thead class="bg-info text-left fs-6">
                                    <tr>
                                        <th>Item</th>
                                        <th>Codigo</th>
                                        <th>Id Categoria</th>
                                        <th>Categorias</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Total</th>
                                        <th class="text-center">Opciones</th>
                                        <th>Aplica Peso</th>
                                    </tr>
                                </thead>
                                <tbody class="small text-left fs-6">
                                </tbody>
                            </table>
                        </div>    
                        </div>
                </div>
                        <div class="col-md-3">
                        <div class="card shadow">
                            <h5 class="card-header py-1 bg-primary text-white text-center">
                             Total Venta: S-/ <span id="totalVentaRegistrado">0.00</span>
                             </h5>    

                                <div class="card-body p-2">

                        <!--SELECCIONAR TIPO DE DOCUMENTO-->
                             <div class="form-group mb-2">
                                    <label class="col-form-label" for="selCategoriaReg">
                                        <i class="fas fa-file-alt fs-6"></i>
                                        <span class="small">Documento</span><span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                        id="selDocumentoVenta">
                                        <option value="0">Seleccione Documento</option>
                                        <option value="1" selected="true">Boleta</option>
                                        <option value="0">Factura</option>
                                        <option value="0">Ticket</option>
                                    </select> 

                                    <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                        Debe seleccionar Documento
                                    </span>

                                </div>
                                <!--SELECCIONAR TIPO DE PAGO-->
                                <div class="form-group mb-2">
                                    <label class="col-form-label" for="selCategoriaReg">
                                        <i class="fas fa-money-bill-alt fs-6"></i>
                                        <span class="small">Tipo Pago</span><span class="text-danger">*</span>
                                    </label>

                                    <select class="form-select form-select-sm" arial-label=".form-select-sm example"
                                        id="selTipoPago">
                                         <option value="0">Seleccione Tipo Pago</option>
                                         <option value="1" selected="true"> Efectivo </option>
                                         <option value="2">Tarjeta  </option>
                                         <option value="3">Yape  </option>
                                         <option value="4">Plin </option>
                                    </select>

                                    <span id="validate_categoria" class="text-danger small fst-italic" style="display:none" >
                                        Debe ingresar tipo de pago
                                    </span>
                                </div>

                                <!--SERIE Y NUMERO DE BOLETA-->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4"> 
                                            <label for="iptNroSerie">Serie</label>

                                            <input type="text" min="0" name="iptEfectivo" id="iptNroSerie"
                                                class="form-control form-control-sm" placerholder="nro Serie" disabled>
                                                
                                        </div>

                                        <div class="col-md-8">
                                            <label for="iptNroVenta">Nro Venta</label>

                                            <input type="text" min="0" name="iptEfectivo" id="iptNroVenta"
                                                class="form-control form-control-sm" placeholder="Nro Venta" disabled>

                                        </div>
                                    </div>
                                </div>
                                <!--INPUT DE EFECTIVO ENTREGADO-->
                                <div class="form-group">
                                    <label for="iptEfectivoRecibido">Efectivo Recibido</label>
                                    <input type="number" min="0" name="iptEfectivo" id="iptEfectivoRecibido"
                                        class="form-control form-control-sm" placeholder="Cantidad de efectivo recibida">
                                </div>
                                <!-- INPUT CHECK DE EFECTIVO EXACTO-->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="chkEfectivoExacto">
                                    <label class="form-check-label" for="chkEfectivoExacto">
                                        Efectivo Exacto
                                    </label>
                                </div>

                                <!--MOSTRAR MONTO EFECTIVO ENTREGADO-->
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <h6 class="text-start fw-bold">Monto Efectivo:S./<span
                                                id="EfectivoEntregado">0.00</span></h6>
                                    </div>

                                    <div class="col-12">
                                        <h6 class="text-start text-danger fw-bold">Vuelto: S./<span id="Vuelto">0.00</span>
                                        </h6>
                                    </div>

                                </div>

                                <!--MOSTRAR EL SBTOTAL, IVA Y TOTAL DE LA VENTA-->
                                <div class="row">
                                    <div class="col-md-7">
                                        <span>SUBTOTAL</span>
                                    </div>
                                    <div class="col-md-5 text-right">
                                        S./<span class="" id="boleta_subtotal">0.00</span>
                                    </div>

                                    <div class="col-md-7">
                                        <span>IGV (18%)</span>
                                    </div>
                                    <div class="col-md-5 text-right">
                                        S./<span class="" id="boleta_igv">0.00</span>
                                    </div>
                                    <div class="col-md-7">
                                        S./<span>TOTAL</span>
                                    </div>
                                    <div class="col-md-5 text-right">
                                        S./<span class="" id="boleta_total">0.00</span>
                                    </div>

                                </div>




                                
                        </div>
                        </div>  
                        </div>   

                </div>
             </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<script>

    var table;
    var items = []; 
    $(document).ready(function(){



        table = $('#lstProductosVenta').DataTable({
            columnDefs:[{
                targets:0,
                visible: false 
            },
            {
                targets:3,
                visible: false
            },
            {
                targets:2,
                visible: false
            },
            {
                targets:6,
                visible: false
            },
            {
                targets:9,
                visible: false
            }
        ],
        "order": [
            [0, 'desc']
        ],
        "language":{
            "url":"//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"

        }

    });
})
</script>