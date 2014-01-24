<?php

namespace Helloworld\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {

        $loginService = $this->getServiceLocator()->get('LoginService');

        $viewModel = array('greeting' => $loginService->getMetodo());
        return new ViewModel($viewModel);
    }
}