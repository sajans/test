<?php

Class Default_Form_Register extends Zend_Form {

    public function init() {
        $capitalValidator = new Zend_Validate_Capital();
        $upper = new Zend_Filter_StringToUpper(); #test
        $this->setAction('index');
        $this->setMethod('post');
        $fName = new Zend_Form_Element_Text('first_name');
        $fName->setLabel("firstname")
                ->setRequired(true)
                //->addFilter($upper)#test
                //->setValue("sdadfa")
                ->setAttrib('pattern', '^[A-Z0-9_-]*$')
                ->setAttrib('title', 'Given Value Should Be in Upper Case')
                ->addValidator($capitalValidator);

               
                //->addFilter('StringToUpper') #This is actually not required
                //->addValidator('regex', true, array("/^[A-Z0-9_-]*$/", 'messages' => array('regexNotMatch' => 'Given Value Should Be in Upper Case')));
        $lName = new Zend_Form_Element_Text('last_name');
        $lName->setLabel("lastname")
                ->setRequired(true);
        $sub = new Zend_Form_Element_Submit('submit');
        $sub->setLabel("Submit");
        $this->addElements(array($fName, $lName, $sub));
    }

}

?>