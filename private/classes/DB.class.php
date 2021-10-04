<?php
class DB {

        private static function connect() {
                //  $pdo = new PDO('mysql:host=127.0.0.1;dbname=healthvi_logistic_app;charset=utf8', 'healthvi_app', '2;IPEg8dcTi?');
                // $pdo = new PDO('mysql:host=127.0.0.1;dbname=khaylux_logistic;charset=utf8', 'khaylux_dbuser', 'dbuser@12345');
                $pdo = new PDO('mysql:host=127.0.0.1;dbname=logistic_app;charset=utf8', 'root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
        }

        public static function query($query, $params = array()) {
                $statement = self::connect()->prepare($query);
                $statement->execute($params);

                if (explode(' ', $query)[0] == 'SELECT') {
                $data = $statement->fetchAll();
                return $data;
                }
        }

}