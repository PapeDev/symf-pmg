<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PmgController extends Controller
{
    /**
     * @Route("/todos", name="todo_list")
     */
    public function listAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('todo/index.html.twig');
    }
}