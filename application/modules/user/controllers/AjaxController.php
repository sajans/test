<?php

class User_AjaxController extends Zend_Controller_Action {

    public function init() {
    	$layout = new Zend_Layout();
        $layout->rightsidebar     = "This is right sidebar ";
        $layout->usersidebar     = "This is user sidebar";
        $layout->usertype     = "This is user  layout type";
        $layout->defaulttype     = "This is user default layout type";

    }
     public function indexAction() {

        $this->view->test = "this is test";

    }

}
?>