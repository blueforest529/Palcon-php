<?php

use Phalcon\Mvc\Controller;

class PhalconProController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->users = Users::find();
    }


}
