<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends Controller
{
    /**
     * @Route("/hello/{name}", name="hello")
     */
    public function index(Request $request, $name)
    {
        return $this->render('hello/index.html.twig', [
            'name' => $name,
            'other_name' => $request->query->get('other_name', 1),
        ]);
    }
}
