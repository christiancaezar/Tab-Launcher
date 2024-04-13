<?php 
class LoginController extends MainController{
    private $data = [];

    public function showAction(){

        $this->render('/login', $this->data);
    }



}



?>