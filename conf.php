<?php
    class Conf {
        static private $databases = array(
        // Le nom d'hote est localhost sur votre machine
        // 'hostname' => 'a_remplir',
        // Au campus, vous avez une BDD nommée comme votre login
        // Sur votre machine, vous devrez creer une BDD
        'database' => 'fabrea',
        // Au campus, c'est votre login
        // Sur votre machine, vous avez surement un compte 'root'
        'login' => 'fabrea',
        // Sur votre machine personelle, vous avez creez ce mdp a l'installation
        'password' => 'quahroh4pait',
        'localhost'=>'www3.futaie.org'

        );
       
        static public function getLogin() {
        //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
        return self::$databases['login'];
        }
        static public function getPassword(){
            return self::$databases['password'];
        }
        static public function getHostname(){
            return self::$databases['localhost'];
        }
        static public function getDatabase(){
            return self::$databases['database'];
        }
    }  

?>