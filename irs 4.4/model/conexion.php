  
<?php
class conexion{
    public function con(){
        $link= mysqli_connect("irsweb22019.mysql.database.azure.com", "adminirs@irsweb22019","IRSDEMEXICO#2019", "irs");
        $link->set_charset("utf8");
        return $link;
    }
}
?>