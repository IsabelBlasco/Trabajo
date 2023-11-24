<?php
    class User{
        const USER = [
            array(1,"Pedro"),
            array(2,"Ana"),
            array(3,"Laura"),
            array(4,"Juan")
        ];
        //debuelve Array con los datos de los usuarios
        public static function all(){
            return User::USER;
        }
        //debuelve un usuario en particular
        //
        public static function find($id){
            return User::USER[$id - 1];
        }
    }
?>