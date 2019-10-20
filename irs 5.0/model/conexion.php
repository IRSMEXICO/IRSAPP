<?php
class conexion{
    public function con(){
        $link= mysqli_connect("irsweb.mysql.database.azure.com", "adminirs@irsweb","IRSDEMEXICO#2019", "irs");
        $link->set_charset("utf8");
        return $link;
    }
}
?>