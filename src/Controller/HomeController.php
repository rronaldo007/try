<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $projectInfo = [
            "name" => "try",
            "database" => "try",
            "dbUser" => "ronaldo",
            "cssFramework" => "Bootstrap",
            "environment" => $this->getParameter("kernel.environment"),
            "symfonyVersion" => \Symfony\Component\HttpKernel\Kernel::VERSION,
            "phpVersion" => phpversion(),
        ];
        return $this->render("home/index.html.twig", ["project_info" => $projectInfo]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render("home/about.html.twig");
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render("home/contact.html.twig");
    }
}
