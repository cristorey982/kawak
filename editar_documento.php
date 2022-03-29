<!DOCTYPE html>
<?php
require_once 'm_documento.php';

$sql="Select tip_id, tip_nombre, tip_prefijo FROM tip_tipo_doc";

 $res=mysqli_query(Conectar::con(),$sql) or die(mysqli_error());

 $sql2="Select pro_id, pro_nombre, pro_prefijo FROM pro_proceso";

 $res2=mysqli_query(Conectar::con(),$sql2) or die(mysqli_error());

?>
 <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
 <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
 <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
 <!--[if gt IE 8]><!--> 

<?php
    require_once 'm_documento.php';
    $lib = new Documento(); 
    if(isset($_POST["grabar"]) and $_POST["grabar"]=="si"){
    //print_r($_POST);
    //die();

        $lib->edit_documento($_POST["doc_nombre"],$_POST["doc_codigo"],$_POST["doc_id_proceso"],$_POST["doc_id_tipo"],$_POST["doc_contenido"],$_POST["doc_id"]);
        exit;

    }
    $pro=$lib->get_documento_id($_GET["id"]);
    ?>
 <html class="no-js"> <!--<![endif]-->
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>::KAWAK::</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/icomoon-social.css">
  <link rel="stylesheet" href="css/Estilos.css">
 
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/dataTables.jqueryui.min.css">
  <!--<link rel="stylesheet" href="css/leaflet.css" />-->
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/leaflet.ie.css" />
            <![endif]-->
            <link rel="stylesheet" href="css/main.css">

            <!-- bootstrap 4 alpha-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
            

            
          </head>
          <body>
              <div class="content">

            
 <!-- Header -->            
            <?php include('header.php'); ?>
            <!-- End Header -->

            <div class="container-fluid">
              <div class="row justify-content-start">

               <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="">
                  <br>
                  
                </div>
              </div>

              <div class="col-sm-8 col-md-8 col-lg-8">
               
                
                <div class="container-fluid">
                  <div class="panel-group" id="accordion">
                      <div class="panel panel-danger">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                             Editar de documento<small>  kawak</small></a>
                            </h4>
                          </div>
                          <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">

                             <form action="editar_documento.php" method="POST">
                             <div class="form-horizontal">
                              <h2>Actualizar las características del documento</h2>
                              <br>
                               <div class="form-group has-success">

                                  <label class="control-label hidden-xs col-sm-2 col-md-2" for="est_bar">Nombre</label>
                                  <div class="col-xs-6 col-md-4">
                                    <input type="text" class="form-control input-lg" id="doc_nombre" name="doc_nombre" value="<?php echo $pro[0]["doc_nombre"];?>" data-toggle="tooltip"  title="Escribe el nombre!">
                                  </div>

                                  <label  class="control-label hidden-xs col-sm-2 col-md-2" for="nombre">Codigo</label>
                                  <div class="col-xs-6 col-sm-3 col-md-3">
                                 
                                    <input type="text" class="form-control input-lg" id="doc_codigo" name="doc_codigo" value="<?php echo $pro[0]["doc_codigo"];?>" data-toggle="tooltip" title="">
                                  </div>
                              </div>
                              
                              <div class="form-group has-warning">
                                <label class="control-label hidden-xs col-sm-2 col-md-2" for="est_bar">Tipo Documento</label>
                                 <div class="col-xs-6 col-md-4">
                                  <?php
                                      $id_tipo=$pro[0]["doc_id_tipo"];
                                      //echo $id_tipo;
                                  ?>
                                  <select name="doc_id_tipo" class="custom-select input-lg btn-block" title="Tipo Documento" data-style="btn-success" required>
                                   <?php
                                                            while($lista=mysqli_fetch_array($res))

                                                            {

                                                                echo "<option value='" . $lista["tip_id"] ."'";

                                                                if ($lista["tip_id"]==$id_tipo)

                                                                    echo "selected";

                                                                echo ">" . $lista["tip_nombre"] ."</option>";

                                                            }
                                  ?>
                                  </select>
                                </div>

                                 <label class="control-label hidden-xs col-sm-2 col-md-2" for="est_bar">Proceso</label>
                                 <div class="col-xs-6 col-md-3">
                                  <?php
                                      $id_pro=$pro[0]["doc_id_proceso"];
                                     // echo $id_pro;
                                  ?>
                                  <select name="doc_id_proceso" class="custom-select input-lg btn-block" title="Proceso" data-style="btn-success" required>
                                    <?php
                                                            while($lista2=mysqli_fetch_array($res2))

                                                            {

                                                                echo "<option value='" . $lista2["pro_id"] ."'";

                                                                if ($lista2["pro_id"]==$id_pro)

                                                                    echo "selected";

                                                                echo ">" . $lista2["pro_nombre"] ."</option>";

                                                            }
                                                            ?>
                                  </select>
                                </div>
                              </div>


                               <div class="form-group has-success">
                                <div class="control-label  col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10">
                                  <label for="comment" class="control-label col-md-1">Contenido:</label>
                                  <textarea class="form-control" rows="5" id="doc_contenido" name="doc_contenido"><?php echo $pro[0]["doc_contenido"];?></textarea>
                                </div>
                              </div>
                              <br>
                             
                        

                          <br><br>
                          <div class="form-group has-warning">
                            <div class="text-center">
                             <a href="v_documento.php" class="btn btn-outline-success btn-lg" role="button"> Atras</a>
                              <input type="hidden" name="grabar" value="si">
                              <input type="hidden" name="doc_id" value="<?php echo $_GET["id"];?>">
                              <button type="submit" class="btn btn-outline-danger btn-lg"> Editar</button>
                            </div>
                          </div>


                        </div>
                      </form>

                    </div>
                  </div>
                </div>
        

                    </div>

                     </div>
                    </div>

                    </div>
                </div>
                    
                   
                           
            </div> <!-- /content -->


            <!-- Footer -->
       <?php include('footer.php') ?>
       <!-- End Footer -->


       

             <!-- Javascripts -->
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
             <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
             <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
             <script src="js/bootstrap.min.js"></script>
             <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
             <script src="js/jquery.fitvids.js"></script>
             <script src="js/jquery.sequence-min.js"></script>
             <script src="js/jquery.bxslider.js"></script>
             <script src="js/main-menu.js"></script>
             <script src="js/template.js"></script>
             <script src="js/documento.js" type="text/javascript"></script>
             <!-- datatable UI -->

             <script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
             <script type="text/javascript" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
             <script type="text/javascript" src="//cdn.datatables.net/1.10.13/js/dataTables.jqueryui.min.js"></script>
             <script
             src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"
             integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI="
             crossorigin="anonymous"></script>


             <script type="text/javascript">
             $(document).ready(function() {
               $( "#button" ).button();
 
               $('[data-toggle="tooltip"]').tooltip({
                position: {
                  my: "left bottom-20",
                  at: "left top",
                  using: function( position, feedback ) {
                    $( this ).css( position );
                    $( "<div>" )
                    .addClass( "arrow" )
                    .addClass( feedback.vertical )
                    .addClass( feedback.horizontal )
                    .appendTo( this );
                  }
                }
              });  
               $('#datatable').DataTable({
                "language": {
                  "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                },
                "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "Todos"]]
              });

             });
             </script>

             <style>

             .nota { color: #FF0000; }
             
             h4 {
               font-family: 'MTCORSVA';
             }
             .ui-tooltip, .arrow:after {
              background: black;
              border: 2px solid white;
            }
            .ui-tooltip {
              padding: 10px 20px;
              color: white;
              border-radius: 20px;
              font: bold 14px "Helvetica Neue", Sans-Serif;
              text-transform: uppercase;
              box-shadow: 0 0 7px black;
            }
            .arrow {
              width: 70px;
              height: 16px;
              overflow: hidden;
              position: absolute;
              left: 50%;
              margin-left: -35px;
              bottom: -16px;
            }
            .arrow.top {
              top: -16px;
              bottom: auto;
            }
            .arrow.left {
              left: 20%;
            }
            .arrow:after {
              content: "";
              position: absolute;
              left: 20px;
              top: -20px;
              width: 25px;
              height: 25px;
              box-shadow: 6px 5px 9px -9px black;
              -webkit-transform: rotate(45deg);
              -ms-transform: rotate(45deg);
              transform: rotate(45deg);
            }
            .arrow.top:after {
              bottom: -20px;
              top: auto;
            }
            </style>



          </body>
          </html>

          


