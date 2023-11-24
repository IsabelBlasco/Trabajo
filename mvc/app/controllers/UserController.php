<?php
    namespace App\Controllers;
    require "../app/models/User.php";
    use App\Models\User;

    class UserController{
        function __construct(){
            //echo "Estoy en USER <br>";
        }
        function index(){
            $users = User::all();
            //print_r($users);
            require "../views/users/index.php";
            
        }
        function show($args){
           $id = (int)$args[0];
           $user = User::find($id);
           require "../views/users/show.php";
        }
        public function create(){
            require '../views/users/create.php';
        }
        public function store(){
            $user = new User();
            $user->name = $_REQUEST['name'];
            $user->surname = $_REQUEST['surname'];
            $user->birthdate = $_REQUEST['birthdate'];
            $user->email = $_REQUEST['email'];
            $user->insert();
            header('Location:/user');
        }
        function edit($args){
            $id = (int)$args[0];
            $user = User::find($id);
            require "../views/users/edit.php";
        }
        public function update(){
            $id = $_REQUEST['id'];
            $user = User::find($id);
            $user->name = $_REQUEST['name'];
            $user->surname = $_REQUEST['surname'];
            $user->birthdate = $_REQUEST['birthdate'];
            $user->email = $_REQUEST['email'];
            $user->save();
            header('Location:/user');
        }
        public function delete($args){
            $id = (int) $args[0];
            $user = User::find($id);
            $user->delete();
            header('Location:/user');
        }
    }
?>