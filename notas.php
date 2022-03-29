
 class Conectar
{
   public static function con(){
     
     $conexion=mysql_connect("localhost","root","");
     mysql_select_db("kawak");
     return $conexion;
   }  
}
  
         //sentencia de seleccionar periodos
 $sql2="Select pro_id, pro_nombre FROM pro_proceso";

 $res2=mysqli_query(Conectar::con(),$sql2) or die(mysqli_error());