<?php

namespace App\Controller;

use App\Entity\Transport;
use App\Form\TransportType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use Knp\Component\Pager\PaginatorInterface;




#[Route('/transport')]
class TransportController extends AbstractController
{
    #[Route('/front', name: 'app_transport_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $transports = $entityManager
            ->getRepository(Transport::class)
            ->findAll();

        return $this->render('front/transport/index.html.twig', [
            'transports' => $transports,
        ]);
    }

    #[Route('/back', name: 'app_transport_back', methods: ['GET'])]
    public function indexA(Request $request,EntityManagerInterface $entityManager,PaginatorInterface $paginator): Response
    {
        $transports = $entityManager
            ->getRepository(Transport::class)
            ->findAll();

         $transports = $paginator->paginate(
            $transports,
            $request->query->getInt(key:'page',default: 1),
            4
         );

        return $this->render('back/transport/index.html.twig', [
            'transports' => $transports,
        ]);
    }

    #[Route('/back/new', name: 'app_transport_back_new', methods: ['GET', 'POST'])]
    public function newA(Request $request, EntityManagerInterface $entityManager): Response
    {
        $transport = new Transport();
        $form = $this->createForm(TransportType::class, $transport);
        $form->add('textColor',ColorType::class);
        $form->add('backColor',ColorType::class);
        $form->add('borderColor',ColorType::class);
        $form->add('save',SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($transport);
            $entityManager->flush();

         //   return $this->redirectToRoute('app_transport_index', [], Response::HTTP_SEE_OTHER);
        }
        $this->addFlash('success', 'Le transport a été Ajouter');

        return $this->renderForm('back/transport/addtransport.html.twig', [
            'transport' => $transport,
            'form' => $form,
        ]);
    }



    


    #[Route('/front/new', name: 'app_transport_front_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $transport = new Transport();
        $form = $this->createForm(TransportType::class, $transport);
        // $form->
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($transport);
            $entityManager->flush();

            // return $this->redirectToRoute('app_transport_index', [], Response::HTTP_SEE_OTHER);
        }
        $this->addFlash('success', 'Le transport a été Ajouté');
        return $this->renderForm('front/transport/new.html.twig', [
            'transport' => $transport,
            'form' => $form,
        ]);
    }



    #[Route('/{idTransport}/front', name: 'app_transport_front_show', methods: ['GET'])]
    public function show(Transport $transport): Response
    {
        return $this->render('front/transport/show.html.twig', [
            'transport' => $transport,
        ]);
    }

    #[Route('/{idTransport}/back', name: 'app_transport_back_show', methods: ['GET'])]
    public function showA(Transport $transport): Response
    {
        return $this->render('back/transport/show.html.twig', [
            'transport' => $transport,
        ]);
    }

    #[Route('/{idTransport}/front/edit', name: 'app_transport_front_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Transport $transport, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TransportType::class, $transport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

           // return $this->redirectToRoute('app_transport_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/transport/edit.html.twig', [
            'transport' => $transport,
            'form' => $form,
        ]);
    }

    #[Route('/{idTransport}/back/edit', name: 'app_transport_back_edit', methods: ['GET', 'POST'])]
    public function editA(Request $request, Transport $transport, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TransportType::class, $transport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

           // return $this->redirectToRoute('app_transport_index', [], Response::HTTP_SEE_OTHER);
        }
        $this->addFlash('success', 'Le transport a été Modifier');
        return $this->renderForm('back/transport/edit.html.twig', [
            'transport' => $transport,
            'form' => $form,
        ]);
    }




    #[Route('/{idTransport}/back', name: 'app_transport_back_delete', methods: ['POST'])]
    public function delete(Request $request, Transport $transport, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$transport->getIdTransport(), $request->request->get('_token'))) {
            $entityManager->remove($transport);
            $entityManager->flush();
        }
        $this->addFlash('success', 'Le Transport a été Supprimé');
         return $this->redirectToRoute('app_transport_back', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{idTransport}/front/new', name: 'app_transport_front_delete', methods: ['POST'])]
    public function deleteA(Request $request, Transport $transport, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$transport->getIdTransport(), $request->request->get('_token'))) {
            $entityManager->remove($transport);
            $entityManager->flush();
        }
        $this->addFlash('success', 'Le Transport a été Supprimé');

         return $this->redirectToRoute('app_transport_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/back/transportStats', name: 'app_transport_back_stats', methods: ['GET', 'POST'])]
    public function transportStats(EntityManagerInterface $entityManager)
    {
        $transportRepository = $entityManager->getRepository(Transport::class);
        $qb = $transportRepository->createQueryBuilder('t');
$qb->select('COUNT(t.idTransport) as total')
    ->addSelect('t.typeTransport')
    ->groupBy('t.typeTransport');
$query = $qb->getQuery();
$results = $query->getResult();


        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable([
            ['Type de transport', 'Nombre'],
            [$results[0]['typeTransport'], (int)$results[0]['total']],
            [$results[1]['typeTransport'], (int)$results[1]['total']],
            [$results[2]['typeTransport'], (int)$results[2]['total']],
            // [$results[3]['typeTransport'], (int)$results[3]['total']],
            // Ajoutez d'autres entrées pour chaque type de transport
        ]);

        $pieChart->getOptions()->setTitle('Nombre de chaque type de transport');
        $pieChart->getOptions()->setHeight(400);
        $pieChart->getOptions()->setWidth(600);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        $columnChart = new ColumnChart();
    $columnChart->getData()->setArrayToDataTable([
        ['Type de transport', 'Nombre'],
        [$results[0]['typeTransport'], (int)$results[0]['total']],
        [$results[1]['typeTransport'], (int)$results[1]['total']],
        [$results[2]['typeTransport'], (int)$results[2]['total']],
        // [$results[3]['typeTransport'], (int)$results[3]['total']],
        // Ajoutez d'autres entrées pour chaque type de transport
    ]);

    $columnChart->getOptions()->setTitle('Nombre de chaque type de transport');
    $columnChart->getOptions()->setHeight(400);
    $columnChart->getOptions()->setWidth(600);
    $columnChart->getOptions()->getTitleTextStyle()->setBold(true);
    $columnChart->getOptions()->getTitleTextStyle()->setColor('#009900');
    $columnChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('back/transport/statistique.html.twig', [
            'chart' => $pieChart,
            'barchart' => $columnChart,

        ]);
    }
    
}
