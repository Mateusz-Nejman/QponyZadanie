<?php

namespace App\Controller;

use App\Entity\CalculatorData;
use App\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request)
    {
        $data = new CalculatorData();
        $maximum = "";
        $form = $this->createForm(CalculatorType::class, $data);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();
            $maximum = "Maximum value: {$data->maximum()}";
        }
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'form' => $form->createView(),
            'maximum' => $maximum
        ]);
    }
}
