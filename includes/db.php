<?php 

class DB {

    // conexión
    static $host = "localhost";
    static $user = "root";
    static $password = "";
    static $db = "personas1";

    public static function query($sql){
        //crear conexión
        $con = new mysqli(self::$host, self::$user, self::$password, self::$db);
        
        $result = $con->query($sql); 
        
        $con->close();

        return $result;
        
       
    }
}

?>