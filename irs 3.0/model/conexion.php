<?php
class conexion{
    public function con(){
        $link= mysqli_connect("irspruebas22019.mysql.database.azure.com", "irspruebas@irspruebas22019","IRSDEMEXICO#2019", "irsbd");
        $link->set_charset("utf8");
        return $link;
    }
}
?>