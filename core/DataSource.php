<?php
namespace Phppot;
class DataSource
{

    function getConnection()
    {
        $database_username = 'root';
        $database_password = '';

        $pdo_conn = new \PDO('mysql:host=localhost;dbname=best_wines', $database_username, $database_password);
        return $pdo_conn;
    }
}
?>