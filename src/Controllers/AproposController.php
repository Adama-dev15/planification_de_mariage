<?php 
namespace Koleba\Controllers;

class AproposController extends AbstractController
{
    public function index(){
        $this->renderView("AproposView/aproposView");
    }
}
?>