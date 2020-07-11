<?php

    class EnlacePaginas{
        public static function enlacePaginasModelo($enlaceModel){
                if(
                        $enlaceModel=="nosotros"||
                        $enlaceModel=="servicios"||
                        $enlaceModel=="contactanos"||
                        $enlaceModel=="inicio" ){
                    $module="MVC/View/Modules/".$enlaceModel.".php";
                }
                else if($enlaceModel=="index"){

                    $module="MVC/View/Modules/inicio.php";
                }else{

                    $module="MVC/View/Modules/inicio.php";
                }
                return $module;
        }

    }

?>