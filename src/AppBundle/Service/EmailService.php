<?php
namespace AppBundle\Service;


class EmailService
{
    private $mailer;
    private $twig;

    public function __construct(\Swift_Mailer $mailer, \Twig_Environment $twig){
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    public function sendEmail($parameters, $front)
    {    
        $message = (new \Swift_Message($parameters['object']))
                    ->setFrom([ 'adresse@email.com' => 'Associations de ESGI' ])
                    ->setTo($parameters['to'])
                    ->setBody($this->twig->render($front['view'], $front['variables']),'text/html');
        dump($this->mailer->send($message));
        return $this->mailer->send($message);
    }
}