<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\ColumnChart;
use Doctrine\Persistence\ManagerRegistry;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Histogram;



#[Route('/evenement')]
class EvenementController extends AbstractController
{
    #[Route('/', name: 'app_evenement_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $evenements = $entityManager
            ->getRepository(Evenement::class)
            ->findAll();

        return $this->render('evenement/index.html.twig', [
        //return $this->render('back/back.html.twig', [
            'evenements' => $evenements,
        ]);
    }

    #[Route('/back', name: 'app_evenement_back', methods: ['GET'])]
    public function indexA(EntityManagerInterface $entityManager,ManagerRegistry $doctrine): Response
    {
        $evenements = $entityManager
            ->getRepository(Evenement::class)
            ->findAll();



        $query = $entityManager->createQuery(
            'SELECT COUNT(e.idEvent) as nombre_evenements, c.catEvent as categorie
    FROM App\Entity\Evenement e
    JOIN e.idCatEvent c
    GROUP BY c.catEvent'
        );

        $data = $query->getResult();


        // Création du BarChart
        $barChart = new BarChart();
        $tableauResultats = [['Categorie', 'Nombre événements']];
        foreach ($data as $resultat) {
            $tableauResultats[] = [$resultat['categorie'], (int) $resultat['nombre_evenements']];
        }
        $barChart = new BarChart();
        $barChart->getData()->setArrayToDataTable($tableauResultats);
        //$barChart->getOptions()->setTitle('Nombre de Gigs par Catégorie');
        $barChart->getOptions()->setHeight(400);
        //$barChart->getOptions()->setWidth(600);
        $barChart->getOptions()->getTitleTextStyle()->setBold(true);
        $barChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $barChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $barChart->getOptions()->getTitleTextStyle()->setFontSize(20);
        $barChart->getOptions()->getLegend()->setPosition('none');
        $barChart->getOptions()->getHAxis()->setTitle('Nombre de evenement');
        //$barChart->getOptions()->getHAxis()->setTitleTextStyle(['bold' => true]);

        $options = $barChart->getOptions();
        $titleTextStyle = $options->getTitleTextStyle();
        $titleTextStyle->setBold(true);
        $titleTextStyle->setColor('#009900');
        $titleTextStyle->setItalic(true);
        $titleTextStyle->setFontSize(20);



        $barChart->getOptions()->getVAxis()->setTitle('Catégorie');


        return $this->render('evenement/showEvenementBack.html.twig', [
            'evenements' => $evenements,
            'chart' => $barChart
        ]);
    }

    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{idEvent}', name: 'app_evenement_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        $prixTransport=$evenement->getIdTransport()->getPrixTransport();
        $prixTotal=$evenement->getPrix()+$prixTransport;
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
            'prixTotal' => $prixTotal,
            'prixTransport' => $prixTransport
        ]);
    }

    #[Route('/{idEvent}/edit', name: 'app_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{idEvent}', name: 'app_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getIdEvent(), $request->request->get('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_evenement_back', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/eventStats', name: 'app_evenement_stats', methods: ['GET'])]
    public function indexB(ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $conn = $em->getConnection();

        $query = "SELECT DAY(date_debut) AS jour, COUNT(*) AS nb_evenements
          FROM evenement
          WHERE MONTH(date_debut) = MONTH(NOW())
          GROUP BY DAY(date_debut)";

        $stmt = $conn->prepare($query);
        $stmt->execute();

        $data = $stmt->fetchAll();

        $chart = new ColumnChart();
        $chart->getData()->setArrayToDataTable($data);

        $chart->getOptions()->setTitle('Nombre d\'événements par jour du mois en cours');
        $chart->getOptions()->getHAxis()->setTitle('Jour');
        $chart->getOptions()->getVAxis()->setTitle('Nombre d\'événements');

        return $this->render('evenement/showEvenementBack.html.twig', [
            'chart' => $chart
        ]);
    }

}
