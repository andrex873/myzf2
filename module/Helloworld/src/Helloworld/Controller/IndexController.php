<?php

namespace Helloworld\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {
        $viewModel = array('greeting' => "hello, world!");
        return new ViewModel($viewModel);
    }
}