<?php
namespace Controller;

use Veto\MVC\AbstractController;

class Frontend extends AbstractController
{
    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function showGraph()
    {
        return $this->render('Graph.html.twig');
    }
}
