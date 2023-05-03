<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Transport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\Cloner\Data;

class CalendrierController extends AbstractController
{
//     #[Route('/calendrier', name: 'app_calendrier')]
//     public function index(): Response
//     {
//         return $this->render('calendrier/index.html.twig');
//     }
// }


// class MonCalendrier extends AbstractController
// {
    #[Route('/calendrier', name: 'app_calendrier')]
    public function indexC(EntityManagerInterface $entityManager)
    {
        $transports = $entityManager
            ->getRepository(Transport::class)
            ->findAll();
    
        $trp = [];
        foreach ($transports as $transport) {
            /*$trp[] = [
                'id' => $transports->getIdTransport(),
                'typeTransport' => $transports->getTypeTransport(),
                'dateDepart' => $transports->getDateDepart()->format('Y-m-d H:i:s'),
                'heureDepart' => $transports-> getHeureDepart(),
                'lieuDepart' => $transports->getLieuDepart(),
                'lieuArriver' => $transports->getLieuArriver(),
                'textColor' =>$transports->getTextColor(),
                'backColor' =>$transports->getBackColor(),
                'borderColor' =>$transports->getBorderColor(),
            ];*/

           /* $trp[] = [
                'id' => $transport->getIdTransport(),
                'start' => $transport->getDateDepart()->format('Y-m-d H:i:s'),
                'end' => $transport->getDateDepart()->format('Y-m-d H:i:s'),
                'title' => $transport->getTypeTransport(),
                'description' => $transport->getTypeTransport(),
                'backgroundColor' => $transport->getTextColor(),
                'borderColor' => $transport->getBorderColor(),
                'textColor' => $transport->getTextColor(),
                'allDay' => $transport->getTextColor(),
            ];*/

            $trp[] = [
                'id' => $transport->getIdTransport(),
                'start' => $transport->getDateDepart()->format('Y-m-d H:i:s'),
                'end' => $transport->getDateDepart()->format('Y-m-d H:i:s'),
                'title' => $transport->getTypeTransport(),
                'description' => $transport->getTypeTransport(),
                'backgroundColor' => $transport->getTextColor(),
                'borderColor' => $transport->getBorderColor(),
                'textColor' => $transport->getTextColor(),
                'allDay' => $transport->getTextColor(),
            ];

        }
    
        $data = json_encode($trp);
    
        return $this->render('calendrier/index.html.twig',compact('data'));
    }
    



}
