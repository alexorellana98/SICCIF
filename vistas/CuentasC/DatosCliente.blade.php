<?php

$con=mysqli_connect('localhost','root','','finanzas');
ini_set('date.timezone', 'America/El_Salvador');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrar Cliente</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="estilos.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

 

<!-- Optional theme -->

<link rel="stylesheet" type="text/css" href="estilos.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="../dist/css/datatables.bootstrap.min.css"/>
  <!-- daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!--Alertas -->
  <script src="../dist/js/sweetalert-dev.js"></script>
  <link rel="stylesheet" type="text/css" href="../dist/css/sweetalert.css"/>


  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <script src="../plugins/jquery.maskedinput.js"></script>
<script src="../plugins/jquery-3.1.0.min.js"></script>
<script src="../plugins/bootstrapValidator"></script>
<script>
        $(function () {
            $.mask.definitions['~'] = "[+-]";
            $("#date").mask("99/99/9999", {completed: function () {
                    alert("completed!");
                }});
            $("#tel").mask("9999-9999");
            $("#dui").mask("09999999-9");
            $("#nit").mask("9999-999999-999-9");
            $("input").blur(function () {
                $("#info").html("Unmasked value: " + $(this).mask());
            }).dblclick(function () {
                $(this).unmask();
            });
        });
    </script>
<script language="javascript">

 
 
function envia(){
   window.location="http://localhost/siccif/vistas/CuentasC/RegistroCliente.blade.php";
  }
</script>
<header class="main-header">
    <?php include('../ActivoFijo/header.php'); ?> 
  </header>

  <?php include('../ActivoFijo/menu.php'); ?> 
</head>
<body class="hold-transition skin-green-light sidebar-mini">
  <div class="wrapper">

    <div class="container">
    <div class="col-md-12 col-md-offset-1">
    <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-9 col-lg-12 page-header">
    <h3 align="center" >Ingresar Datos del Cliente</h3>
    </div>
    </div>
    </div>
    </div>  

	<div class="row">

 <div class="col-md-2"></div>


  <div class="col-md-9 col-md-offset-2">
  

  <?php 
  $bandera=0;
  ?>                               


 <form  action="insert.php" method="post" class="form-register" > 
       <div class="input-group">
   
 <div class="col-lg-12 col-md-offset-2">
 


<div class="col-md-6">
<div class="form-group">
  <select class="form-control" name="persona" id="persona" onchange="per(this.value)">
  <option value="0">Persona Natural</option>
  <option value="1">Persona Juridica</option>
</select>
</div>
<div class="input-group">

  <label for="nomb" id="noC" >Nombre de Cliente:</label>
  <div class="input-group">
  <input type="text" class="form-control" id="nomb" placeholder="Nombre" name="nomb" >
  <div class="input-group-addon"><span  class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
</div>
</div>


<br>

<div class="input-group">
  <label for="nit" id="ni">NIT: </label>
  <div class="input-group">
  <input type="text" class="form-control" id="nit" placeholder="0000-000000-000-0" name="nit">
   <div class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></div>
  </div>
</div>

<br>

<div class="input-group">

  <label for="tel" >Telefono:</label>
  <div class="input-group">
  <input type="text" class="form-control" id="tel" placeholder="0000-0000" name="tel" >
  <div class="input-group-addon"><span  class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></div>
</div>
</div>

<br>
 <div class="input-group">

  <label for="Ocup" id="oc" >Ocupación:</label>
  <div class="input-group">
  <input type="text" class="form-control" id="Ocup" placeholder="Ocupación laboral" name="Ocup" >
  <div class="input-group-addon"><span  class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
</div>
</div>


<br>
 

<div class="input-group">
  <label for="dir">Dirección:</label>
  <div class="input-group">
  <textarea type="text" class="form-control" id="dir" name="dir" style="width:300px;"></textarea> 
  <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
  </div>
</div>
<br>


</div>






