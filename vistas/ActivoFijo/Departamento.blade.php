<?php
require 'conexion.php';
$con=mysqli_connect('localhost','root','','finanzas');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Departamento</title>

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

<script language="javascript">
    function sele(){
  var cond= $("#condi").val();
  if (cond==1) {
     window.location="http://localhost/siccif/vistas/ActivoFijo/Departamento.blade.php";
  }else{window.location="http://localhost/siccif/vistas/ActivoFijo/DepartamentoInactivo.blade.php";}

}
    $(document).ready(function () {
   $('#entradafilter').keyup(function () {
      var rex = new RegExp($(this).val(), 'i');
        $('.contenidobusqueda tr').hide();
        $('.contenidobusqueda tr').filter(function () {
            return rex.test($(this).text());
        }).show();

        })

});
</script>
<header class="main-header">
    <?php include("header.php"); ?> 
  </header>

  <?php include("menu.php"); ?> 

</head>

<?php
if (!empty($_GET['btnalta1']))  {
//activa el activo 
$est=1;
$var=$_GET['btnalta1'];
$sql = " UPDATE departamento set estado='$est' WHERE idDep='$var'";
$resultado = $mysqli->query($sql); 
}
?>


<body class="hold-transition skin-green-light sidebar-mini">
  <div class="wrapper">
 
    <div class="container">
    <div class="col-md-12">
    <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-9 col-lg-12 page-header">
    <h3 align="center" >Gestionar Departamentos</h3>
    </div>
    </div>
    </div>
    </div>  

  <div class="row">

 <div class="col-md-2"></div>



  <div class="col-md-9 col-md-offset-3"  style=" margin-left: 58px;">
  
<div class="col-md-3">
<br>
 <div class="form-group">
<button type="button"  class="btn btn-success" data-toggle="modal" data-target="#ModalRegistarProveedor"  >Ingresar Departamento</button>

   </div>
   </div>

<div class="col-md-2 ">
<div class="form-group">

  <label for="condi">Estado :</label>
 <select class="form-control" data-live-search="true" id="condi" name="condi" onchange="sele()">
<option></option> 
<option value="1" >Activo</option>
 
<option value="0">Inactivo </option>
</select>
</div>
</div> 
             

 <div class="col-sm-12 col-md-12">

  
  <div class="panel-body">

  <form action="#" method="get" class="form-horizontal">
          

         <div class="col-md-3 col-md-offset-9" style="margin-top:15px; margin-left: 706px;"> <!--col-md-offset desplaza columnas a la derecha -->
                <div class="form-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <div class="input-group">
                    <input id="entradafilter" type="text" class="form-control"> 
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-success" style="margin-right:-20px;"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                  </div>
                    </div>
                     </div>
    </form>

<?php

$cont=0;
?>
<div class="row thumbnail">


<table class="table table-list-search table-bordered table-hover">
<thead>

                         <tr style="background: #00a65a">

    <th scope="col" style="color:#FFFFFF" WIDTH="50" HEIGHT='9' >N°</th>
    <th scope="col" style="color:#FFFFFF">Codigo</th>
    <th scope="col" style="color:#FFFFFF">Nombre</th>
    <th scope="col" style="color:#FFFFFF" WIDTH="200" HEIGHT='9'>Opciones</th>
  </tr>
  </thead>
  <tbody class="contenidobusqueda">
 


<?php
$extraer="SELECT * FROM departamento";

 $base=mysqli_select_db($con,'finanzas');
$ejecutar=mysqli_query($con,$extraer);


while($ejecuta=mysqli_fetch_array($ejecutar))
{if (($ejecuta['estado'])==1) {
  $cont=$cont+1;
  
    ?>  
  <tr>
    <td><?php  echo $cont ?> </td>
    <td><?php echo $ejecuta['codigo']?></td>
    <td><?php echo $ejecuta['nombre']?></td>
 
    <td>
       <form  action="editarDepartamento.blade.php" method="post" class="form-register" > 
     &nbsp;
&nbsp; <button  type="submit" class="btn btn-danger" id="btnEditar" name="btnEditar" style="background-color: transparent border:0" data-toggle="modal"  value="<?php echo $ejecuta['idDep']?>" >Editar</button>
      </form>
 
    <form style="margin-left: 70px; margin-top:-33px;" action="DepartamentoInactivo.blade.php" method="get" class="form-register" > 
     &nbsp;
&nbsp;<button  type="submit" class="btn btn-warning" id="btnbaja" name="btnbaja" style="background-color: transparent border:0" data-toggle="modal"  value=<?php echo $ejecuta['idDep'] ?>>Baja</button>
     </form>
    </td>
  </tr>

<?php
}
}
?> 
  </tbody>
  
                </table>
</div>

 
       

</div>

 
<!--Modal  Registrar Proveedor-->

<div id="ModalRegistarProveedor" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
<form  action="insert.php" method="post" class="form-register" > 
    <div class="modal-content">
    <div class="color-moduloInventario">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="col-md-offset-5">
        <h4 class="modal-title">Ingresar Departamento</h4>
      </div>
       <div class="modal-body">

 <div class="row">
  <div class="col-md-12">


<div class="col-md-3 ">

<img src="img/proveedor.png" class="img-rounded" alt="Cinque Terre" width="300" height="250">
</div>

<div class="col-md-5 col-md-offset-1">


<div class="form-group">

  <label for="nombDe" >Nombre:</label>
  <div class="input-group">
  <input type="text" class="form-control" id="nombDe" name="nombDe" placeholder="Nombre">
  <div class="input-group-addon"><span  class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
</div>
</div>


<br>

<div class="form-group">

  <label for="codDe" >Código:</label>
  <div class="input-group">
  <input type="text" class="form-control" id="codDe" name="codDe" placeholder="Ejemplo : 0001">
  <div class="input-group-addon"><span  class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
</div>
</div>


</div>

</div>
</div> 
 </div>
  
 <div class="modal-footer">

        <button type="submit" class="btn btn-success" >Guardar</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
      </form>
      </div>
 </div>
 </div>

<!--Fin modal Registrar Proveedor-->
</div>
<div class="col-md-1"></div>


 </div>


   
  
 <script  >
   function cod(idcat){
    $('#codsub').val(idcat);
   }
 </script>
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
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
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