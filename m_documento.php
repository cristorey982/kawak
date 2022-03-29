<?php

require_once 'conectar.php';
//error_reporting(E_ALL);

class Documento {
  
  private $registro;
  function __construct() {
    
    $this->registro=array();
    
  }
  
  public function add_documento($doc_nom,$doc_cod,$doc_pro,$doc_tip,$doc_con){
    
    
    $sql="insert into doc_documento values (null,'$doc_nom','$doc_cod','$doc_con','$doc_tip','$doc_pro' )";
    $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());

    if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Ingresado documento Exitosamente');
    window.location='v_documento.php';
    </script>";
    }
  }
  
  public function get_documento(){
   $sql="select * from doc_documento";
   $res=mysqli_query(Conectar::con(),$sql) or die(mysqli_error());

   while($reg=mysqli_fetch_assoc($res))
   {
     $this->registro[]=$reg;
   }
   return $this->registro;		
   
 }
 
 public function edit_documento($doc_nom,$doc_cod,$doc_pro,$doc_tip,$doc_con, $doc_id){
  
  $sql="update doc_documento set doc_nombre='$doc_nom', doc_codigo='$doc_cod', doc_id_proceso='$doc_pro', doc_id_tipo='$doc_tip', doc_contenido='$doc_con' where doc_id=$doc_id";
  $res=mysqli_query(Conectar::con(),$sql);

 if(isset($res)){
    echo "<script type='text/javascript'> 
    alert ('Editado documento Exitosamente');
    window.location='v_documento.php';
    </script>";  
 }
}

public function del_documento($id){
 
  $sql="delete from doc_documento where doc_id=$id";
  $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());
   if(isset($res)){
  echo "<script type='text/javascript'> 
  alert ('Eliminado Exitosamente');
  window.location='v_documento.php';
  </script>";

 }
}

public function get_documento_id($id){

  $sql="select * from doc_documento where doc_id=$id";
  $res=mysqli_query(Conectar::con(),$sql);
  while($reg=mysqli_fetch_assoc($res))
  {
   $this->registro[]=$reg;
 }
 return $this->registro;
 
} 

}//end class documento
?>
