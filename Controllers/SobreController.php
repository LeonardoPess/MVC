<?php

  namespace Controllers;

  class SobreController
  {

    public function __construct()
    {
      $this->view = new \Views\MainView('sobre');
    }
    
    public function executar(){
      $this->view->render(array('titulo'=>'About page'));
    }

  }