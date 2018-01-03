<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{
    public function index(){
        return new Response('<html>
            <body><h1>ola k ase</h1><img src="http://www.bendalls.com.au/wp-content/uploads/2015/06/Purple-Cow-624x500.jpg" alt="foobar"></body>
            </html>');
    }
}