<?php 
class MainController{
    function runAction($action){
        $action .= "Action";
        if(method_exists($this,$action)){
            $this->$action();
        }else{
            //Direct To 404 page
            echo "Method Not Exist";
        }
    }

    function render($view, $data){
       extract($data);
       include ROOT . '/view/main.view.php';
    }
}



?>