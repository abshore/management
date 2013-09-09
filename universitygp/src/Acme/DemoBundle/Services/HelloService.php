<?php


// src/Acme/SoapBundle/Services/HelloService.php
namespace Acme\DemoBundle\Services;

class HelloService
{
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function hello($name)
    {

        $message = \Swift_Message::newInstance()
                                ->setTo('arouaoui.abdelaziz@example.com')
                                ->setSubject('Hello Service')
                                ->setBody($name . ' dit bonjour !');

        $this->mailer->send($message);


        return 'Bonjour, '.$name;
    }
}
?>
