<?php

class Default_IndexController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
        $layout = new Zend_Layout();
        $layout->rightsidebar = "This is right sidebar for default layout";
        $layout->usersidebar = "This is user sidebar layout";
        //$layout->setLayout('user');
    }

    public function indexAction() {
        // action body
        $form = new Default_Form_Register();
        if ($this->getRequest()->getPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
               print_r($formData);
                exit;
            }
        }


        $this->view->register = $form;
    }

    public function registerAction() {
        /*
        $form = new Default_Form_Register();
        $formData = $this->getRequest()->getPost();
        if ($form->isValid($formData)) {
            var_dump($this->_request->getPost(), $formData);
            exit;
        } else {
            $errorsMessages = $form->getMessages();
            var_dump($errorsMessages['first_name']);
            exit;
        }
        print_r($this->_request->getPost()); // action body
        die;
        */
    }

}
