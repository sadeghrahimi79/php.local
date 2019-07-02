<?php
require_once "oop/classes/htmlExport.php";
require_once "oop/classes/jsonExport.php";
require_once "oop/classes/xmlExport.php";

$export="xml";
$handler=$export."Export";
$hamdlerobject = new $handler;


class exporthandler{
    public function doexport(canExport $hsndler)
    {
        $hsndler->export();
    }
}

$object=new exporthandler();
$object->doexport($hamdlerobject);