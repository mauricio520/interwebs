<?php
namespace Controllers;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->view = new \Views\MainView('login');
    }

    public function executar(){
       $this->view->render();
    }
}
