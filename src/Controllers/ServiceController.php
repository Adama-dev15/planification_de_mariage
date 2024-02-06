<?php 
namespace Koleba\Controllers;

class ServiceController extends AbstractController{
    public function index(){
        $this->renderView("ServiceView/serviceView");
    }
}
?>