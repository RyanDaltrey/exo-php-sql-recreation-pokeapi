<?php

class Database{


    private static $dbHost = "localhost";
        private static $dbName = "pokedex";
        private static $dbUsername = "root";
        private static $dbUserpassword = "";
        private static $connection = null;
    
        public static function connect() {
            if(self::$connection == null) {
                try {
                self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
                }
                catch(PDOException $e) {
                    die($e->getMessage());
                }
            }

            return self::$connection;
        }

        public static function getPokemon(){
            $db = Database::connect();
    
            $executerRequeteSQL = $db->query("SELECT * FROM pokemon;");

    
            $recupererPokemon = $executerRequeteSQL;
    
            return $recupererPokemon;
        }
};
?>

