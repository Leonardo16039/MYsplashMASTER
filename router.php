<?php

namespace MVC;


Class Router {
    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn) {
        $this->getRoutes[$url]= $fn;
        
    }

    public function post($url, $fn){
        $this->postRoutes[$url]= $fn;
    }

    public function validateRoutes(){
       $currentURL = strtok($_SERVER['REQUEST_URI'], "?") ?? "/";
       $method = $_SERVER["REQUEST_METHOD"];
       if($method === "GET"){
          $fn = $this->getRoutes[$currentURL] ?? null;
         }else{
            $fn = $this->postRoutes[$currentURL] ?? null;
          
       }
       if($fn){

            //EJECUTAR UNA FUNCION CUANDO NO SABEMOS CUAL ES LA FUNCION NECESARIA
            call_user_func($fn,$this);  //PASAR LOS PARAMETROS DEL METODO
       }else{
           echo"ERROR 404";
       }

    }

    public function render($views, $data = []){
        foreach($data as $key => $value){
            $$key = $value;
        }
        ob_start(); // almacenamiento en memoria
        include_once __DIR__ . "/views/$views.php";
        $content = ob_get_clean();
        include_once __DIR__ . "/views/layout.php";
    }
}