<!DOCTYPE html>
<html>
<head>
<?php include 'tpl/head.php'; ?>
</head>
<body>
<?php include 'tpl/header.php'; ?>

<div class="section_home">
	<div class="container" id="dashboard_content">
		<div class="col-sm-10 col-sm-offset1 col-xs-12">
			<h2>Reporte de Asistencias</h2>
			<div id="reporte_asistencias" class="col-xs-12">
				<h3>Numero de Asistencias Totales</h3>
				<div class="col-xs-6">
					<img src="app/img/inicio/persona.jpg" alt="">	
				</div>
				<div class="col-xs-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta iure id veritatis reiciendis numquam natus, sed deleniti, modi ratione sint! Beatae harum veniam voluptas maxime eos minus, veritatis consectetur voluptatem.</p>
				</div>
				<div class="col-xs-12">
					<button>Imprimir</button>
				</div>
			</div>
		</div>
		<div class="col-sm-10 col-sm-offset1 col-xs-12">
			<h2>Justificación de faltas</h2>
			<div class="col-xs-12">
				<h3>Justificaciones de faltas x2</h3>
				<div class="col-xs-6">
					<img src="app/img/inicio/persona.jpg" alt="">	
				</div>
				<div class="col-xs-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta iure id veritatis reiciendis numquam natus, sed deleniti, modi ratione sint! Beatae harum veniam voluptas maxime eos minus, veritatis consectetur voluptatem.</p>
				</div>
				<div class="col-xs-12">
					<button>Imprimir</button>
				</div>
			</div>
		</div>
		<div class="col-sm-10 col-sm-offset1 col-xs-12">
			<h2>Reporte de Inasistencias</h2>
			<div class="col-xs-12">
				<h3>Numero de Inasistencias Totales</h3>
				<div class="col-xs-6">
					<img src="app/img/inicio/persona.jpg" alt="">	
				</div>
				<div class="col-xs-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta iure id veritatis reiciendis numquam natus, sed deleniti, modi ratione sint! Beatae harum veniam voluptas maxime eos minus, veritatis consectetur voluptatem.</p>
				</div>
				<div class="col-xs-12">
					<button>Imprimir</button>
				</div>
			</div>	
		</div>
		<div class="col-sm-10 col-sm-offset1 col-xs-12">
			<h2>Reporte de Pruebas</h2>
			<div class="col-xs-12">
				<h3>Numero de Inasistencias Totales</h3>
				<div class="col-xs-6">
				    <div class="col-xs-12">
					    <div class="row">
					        <div class='col-sm-12'>
					            <div class="form-group">
					                <div class='input-group date' id='datetimepicker5'>
					                    <input type='text' class="form-control" />
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
					            </div>
					        </div>
					        <script type="text/javascript">
					            $(function () {
					                $('#datetimepicker5').datetimepicker({
					                    defaultDate: "11/1/2013",
					                    disabledDates: [
					                        moment("12/25/2013"),
					                        new Date(2013, 11 - 1, 21),
					                        "11/22/2013 00:53"
					                    ]
					                });
					            });
					        </script>
					    </div>
					</div>
				</div>
				<div class="col-xs-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta iure id veritatis reiciendis numquam natus, sed deleniti, modi ratione sint! Beatae harum veniam voluptas maxime eos minus, veritatis consectetur voluptatem.</p>
				</div>
				<div class="col-xs-12">
					<button>Imprimir</button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'tpl/footer.php'; ?>
</body>
</html>