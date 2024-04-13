<?php 
class DashboardController extends MainController{
    private $data = [];
    
    public function showAction(){
        $this->render('/dashboard', $this->data);
    }

}



?>