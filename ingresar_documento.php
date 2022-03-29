<?php
require_once("m_documento.php");
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//error_reporting(-1);
//print_r($_POST);
//die();

$doc = new Documento();

$doc->add_documento($_POST["doc_nombre"],$_POST["doc_codigo"],$_POST["doc_id_proceso"],$_POST["doc_id_tipo"],$_POST["doc_contenido"]);

?>