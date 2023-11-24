<?php
    namespace Trabajo\Controller;
    require "../trabajo/models/Cervezas.php";
    use Trabajo\Models\Cervezas;

    class CervezasController{

        function __construct(){
            echo "Estoy en Cervezas <br>";
        }

        function index(){
            $cervezas = Cervezas::all();
            require "../vistas/galeria.php";
        }
        function show($args){
           $id = (int)$args[0];
           $cerveza = Cervezas::find($id);
           require "../vistas/show.php";
        }

        public function create(){
            require '../vista/agregar.php';
        }

        public function store(){
            $cerveza = new Cervezas();
            $cerveza->Nombre = $_REQUEST['nombre'];
            $cerveza->Tipo = $_REQUEST['tipo'];
            $cerveza->Graduacion = $_REQUEST['graduacion'];
            $cerveza->Pais = $_REQUEST['pais'];
            $cerveza->Precio = $_REQUEST['precio'];
            $cerveza->Ruta = $_REQUEST['ruta'];
            $cerveza->insert();
            header('Location:/cervezas');
        }

        function edit($args){
            $id = (int)$args[0];
            $cerveza = Cervezas::find($id);
            require "../vistas/edit.php";
        }

        public function update(){
            $id = $_REQUEST['id'];
            $cerveza = Cervezas::find($id);
            $cerveza->Nombre = $_REQUEST['nombre'];
            $cerveza->Tipo = $_REQUEST['tipo'];
            $cerveza->Graduacion = $_REQUEST['graduacion'];
            $cerveza->Pais = $_REQUEST['pais'];
            $cerveza->Precio = $_REQUEST['precio'];
            $cerveza->Ruta = $_REQUEST['ruta'];
            $cerveza->save();
            header('Location:/cervezas');
        }

        public function delete($args){
            $id = (int) $args[0];
            $cerveza = Cervezas::find($id);
            $cerveza->delete();
            header('Location:/cerveza');
        }
    }
?>