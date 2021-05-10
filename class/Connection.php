<?php

class Connection
{
    public static function getConnection()
    {
        try {
            $connection = new PDO(DB_DRIVE . ':host=' . DB_HOSTNAME . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
            exit;
        }
    }
}