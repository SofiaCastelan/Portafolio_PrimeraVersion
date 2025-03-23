<?php
class Conexion {
    function ConexionBD() {
        $host = 'localhost';
        $dbname = 'portafolio';
        $username = 'root';
        $password = '';

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $exp) {
            die("No se logró conectar con la base de datos: " . $exp->getMessage());
        }
    }
}



?>