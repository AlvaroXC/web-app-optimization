<?php

    class Connection {
        public static function connection() {
            try {
                $connection = new PDO('mysql:host=localhost; dbname=noticias', 'admin', '');

                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $connection->exec('SET CHARACTER SET UTF8');
            }catch (Exception $e) {
                die('Error'. $e->getMessage());
            }

            return $connection;
        }
    }