<?php
class conexion{
    public function con(){
        $link= mysqli_connect("localhost", "root","", "irs");
        $link->set_charset("utf8");
        return $link;
    }
}
?>