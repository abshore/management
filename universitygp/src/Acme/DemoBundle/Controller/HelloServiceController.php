<?php

namespace Acme\DemoBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HelloServiceController
 *
 * @author ABShore
 */
class HelloServiceController extends Controller {
    
    public function indexAction()
    {
        
       //require 'lib/nusoap.php';
       // include(__DIR__.'/../Resources/nusoap/lib/nusoap.php');
      // $client = new nusoap_client("http://localhost/NuSoap/service.php?wsdl");
      // $client=new \nusoap_client('http://localhost/NuSoap/service.php?wsdl', true);
        $book_name = "xyz";
        $book = "abc";
        $client = new \Soapclient('http://localhost/NuSoap/service.php?wsdl');

        $result = $client->call('getEvent',array());
        // $result = $client->call('hello', array('name' => 'Scott'));

       // $event = $client->call('getEvent');
       // echo $price;
       // return sprintf($price);
        return $this->render('AcmeDemoBundle:Demo:index.html.twig', array(
            
            'event'=>$resut,
        ));


//        $server = new \nusoap_server();
//        $server->configureWSDL("demo", "urn:demo");
//        $server->register(
//                "price", array("name" => 'xsd:string'), array("return" => "xsd:inter")
//        );
//
//        $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
//        $server->service($HTTP_RAW_POST_DATA);
//        
//
//        return $server;
    }
}

?>
