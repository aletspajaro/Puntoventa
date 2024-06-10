<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class=""></div>
            <col-md-6>
                <h4 class="m-0">Categorias</h4>
            </col-md-6>
            <div class="col-md-6">
                <ol class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item">Productos</li>
                    <li class="breadcrumb-item active">Categorias</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content pb-2">
    <div class="row m-0">
        <div class="col-md-8">
            <div class="card card-info card-outline shadow">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-list"></i> listado de categorias</i></h3>
                </div>
                <div class="card-body">
                    <table id="lstCategorias" class="display nowrap table-striped w-100 shadow rounded">
                        <thead class="bg-info text-left">
                            <th>id</th>
                            <th>Categoria</th>
                            <th>Medida</th>
                            <th>F. Creacion</th>
                            <th>F. Actualizacion</th>
                            <th>Opciones</th>
                        </thead>
                        <tbody class="small text left"></tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-info card-outline shadow">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-edit"></i>Registro de categorias</i></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        &(document).ready(function() {
            var tableCategorias = $('#lstCategorias').DataTable({
                dom: 'Bfrtip',
                butoons:[
                    'excel','print','pageLength',
                ],
                "order": [[0, 'desc']],
                lengthMenu: [0, 10, 15, 20, 50],
                "pageLength": 15,
                "language":{
                    "url":"//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }
            });
    })
</script> 

