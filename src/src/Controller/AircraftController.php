<?php


namespace App\Controller;


use App\Services\HangarService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AircraftController extends AbstractController
{
    /**
     * @Route("/hangar", name="hangar")
     */
    public function listAction(HangarService $service)
    {
        return new Response(json_encode($service->getCurrentListOfPlanes(),true));
    }
}
