<?php
require_once("m_documento.php");

//print_r($_GET);
$reg = new Documento();
$reg->del_documento($_GET["id"]);


?>