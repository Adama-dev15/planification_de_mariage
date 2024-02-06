<?php 
namespace Koleba\Controllers;

class  ContactController extends AbstractController{
    public function index(){
        $this->renderView("ContactView/contactView");
    }
}
?>