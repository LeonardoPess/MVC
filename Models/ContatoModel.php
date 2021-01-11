<?php

  namespace Models;

  class ContatoModel{
    
    public static function enviarFormulario(){
      $mail = new \Email('host','username','senha','name');
      $mail->addAdress('testes@dankicode.com','Guilherme');
      $mail->formatarEmail(array('assunto'=>'Mensagem do site','corpo'=>'Aqui é uma mensagem do site!'));
      $mail->enviarEmail();
    }

  }