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

        public static function getPokemons(){
            $db = Database::connect();
            $recupererPokemon = $db->query ("SELECT num_poke, nom, taille, description, masse, hp, attack, defence, vitesse, defence_spe, attack_spe, img_poke, generation,version_app, habitat, competences, categorie FROM pokemon");
            
            return $recupererPokemon;
        
        }
};
?>

