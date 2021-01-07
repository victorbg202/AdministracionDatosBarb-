<?php
    
    session_start();
    require_once "models/producto.php";

    class TiendaControlador {

        private $modelo;
        private $categoria;
        /*<?php $this->modelo->setCat('todos') ?>*/
    
        public function __construct() {
            $this->modelo = new Producto;
        }

        public function Inicio() {
            $titulo = "Logout";
            $url = "?c=login&a=LogOut";
            $urlCarta="?c=carta&a=Inicio";
            $nombre = "";
            if (isset($_GET['categoria'])) { 
                $categoria=$_GET['categoria'];
            }

            if (isset($_SESSION["loged"])) {     
                $nombre = $_SESSION["name"];
                $nombreUrl = "?c=usuario&a=editarPerfil";
            }

            if (!isset($_SESSION['loged'])) {   
                $titulo = "Login / Registrar";
                $url = "?c=login";
            }
            require_once 'views/usuario/header.php';
            require_once "views/productos/listaProductos.php";
            require_once 'views/usuario/footer.php';
        }

    }

?>