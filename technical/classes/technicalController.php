<?php 

class technicalController extends \classes\Controller\CController{
    public $model_name = '';    
    public function index(){
        $this->display(LINK ."/index");
    }
    
    public function visits(){
        $this->display(LINK ."/visits");
    }
    
    public function newvisit(){
        $this->display(LINK ."/newvisit");
    }
    
    public function visitdetail(){
        $this->display(LINK ."/visitdetail");
    }
    
    public function mystock(){
        $this->display(LINK ."/mystock");
    }
    
    public function movement(){
        $this->display(LINK ."/movement");
    }
    
    public function movdetail(){
        $this->display(LINK ."/movdetail");
    }
    
}