<div class="col-md-6">

<br>
<br>
<div class="input-group" id="a2" style="width:220px; display:none;">

  <label for="repre" >Representante Legal:</label>
  <div class="input-group">
  <input type="text" class="form-control" id="repre" placeholder="Nombre Representante" name="repre" >
  <div class="input-group-addon"><span  class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
</div>
</div>
<div class="input-group" id="a1" style="width:220px;">

  <label for="ape" >Apellidos:</label>
  <div class="input-group">
  <input type="text" class="form-control" id="ape" placeholder="Apellidos" name="ape" >
  <div class="input-group-addon"><span  class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
</div>
</div>
<br>
<div class="input-group">

  <label for="dui" id="du">DUI:</label>
  <div class="input-group">
  <input type="text" class="form-control sombraCajas" id="dui" placeholder="00000000-0" name="dui">
   <div class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></div>
  </div>
</div>

<br>

<div class="form-group" style="width:220px;">

  <label for="depa">Departamento:</label>
 <select class="form-control" data-live-search="true" id="depa" name="depa" >
<option></option> 
<option value="San Salvador" >San Salvador</option>
 <option value="San Vicente" >San Vicente</option>
 <option value="Morazán" >Morazan</option>
 <option value="Ahuachapán" >Ahuachapan</option>
 <option value="La Union" >La Union</option>
 <option value="La Libertad" >La Libertad</option>
 <option value="La Paz" >La Paz</option>
 <option value="San Miguel" >San Miguel</option>
 <option value="Santa Ana" >Santa Ana</option>
 <option value="Sonsonate" >Sonsonate</option>
 <option value="Usulutan" >Usulutan</option>
 <option value="Cabañas" >Cabañas</option>
 <option value="Chalatenango" >Chalatenango</option>
 <option value="Cuscatlán">Cuscatlan</option>
</select>
</div>
<br>
<br>

<div class="input-group">
  <label for="fecha">Fecha de registro:</label>
  <div class="input-group">
  <input type="text" class="form-control" id="fecha" name="fecha" value="<?php echo date("Y/m/d"); ?>">
  <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
  </div>
</div>

</div>
  <div class="col-lg-12 col-md-offset-5">
<br>
<br> 
<div class="button-group">
<button type="submit" class="btn btn-success">Guardar</button>
<button type="button" class="btn btn-success" data-dismiss="modal" onclick="envia()">Cancelar</button>
</div>
</div>

</div>
</form>
</div>

<script language="javascript">
  function per(val){
   
    if(val==0){
      document.querySelector('#noC').innerText="Nombre de Cliente:";
      document.querySelector('#du').innerText="DUI:";
      document.querySelector('#ni').innerText="NIT:";
      document.querySelector('#oc').innerText="Ocupación:";
      document.getElementById('Ocup').placeholder="Ocupación Laboral";
      document.getElementById('a1').style.display='block';
      document.getElementById('a2').style.display='none';
    }else{
      document.querySelector('#noC').innerText="Nombre de Empresa:";
      document.querySelector('#du').innerText="DUI de Representante:";
      document.querySelector('#ni').innerText="NIT de Empresa:";
      document.querySelector('#oc').innerText="Giro:";
      document.getElementById('Ocup').placeholder="Giro de Empresa";
      document.getElementById('a1').style.display='none';
      document.getElementById('a2').style.display='block';
    }

  }
</script>

 
<div class="col-md-1"></div>

 </div>
 


   <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js">
   
  </script>
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../dist/js/jquery.datatables.min.js"></script>
<script src="../dist/js/datatables.bootstrap.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/jquery.maskedinput.js"></script>
<script src="../plugins/jquery-3.1.0.min.js"></script>
<script src="../plugins/bootstrapValidator"></script>
<!-- date-range-picker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<script src="../plugins/jquery.validate.js"></script>

<script src="../dist/js/pages/privilegios.js"></script>
 </div>
</body>
</html>