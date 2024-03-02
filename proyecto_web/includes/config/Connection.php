<?php

    class Connection {

        /**
         * Esta función devuelve una conexión de hacia la base de datos
         */
        public static function connection() {
            try {
                $connection = new PDO("mysql:host={$_SERVER["HOST"]}; dbname={$_SERVER["DDBB_NAME"]}", $_SERVER["DDBB_USER"], $_SERVER["DDBB_PASSWORD"]);

                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $connection->exec('SET CHARACTER SET UTF8');
            }catch (Exception $e) {
                die('Error'. $e->getMessage());
            }

            return $connection;
        }
    }