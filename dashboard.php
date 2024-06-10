<!-- Content Header (Page header) -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tablero Principal</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Tablero Principal</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
    
        <!-- row Tarjetas Informativas-->
        <div class="row">

            <div class="col-lg-2">
                <!-- small box-->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4 id="totalProductos">1000</h4>

                        <p>Productos registrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- TARJETA TOTAL COMPRAS -->
            <div class="col-lg-2">
                <!-- small box-->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4 id="totalCompras">S./ 2,500.00</h4>

                        <p>Total Compras</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <!-- TARJETA TOTAL VENTAS -->
            <div class="col-lg-2">
                <!-- small box-->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4 id="totalVentas">S./ 1,200.00</h4>

                        <p>Total Ventas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-cart"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- TARJETA TOTAL GANANCIAS-->
            <div class="col-lg-2">
                <!-- small box-->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4 id="totalGanancias">S./ 470.00</h4>

                        <p>Total Ganancias</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-pie"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- TARJETA TOTAL GANANCIAS-->
            <div class="col-lg-2">
                <!-- small box-->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4 id="totalProductosMinStock">15</h4>

                        <p>Productos poco stock</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-remove-circle"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- TARJETA TOTAL VENTAS DIA ACTUAL -->
            <div class="col-lg-2">
                <!-- small box-->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4 id="totalVentasHoy">S./ 250.00</h4>

                        <p>Ventas del dia</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-calendar"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        
        
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart" style="min-height: 250px; height: 300px; max-height: 350px; width: 100%;">

                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
    $(document).ready(function(){

        /* -----------------------------------------------------------------
        SOLICITUD AJAX TARJETAS INFORMATIVAS
        -------------------------------------------------------------------*/
        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: 'POST',
            dataType: 'json',
            success:function(respuesta){
                console.log("respuesta",respuesta);
                $("#totalProductos").html(respuesta[0]['totalProductos']);
                $("#totalCompras").html('S./' + respuesta[0]['totalCompras'].replace(/\d(?=(\d{3})+\.)/g,"$&,"))
                $("#totalVentas").html('S./' + respuesta[0]['totalVentas'].replace(/\d(?=(\d{3})+\.)/g,"$&,"))
                $("#totalGanancias").html('S./' + respuesta[0]['ganancias'].replace(/\d(?=(\d{3})+\.)/g,"$&,"))
                $("#totalProductosMinStock").html(respuesta[0]['productoPocoStock'])
                $("#totalVentasHoy").html('S./' + respuesta[0]['ventasHoy'].replace(/\d(?=(\d{3})+\.)/g,"$&,"))
            }
        });

        setInterval(() => {
            $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: 'POST',
            dataType: 'json',
            success:function(respuesta){
                console.log("respuesta",respuesta);
                $("#totalProductos").html(respuesta[0]['totalProductos']);
                $("#totalCompras").html('S./' + respuesta[0]['totalCompras'].replace(/\d(?=(\d{3})+\.)/g,"$&,"))
                $("#totalVentas").html('S./' + respuesta[0]['totalVentas'].replace(/\d(?=(\d{3})+\.)/g,"$&,"))
                $("#totalGanancias").html('S./' + respuesta[0]['ganancias'].replace(/\d(?=(\d{3})+\.)/g,"$&,"))
                $("#totalProductosMinStock").html(respuesta[0]['productoPocoStock'])
                $("#totalVentasHoy").html('S./' + respuesta[0]['ventasHoy'].replace(/\d(?=(\d{3})+\.)/g,"$&,"))
            }
        });
        }, 10000);

        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: 'POST',
            data:{
                'accion' : 1 //Parametro para obtener las ventas del mes
            }
            dataType: 'json',
            success:function(respuesta){
                console.log("respuesta",respuesta);

                var fecha_venta = [];
                var total_venta = [];
                var total_ventas_mes = 0;

                for(let i = 0; i < respuesta.legth; i++){
                    
                    fecha_venta.push(respuesta[i]['fecha_venta']);
                    total_venta.push(respuesta[i]['total_venta']);
                    total_ventas_mes = parseFloat(total_ventas_mes) + parseFloat(respuesta[1]['total_venta']);
                }

                console.log(total_ventas_mes);

                $(".card-title").html('Ventas del mes: S./ ' + total_ventas_mes.toString().replace(/\d(?=(\d{3})+\.)/g, "$&,"));

                var barChartCanvas = $("#barChart").getContext('2d');

                var areaChartData = {
                    labels:fecha_venta,
                    datasets:[
                        {
                            label: 'Ventas del Mes',
                            backgroundColor: 'rbga(60,141,188,0,9)',
                            data: total_venta
                        }
                    ]
                }

                var barChartData = $.extends(true, {}, areaChartData);

                var temp0 = areaChartData.datasets[0];

                barChartData.datasets[0] = temp0;

                var barChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                events: false,
                legend:{
                    display: true
                },
                animation: {
                    duration: 500,
                    easing: "easeOutQuart",
                    onComplete: function (){
                        var ctx = this.chart.ctx;
                        ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', 
                                                            Chart.defaults.global.defaultFontFamily);
                        ctx.textAling = 'center';
                        ctx.textBaseline = 'bottom';

                        this.data.datasets.forEach(function (dataset){
                            for(var i = 0; i < datasets.data.legth; i++){
                                var model = dataset._meta[Object.keys(datasets._meta)[0]].data[i]._model,
                                    scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                                ctx.fillStyle = '#444';
                                var y_pos = model.y - 5;

                                if ((scale_max - model.y) / scale_max >= 0.93)
                                    y_pos = model.y + 20;
                                ctx.fillText(dataset.data[i], model.x, y_post);
                            }
                        });
                    }
                }
            }
            new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })
        }
    });
})
</script>
