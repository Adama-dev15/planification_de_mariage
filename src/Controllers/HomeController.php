<?php 
namespace Koleba\Controllers;

class HomeController extends AbstractController{
    public function index(){
        $this->renderView("HomeView/homeView");
    }
}
?>