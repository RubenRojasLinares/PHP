<?php


class MvcController{

    public function plantilla(){

        include "MVC/View/template.php";

    }

    public function enlacesPaginasController(){

        if(isset($_GET["action"]))
        {
            $enlacesController=$_GET["action"];
        
        }
        else{
            $enlacesController="index";
        

        }
        

        $respuesta= EnlacePaginas :: enlacePaginasModelo($enlacesController);
        include $respuesta;
    }
};

?>