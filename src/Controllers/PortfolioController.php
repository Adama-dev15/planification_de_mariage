<?php 
namespace Koleba\Controllers;

class PortfolioController extends AbstractController{
    public function index(){
        $this->renderView("PortfolioView/portfolioView");
    }
}
?>