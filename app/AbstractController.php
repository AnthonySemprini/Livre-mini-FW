<?php
    namespace App;

    abstract class AbstractController{

        public function index(){}
        
        public function redirectTo($ctrl = null, $action = null, $id = null){

            if($ctrl  != "home"){
                $url = $ctrl ? "?ctrl=".$ctrl : "";
                $url.= $action ? "&action=".$action : "";
                $url.= $id ? "&id=".$id : "";
            }
            // en premier mettre le controller en 2 la paage topic puis id si besoin $this->redirectTo("bib",'listTopics',$id);  
            else $url = "/";
            header("Location: $url");
            die();

        }

       

    }