<?php

namespace Core;

/**
 * Définir la classe Singleton: cette classe ne peut être instanciée qu'une seule fois
 */
class Database
{
    private static \PDO|null $instance = null;

    /**
     * @return \PDO
     */
    public static function getPdo(): \PDO
    {

        if (self::$instance == null){
            try {
                self::$instance = new \PDO(
                    "mysql:host=".$_ENV['DATABASE_HOST'].";dbname=".$_ENV['DATABASE_NAME'],
                    $_ENV['DATABASE_USERNAME'],
                    $_ENV['DATABASE_PASSWORD'],
                    [
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
                    ]
                );
            
            }catch (\PDOException $exception){
                echo $exception->getMessage();
                die;
            }
        }

        return  self::$instance;
    }

}
