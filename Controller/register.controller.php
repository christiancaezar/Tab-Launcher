<?php 
class RegisterController extends MainController{
    private $data = [];
    
    public function showAction(){
        $this->render('/register', $this->data);
    }



}



?>