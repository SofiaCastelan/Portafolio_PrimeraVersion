<?php
class Conexion {
    function ConexionBD() {
        $host = 'bej91ewkiao6hbnek2z1-mysql.services.clever-cloud.com';
        $dbname = 'bej91ewkiao6hbnek2z1';
        $username = 'ucz4kq870ahjn30m';
        $password = 'Tb5KyBCjOKTOcB3jKwCV';

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