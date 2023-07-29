<?php

    namespace Controller;

    use App\Session;
    use App\AbstractController;
    use App\ControllerInterface;
    use Model\Managers\LivreManager;
    use Model\Managers\AuteurManager;
   
    
    class HomeController extends AbstractController implements ControllerInterface{

        public function index(){
            
           
                return [
                    "view" => VIEW_DIR."home.php"
                ];
            }
            
        
   
       
        public function bibRules(){
            
            return [
                "view" => VIEW_DIR."rules.php"
            ];
        }

        public function biblioRules(){
            
            return [
                "view" => VIEW_DIR."rules.php"
            ];
        }
        /*public function ajax(){
            $nb = $_GET['nb'];
            $nb++;
            include(VIEW_DIR."ajax.php");
        }*/
    }